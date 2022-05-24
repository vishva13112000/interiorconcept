<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pimage;
use App\Product;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Session;
use Intervention\Image\ImageManagerStatic as Image;
use DB;

class PimageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
      $pimages = DB::table('pimages')
            ->join('products', 'products.id', '=', 'pimages.product_id')
            ->select('pimages.*','products.name as product')
            ->orderby('pimages.created_at','desc')
            ->where('pimages.product_id',$id)
            ->get();

      return view('admin.pimage.index',compact('pimages','id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
      return view('admin.pimage.create',compact('id'));
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
          'product_id' => 'required',
          'image' => 'required',
        ]);
       $image = $request->file('image');
       $fileName = time().'.'.$image->getClientOriginalExtension();
       $destinationPath = base_path('public_html/uploads/product/');
       $image->move($destinationPath, $fileName);

        $productImage = new Pimage([
            'product_id' => $request->get('product_id'),
            'image' => $fileName,
            'sequence' => $request->get('sequence'),
        ]);
        $productImage->save();
     
        return redirect()->route('pimage.index',['id' => $request->get('product_id')])
          ->with('success','Product Image upload successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id,$pid)
    {
      $pimage = Pimage::find($id);
      $pimage->status == 1 ? $pimage->status = 0 : $pimage->status = 1;
      $pimage->save();
      return redirect()->route('pimage.index',['id' => $pid])
          ->with('success','Product image status changed successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        $pimage = Pimage::find($id);
        $pimage->sequence = $request->get('seq');
        $pimage->save();
        return redirect()->route('pimage.index',['id' => $request->get('pid')])
          ->with('success','Product image sequence changed successfully');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,$pid)
    {
        $pimage = Pimage::find($id);
        $pimage->delete();
        return redirect()->route('pimage.index',['id' => $pid])
            ->with('success','Product Image deleted successfully');
    }
}
