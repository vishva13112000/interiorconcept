<?php

namespace App\Http\Controllers\Website;

use App\Banner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontController extends Controller
{
    public function index(){
        $data['banners'] = Banner::where('status',1)->orderBy('id','DESC')->get();
        return view('website.index',$data);
    }
}
