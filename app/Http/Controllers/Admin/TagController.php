<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tag;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Session;
use Intervention\Image\ImageManagerStatic as Image;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $tags = Tag::all();
      return view('admin.tag.index',compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.tag.create');
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
      ]);
      $tag = new Tag([
          'name' => $request->get('name')
      ]);
      $tag->save();

      return redirect()->route('tags.index')
          ->with('success','Tag created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $tag = Tag::find($id);
      $tag->status == 1 ? $tag->status = 0 : $tag->status = 1;
      $tag->save();
      return redirect()->route('tags.index')
          ->with('success','Tag status changed successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $tag = Tag::find($id);
      return view('admin.tag.edit',compact('tag'));
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
      ]);
      $tag = Tag::find($id);
      $requestData = $request->all();
      $tag->update($requestData);
      return redirect()->route('tags.index')
          ->with('success','Tag updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $tag = Tag::find($id);
      $tag->delete();
      return redirect()->route('tags.index')
          ->with('success','Tag deleted successfully');
    }
}
