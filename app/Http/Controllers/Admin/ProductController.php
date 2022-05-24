<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Session;
use Intervention\Image\ImageManagerStatic as Image;
use DB;
use App\TagProduct;
use App\CategoryProduct;
use App\ColorProduct;
use App\Pimage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $products = DB::table('products')
            ->join('tag_product', 'products.id', '=', 'tag_product.product_id')
            ->join('tags', 'tags.id', '=', 'tag_product.tag_id')
            ->join('category_product', 'category_product.product_id', '=', 'products.id')
            ->join('categories', 'category_product.category_id', '=', 'categories.id')
            ->join('color_product', 'color_product.product_id', '=', 'products.id')
            ->join('pcolors', 'color_product.color_id', '=', 'pcolors.id')
            ->select('products.*',DB::raw('group_concat(tags.name) as tag'),DB::raw('group_concat(tags.id)  as tag_id'),DB::raw('group_concat(categories.name)  as category'),DB::raw('group_concat(pcolors.name)  as color'))
            ->where('categories.status',1)
            ->where('pcolors.status',1)
            ->where('tags.status',1)
            ->orderby('products.created_at','desc')
            ->groupBy('products.id')
            ->get();

      return view('admin.product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $categories = DB::table('categories')
            ->select('categories.*')
            ->where('categories.status',1)
            ->get();

      $tags = DB::table('tags')
            ->select('tags.*')
            ->where('tags.status',1)
            ->get();

      $pcolors = DB::table('pcolors')
            ->select('pcolors.*')
            ->where('pcolors.status',1)
            ->get();

      return view('admin.product.create',compact('categories','tags','pcolors'));
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
          'category_id' => 'required',
          'name' => 'required',
          'description' => 'required',
          'size' => 'required',
          'color_id' => 'required',
          'tag_id' => 'required',
          'image' => 'required',
      ]);
      $product = new Product([
          'name' => $request->get('name'),
          'size' => $request->get('size'),
          'description' => $request->get('description'),
          'price' => $request->get('price'),
      ]);
      $product->save();

      foreach ($request->get('tag_id') as $tag) {
          $tagProduct = new TagProduct([
              'product_id' => $product->id,
              'tag_id' => $tag,
          ]);
          $tagProduct->save();
      }
      foreach ($request->get('color_id') as $color) {
          $colorProduct = new ColorProduct([
              'product_id' => $product->id,
              'color_id' => $color,
          ]);
          $colorProduct->save();
      }
      foreach ($request->get('category_id') as $category) {
          $categoryProduct = new CategoryProduct([
              'product_id' => $product->id,
              'category_id' => $category,
          ]);
          $categoryProduct->save();
      }

      $nCount = 1;
      foreach ($request->file('image') as $file) {
           $image = $file;
           $fileName = $nCount.time().'.'.$image->getClientOriginalExtension();
           $destinationPath = base_path('public_html/uploads/product/');
           $image->move($destinationPath, $fileName);

            $productImage = new Pimage([
                'product_id' => $product->id,
                'image' => $fileName,
                'sequence' => $nCount,
            ]);
            $productImage->save();
            $nCount++;
        }
      return redirect()->route('products.index')
          ->with('success','Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $product = Product::find($id);
      $product->status == 1 ? $product->status = 0 : $product->status = 1;
      $product->save();
      return redirect()->route('products.index')
          ->with('success','Product status changed successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $categories = DB::table('categories')
            ->select('categories.*')
            ->where('categories.status',1)
            ->get();

      $tags = DB::table('tags')
            ->select('tags.*')
            ->where('tags.status',1)
            ->get();

      $pcolors = DB::table('pcolors')
            ->select('pcolors.*')
            ->where('pcolors.status',1)
            ->get();

      $product = Product::find($id);

      $productTags = DB::table('tag_product')
            ->select('tag_product.tag_id as id')
            ->where('tag_product.product_id',$id)
            ->get();

      $productColors = DB::table('color_product')
            ->select('color_product.color_id as id')
            ->where('color_product.product_id',$id)
            ->get();

      $productCategories = DB::table('category_product')
            ->select('category_product.category_id as id')
            ->where('category_product.product_id',$id)
            ->get();

      $productCategoryIds = [];
      foreach ($productCategories as $productCategory) {
        $productCategoryIds[] = $productCategory->id;
      }

      $productColorIds = [];
      foreach ($productColors as $productColor) {
        $productColorIds[] = $productColor->id;
      }

      $productTagIds = [];
      foreach ($productTags as $productTag) {
        $productTagIds[] = $productTag->id;
      }
      return view('admin.product.edit',compact('product','tags','categories','pcolors','productTagIds','productCategoryIds','productColorIds'));
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
        'category_id' => 'required',
        'name' => 'required',
        'description' => 'required',
        'size' => 'required',
        'color_id' => 'required',
        'tag_id' => 'required',
      ]);
      $product = Product::find($id);
      $requestData = $request->all();
      unset($requestData['tag_id']);
      unset($requestData['color_id']);
      unset($requestData['category_id']);
      $product->update($requestData);

      DB::table('tag_product')->where('product_id', $id)->delete();
      foreach ($request->get('tag_id') as $tag) {
          $tagProduct = new TagProduct([
              'product_id' => $product->id,
              'tag_id' => $tag,
          ]);
          $tagProduct->save();
      }
      DB::table('color_product')->where('product_id', $id)->delete();
      foreach ($request->get('color_id') as $color) {
          $colorProduct = new ColorProduct([
              'product_id' => $product->id,
              'color_id' => $color,
          ]);
          $colorProduct->save();
      }
      DB::table('category_product')->where('product_id', $id)->delete();
      foreach ($request->get('category_id') as $category) {
          $categoryProduct = new CategoryProduct([
              'product_id' => $product->id,
              'category_id' => $category,
          ]);
          $categoryProduct->save();
      }
      return redirect()->route('products.index')
          ->with('success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $product = Product::find($id);
      $product->delete();
      return redirect()->route('products.index')
          ->with('success','Product deleted successfully');
    }
}
