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

//authentication routes
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//frontend.....................................

Route::get('/checkout', 'PagesController@getCheckout');

Route::get('/contact', 'PagesController@getContact');

Route::get('/cart', 'PagesController@getCart');

Route::get('/blog', 'PagesController@getBlog');

Route::get('/productDetails', 'PagesController@getProductDetails');

Route::get('/userlogin', 'PagesController@getUserLogin');

Route::get('/', 'PagesController@getIndex');

//admin................................
Route::prefix('admins')->group(function(){
	Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admins.showLogin');
    Route::post('/login','Auth\AdminLoginController@login')->name('admins.login');
    Route::get('/','AdminsController@index')->name('admins.dashboard');
});


//endAdmin.............................

//backend......................................


Route:: get('/admin','SuperAdminController@index')->name('admin');

Route:: get('/dashboard','SuperAdminController@dashboard')->name('dashboard');

Route:: get('/generalSettings','SuperAdminController@settings')->name('settings');

Route::resource('Brands','BrandsController',['except' => ['create','edit','update']]);

Route::resource('Currency','CurrencyController',['except' => ['create','show']]);

Route::resource('Location','LocationController',['except' => [ 'edit', 'update']]);

Route::resource('Category','CategoryController',['except' => [ 'edit', 'update','show']]);

Route::resource('Shop','ShopController');

Route::resource('Subcat','SubcatController',['except' => [ 'edit', 'update']]);

Route::resource('Shipping','ShippingController',['except' => [ 'edit', 'update']]);

Route::get('item/search','ItemsController@search')->name('items.search');

Route::resource('items','ItemsController');

Route::resource('messages','MessagesController',['except' =>['edit','update']]);





