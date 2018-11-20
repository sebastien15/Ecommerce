<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\SubCategory;
use Session;

class SubcatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcats = DB::table('sub_categories')->get();

        return view('admin.all_subcat')->with('subcats',$subcats);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $subcat = new SubCategory;

        $subcat->subcat_name = $request->subcat_name;       
        $subcat->sold_count  = $request->sold_count;
        $subcat->views_count = $request->views_count;

        $subcat->save();
        
        Session::flash('success','Subcat added successfully');
        return redirect()->route('Subcat.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subcat = SubCategory::find($id);
        $subcat->delete();
        
        Session::flash('success','Sub-Category deleted successfully.');
        return redirect()->route('Subcat.index');
    }
}
