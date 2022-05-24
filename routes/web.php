<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/clear-cache', function() {
  Artisan::call('cache:clear');
  Artisan::call('view:clear');
  Artisan::call('config:clear');
  Artisan::call('route:clear');
  Artisan::call('config:cache');
  return "Cache is cleared";
});

Route::prefix('admin')->group(function(){
	Auth::routes();
	Route::get('auth/logout', 'Auth\LoginController@logout')->name('logout');

    //Admin role
    Route::group(['middleware' => ['auth:web']], function() {
        Route::get('/', 'Admin\HomeController@index')->name('admin.home');
        Route::resource('categories','Admin\CategoryController');
        Route::get('categories/delete/{id}','Admin\CategoryController@Destroy')->name('category_delete');
        Route::resource('tags','Admin\TagController');
        Route::get('tags/delete/{id}','Admin\TagController@Destroy')->name('tag_delete');
        Route::resource('pcolors','Admin\PcolorController');
        Route::get('pcolors/delete/{id}','Admin\PcolorController@Destroy')->name('pcolor_delete');
        Route::resource('products','Admin\ProductController');
        Route::get('products/delete/{id}','Admin\ProductController@Destroy')->name('product_delete');
        Route::resource('pimages','Admin\PimageController');
        Route::get('pimages/create/{id}','Admin\PimageController@create')->name('pimage.create');
        Route::get('pimages/status/{id}/{pid}','Admin\PimageController@show')->name('pimage.show');
        Route::get('pimages/list/{id}','Admin\PimageController@index')->name('pimage.index');
        Route::get('pimages/delete/{id}/{pid}','Admin\PimageController@Destroy')->name('pimage_delete');
        Route::resource('banners','Admin\BannerController');
        Route::get('banners/delete/{id}','Admin\BannerController@Destroy')->name('banner_delete');
        Route::get('documents/showapi','Admin\DocumentController@showapi')->name('document_showapi');
    });
});

/*------------------------------------------------------------------------------------------*/

Route::get('/', 'Website\FrontController@index');
