<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Session;
use Intervention\Image\ImageManagerStatic as Image;
use DB;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $categories = DB::table('categories')
        //       ->select('categories.*')
        //       ->where('categories.status',1)
        //       ->get();
        $categories = Category::all();
        return view('admin.category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.category.create');
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
          'name' => 'required',
          'sid' => 'required',
      ]);
      $category = new Category([
          'name' => $request->get('name'),
          'sid' => $request->get('sid')
      ]);
      $category->save();

      return redirect()->route('categories.index')
          ->with('success','Category created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $category = Category::find($id);
      $category->status == 1 ? $category->status = 0 : $category->status = 1;
      $category->save();
      return redirect()->route('categories.index')
          ->with('success','Category status changed successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $category = Category::find($id);
      return view('admin.category.edit',compact('category'));
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
          'name' => 'required',
          'sid' => 'required',
      ]);
      $category = Category::find($id);
      $requestData = $request->all();
      $category->update($requestData);
      return redirect()->route('categories.index')
          ->with('success','Category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function check($id)
    {
      $category = Category::find($id);
      $category->delete();
      return redirect()->route('categories.index')
          ->with('success','Category deleted successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $category = Category::find($id);
      $category->delete();
      return redirect()->route('categories.index')
          ->with('success','Category deleted successfully');
    }
}
