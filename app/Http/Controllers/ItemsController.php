<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Brand;
use App\Category;
use App\Shipping;
use App\Currency;
use Session;
use DB;

class ItemsController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $query = Request::input('search');

        $items = DB::table('items')->where('category_id','LIKE','%'.$query.'%')->paginate(10);
        $categories = DB::table('categories')->get();

        return view('admin.searched_item')
                ->with('items',$items)
                ->with('categories',$categories);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::orderBy('id','desc')->paginate(10);
        $categories = DB::table('categories')->get();

        return view('admin.all_items')
                ->with('items',$items)
                ->with('categories',$categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands     = DB::table('brands')->get();
        $categories = DB::table('categories')->get();
        $subcats    = DB::table('sub_categories')->get();
        $shippings  = DB::table('shippings')->get();
        $currencies = DB::table('currencies')->get();

        return view('admin.items_create')
               ->with('brands',$brands)
               ->with('categories', $categories)
               ->with('subcats',$subcats)
               ->with('shippings',$shippings)
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
        $item = new Item;

        $item->item_name    = $request->item_name;
        $item->item_code    = $request->item_code;
        $item->detail       = $request->detail;
        $item->description  = $request->description;
        $item->category_id  = $request->category_id;
        $item->subcat_id    = $request->subcat_id;
        $item->price        = $request->price;
        $item->currency_id  = $request->currency_id;
        $item->brand_id     = $request->brand_id;
        $item->shop_id      = $request->shop_id;
        $item->shipping_id  = $request->shipping_id;
        $item->active       = $request->active;
        $item->condition    = $request->condition;
        $item->image        = $request->image;
        
        $item->save();

        return redirect()->route('items.show',$item->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Item::find($id);

        return view('admin.show_item')->with('item',$item);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item       = Item::find($id);
        $brands     = DB::table('brands')->get();
        $categories = DB::table('categories')->get();
        $subcats    = DB::table('sub_categories')->get();
        $shippings  = DB::table('shippings')->get();
        $currencies = DB::table('currencies')->get();

        return view('admin.Edit_item')
               ->with('brands',$brands)
               ->with('categories', $categories)
               ->with('subcats',$subcats)
               ->with('shippings',$shippings)
               ->with('currencies',$currencies)
               ->with('item',$item);
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
        $item = Item::find($id);
        
        $item->item_name    = $request->item_name;
        $item->item_code    = $request->item_code;
        $item->detail       = $request->detail;
        $item->description  = $request->description;
        $item->category_id  = $request->category_id;
        $item->subcat_id    = $request->subcat_id;
        $item->price        = $request->price;
        $item->currency_id  = $request->currency_id;
        $item->brand_id     = $request->brand_id;
        $item->shop_id      = $request->shop_id;
        $item->shipping_id  = $request->shipping_id;
        $item->active       = $request->active;
        $item->condition    = $request->condition;
        $item->image        = $request->image;

        $item->save();
        
        Session::flash('success','Item updated succssfully');
        return redirect()->route('items.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $item = Item::find($id);

       $item->delete();
       Session::flash('success','item deleted successfully');
       return redirect()->route('items.index');
    }
}
