<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use APP\Item;
use APP\Brands;

class PagesController extends Controller
{
    public function getIndex()
    {
    	$items = DB::table('items')->inRandomOrder()->paginate(12);
        $brands = DB::table('brands')->simplePaginate(10);
        return view('pages.home')->with('items',$items)->with('brands',$brands);
    }
    public function getUserLogin()
    {
    	return view ('pages.login');
    }
    public function getProductDetails()
    {
    	return view ('pages.productDetails');
    }
    public function getBlog()
    {
    	return view ('pages.blog');
    }
    public function getCart()
    {
        return view ('pages.cart');
    }
    public function getContact()
    {
        return view ('pages.contactUs');
    }
    public function getCheckout()
    {
        return view ('pages.checkout');
    }
}
