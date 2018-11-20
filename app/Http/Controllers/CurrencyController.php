<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Currency;

class CurrencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $currencies = DB::table('currencies')->get();

        return view('admin.all_currency')
                ->with('currencies',$currencies);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $currency =  new Currency;

        $currency->name        = $request->name;
        $currency->percentage  = $request->percentage;

        $currency->save();
      
        Session::flash('success','Currency added successfully');

        return redirect()->route('Currency.index');
    }
     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $currency = Currency::find($id);
        $currencies = DB::table('currencies')->get();

        return view('admin.Edit_currency')
                ->with('currency',$currency)
                ->with('currencies',$currencies);
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
        $currency = Currency::find($id);

        $currency->name        = $request->name;
        $currency->percentage  = $request->percentage;

        $currency->save();

        return redirect()->route('Currency.index')
                         ->with('success','currency updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $currency = Currency::find($id);

         $currency->delete();

         Session::flash('success','currency deleted successfully');

         return redirect()->route('Currency.index');
    }
}
