<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Brands;
use Session;

class BrandsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = DB::table('brands')->get();

        return view('admin.all_brands')->with('brands',$brands);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $brand = new Brands;

        $brand->name =  $request->name;
        $brand->item_count = $request->item_count;
        $brand->description =  $request->description;
        $brand->sold_count =  $request->sold_count;
        $brand->views_count =  $request->views_count;

        $brand->save();
        
        Session::flash('Success','brand added successfully!');

        return redirect()->route('Brands.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $brand = Brands::find($id);

      $brand->delete();
      
      Session::flash('success','Brand was successfully deleted.');  
      return redirect()->route('Brands.index');

    }
}
