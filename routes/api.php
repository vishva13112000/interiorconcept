<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('category', 'Api\HomeController@getAllCategory');
Route::get('products/{id}', 'Api\HomeController@getAllProduct');
Route::get('product/detail/{id}', 'Api\HomeController@getProductDetail');
Route::get('search', 'Api\HomeController@getSearchApi');
Route::get('banners', 'Api\HomeController@getAllBanner');
Route::get('banner/detail/{id}', 'Api\HomeController@getBannerDetail');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
