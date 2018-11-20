<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Shipping;
use Session;

class ShippingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shippings = DB::table('shippings')->get();

        return view('admin.all_shipping')->with('shippings',$shippings);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $shipping = new Shipping;

        $shipping-> shipping_means = $request-> shipping_means;

        $shipping ->save();
        
        Session::flash('success','Shipping means added successfully');
        return redirect()->route('Shipping.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $shipping = Shipping::find($id);
        $shipping->delete();
        
        Session::flash('success','Shipping deleted successfully.');
        return redirect()->route('Shipping.index');
    }
}
