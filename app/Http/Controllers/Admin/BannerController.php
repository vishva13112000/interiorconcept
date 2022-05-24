<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Banner;
use App\BannerProduct;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Session;
use Intervention\Image\ImageManagerStatic as Image;
use DB;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $banners = DB::table('banners')
            ->join('banner_product', 'banner_product.banner_id', '=', 'banners.id')
            ->join('products', 'products.id', '=', 'banner_product.product_id')
            ->select('banners.*',DB::raw('group_concat(products.name)  as product'))
            ->orderby('banners.created_at','desc')
            ->groupBy('banners.id')
            ->get();

      return view('admin.banner.index',compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $products = DB::table('products')
            ->select('products.*')
            ->where('products.status',1)
            ->get();

      return view('admin.banner.create',compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'product_id' => 'required',
        ]);

        $image = $request->file('image');
        $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = base_path() . '/public/uploads/banner';
        if (!file_exists($destinationPath)) {
            mkdir($destinationPath, 0777, true);
        }
        $newimage = Image::make($image);
        $newimage->save($destinationPath.'/'.$input['imagename']);

        $banner = new Banner;
        $banner->image = $input['imagename'];
        $banner->save();

        foreach ($request->get('product_id') as $productId) {
            $bannerProduct = new BannerProduct([
                'product_id' => $productId,
                'banner_id' => $banner->id,
            ]);
            $bannerProduct->save();
        }

        return redirect()->route('banners.index')->with('success','Banner created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $banner = Banner::find($id);
      $banner->status == 1 ? $banner->status = 0 : $banner->status = 1;
      $banner->save();
      return redirect()->route('banners.index')
          ->with('success','Banner status changed successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $products = DB::table('products')
            ->select('products.*')
            ->where('products.status',1)
            ->get();

      $banner = Banner::find($id);
      $bannerProducts = DB::table('banner_product')
            ->select('banner_product.product_id as id')
            ->where('banner_product.banner_id',$id)
            ->get();

      $bannerProductIds = [];
      foreach ($bannerProducts as $bannerProduct) {
        $bannerProductIds[] = $bannerProduct->id;
      }
      return view('admin.banner.edit',compact('banner','products','bannerProductIds'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'product_id' => 'required',
        ]);

        if($request->file('image')) {
            $image = $request->file('image');
            $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = base_path() . '/public/uploads/banner';
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0777, true);
            }
            $newimage = Image::make($image);
            $newimage->save($destinationPath.'/'.$input['imagename']);
        }

        $banner = Banner::find($id);
        $banner->image = isset($input['imagename']) ? $input['imagename'] : $banner->image;
        $banner->status = $request->get('status');
        $banner->save();
        DB::table('banner_product')->where('banner_id', $id)->delete();
        foreach ($request->get('product_id') as $productId) {
            $bannerProduct = new BannerProduct([
                'product_id' => $productId,
                'banner_id' => $banner->id,
            ]);
            $bannerProduct->save();
        }

        return redirect()->route('banners.index')->with('success','Banner updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $banner = Banner::find($id);
      $banner->delete();
      return redirect()->route('banners.index')
          ->with('success','Banner deleted successfully');
    }
}
