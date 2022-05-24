<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pcolor;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Session;
use Intervention\Image\ImageManagerStatic as Image;

class PcolorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $pcolors = Pcolor::all();
      return view('admin.pcolor.index',compact('pcolors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.pcolor.create');
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
      $pcolor = new Pcolor([
          'name' => $request->get('name')
      ]);
      $pcolor->save();

      return redirect()->route('pcolors.index')
          ->with('success','Color created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $pcolor = Pcolor::find($id);
      $pcolor->status == 1 ? $pcolor->status = 0 : $pcolor->status = 1;
      $pcolor->save();
      return redirect()->route('pcolors.index')
          ->with('success','Color status changed successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $pcolor = Pcolor::find($id);
      return view('admin.pcolor.edit',compact('pcolor'));
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
      $pcolor = Pcolor::find($id);
      $requestData = $request->all();
      $pcolor->update($requestData);
      return redirect()->route('pcolors.index')
          ->with('success','Color updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $pcolor = Pcolor::find($id);
      $pcolor->delete();
      return redirect()->route('pcolors.index')
          ->with('success','Color deleted successfully');
    }
}
