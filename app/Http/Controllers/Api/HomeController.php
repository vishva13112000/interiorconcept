<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Api\BaseController as BaseController;
use DB;
use App\Product;
use App\Banner;
use App\Category;

class HomeController extends BaseController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Category api with sequence
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getAllCategory()
    {
        $categories = DB::table('categories')
              ->select('categories.*')
              ->where('categories.status',1)
              ->orderby('categories.sid','asc')
              ->get();

        return $this->sendResponse(['category' => $categories], 'Categories retrieved successfully.');
    }

    /**
     * Product listing api with pagination
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getAllProduct($id)
    {
        $category = Category::find($id);        
        if (empty($category)) {
            return $this->sendError('Category not found.');               
        }  
        $products = DB::table('products')
              ->select('products.*','pimages.image as image')
              ->join('pimages', 'pimages.product_id', '=', 'products.id')
              ->join('category_product', 'category_product.product_id', '=', 'products.id')
              ->where('products.status',1)
              ->where('category_product.category_id',$id)
              ->orderby('products.created_at','desc')
              ->groupBy('products.id')
              ->paginate(10);

         $url  = url('/uploads/product');
         foreach ($products->items() as $product) {
            $product->image = $url.'/'.$product->image;
         }     

        return $this->sendResponse(['products' => $products], 'Products retrieved successfully.');   
    }

    /**
     * Product detail api
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getProductDetail($id)
    {
        $product = Product::find($id);  
        if (empty($product)) {
            return $this->sendError('Product not found.');               
        }    

        $pimages = DB::table('pimages')
              ->select('pimages.*','pimages.image as image')
              ->where('pimages.status',1)
              ->where('pimages.product_id',$id)
              ->orderby('pimages.sequence','asc')
              ->get();

        $productsColors = DB::table('pcolors')
              ->join('color_product', 'color_product.color_id', '=', 'pcolors.id')
              ->select('pcolors.*')
              ->where('pcolors.status',1)
              ->where('color_product.product_id',$id)
              ->get();
        
        $url  = url('/uploads/product');
        $aProducts = [];
        if (!empty($product)) {
             $aProducts['name'] = $product->name;   
             $aProducts['description'] = $product->description;   
             $aProducts['price'] = $product->price;   
             $aProducts['status'] = $product->status;   
             $aProducts['size'] = $product->size;   
             $nCount = 0;
             foreach ($pimages as $pimage) {
                $aProducts['product_image'][$nCount]['image'] = $url.'/'.$pimage->image;
                $aProducts['product_image'][$nCount]['sequence'] = $product->sequence;
                $nCount++;
             }

             $nCount = 0;
             foreach ($productsColors as $productsColor) {
                $aProducts['product_color'][$nCount]['name'] = $productsColor->name;
                $nCount++;
             }
        }
        return $this->sendResponse(['product' => $aProducts], 'Product detail retrieved successfully.');         
             
    }

    /**
     * Searching api
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getSearchApi(Request $request)
    {
        if (empty($request->get('q'))) {
            return $this->sendError('Please pass "q" param.');               
        }
        $products = DB::table('products')
              ->select('products.*','pimages.image as image')
              ->join('pimages', 'pimages.product_id', '=', 'products.id')
              ->join('tag_product', 'products.id', '=', 'tag_product.product_id')
              ->join('tags', 'tags.id', '=', 'tag_product.tag_id')
              ->where('products.status',1)
              ->where('tags.name', 'LIKE', '%'.$request->get('q').'%')
              ->orWhere('products.name', 'LIKE', '%'.$request->get('q').'%')
              ->groupBy('products.id')
              ->get();

         $url  = url('/uploads/product');
         $aProducts = [];     
         $nCount = 0;
         foreach ($products as $product) {
	    $aProducts[$nCount]['id'] = $product->id;		
            $aProducts[$nCount]['image'] = $url.'/'.$product->image;
            $aProducts[$nCount]['name'] = $product->name;
            $aProducts[$nCount]['description'] = $product->description;
            $aProducts[$nCount]['price'] = $product->price;
            $nCount++;
         }     

        return $this->sendResponse(['products' => $aProducts], 'Products search retrieved successfully.');         
    }

    /**
     * Banner api with status code
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getAllBanner()
    {
        $banners = DB::table('banners')
              ->select('banners.*')
              ->where('banners.status',1)
              ->orderby('banners.created_at','desc')
              ->paginate(10);

        $url  = url('/uploads/banner');
        foreach ($banners->items() as $banner) {
            $banner->image = $url.'/'.$banner->image;
        }          
        return $this->sendResponse(['banners' => $banners], 'Banners retrieved successfully.');      
    }

    /**
     * Banner detail api with status code
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getBannerDetail($id)
    {
        $banner = Banner::find($id);        
        if (empty($banner)) {
            return $this->sendError('Banner not found.');               
        }    
        $products = DB::table('banner_product')
                  ->join('products', 'products.id', '=', 'banner_product.product_id') 
                  ->join('pimages', 'pimages.product_id', '=', 'products.id')
                  ->select('products.*','pimages.image as image')
                  ->where('products.status',1)
                  ->where('banner_product.banner_id',$id)
                  ->orderby('products.created_at','desc')
                  ->groupBy('products.id')
                  ->get();

        $aBanners = [];     
        if (!empty($banner)) {
            $url  = url('/uploads/banner');
            $urlProduct  = url('/uploads/product');
            $aBanners['image'] = $url.'/'.$banner->image;
            $aBanners['status'] = $banner->status;
            $nCount = 0;
            foreach ($products as $product) {
                $aBanners['banner_product'][$nCount]['image'] = $urlProduct.'/'.$product->image;
                $aBanners['banner_product'][$nCount]['name'] = $product->name;
                $aBanners['banner_product'][$nCount]['description'] = $product->description;
                $aBanners['banner_product'][$nCount]['price'] = $product->price;
                $nCount++;
            }
        }
        return $this->sendResponse(['banners' => $aBanners], 'Banner detail retrieved successfully.');           
    }
}
