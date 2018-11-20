<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminLoginController extends Controller
{
	public function __construct()
	{
		$this->middleware('guest:admin');
	}
    public function ShowLoginForm()
    {
    	return view('auth.admin_login');
    }
    public function login()
    {
    	//validate
    	$this->validate($request,[
    		'email' =>'required|email',
    		'password'=>'required'

    	]);

    	//attempt to login
    	if(Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password],$request->remember)){

    		//if successful redirect
    		return redirect()->intended(route('admin.dashboard'));
    	}   	

    	//if not redirect back
    	return redirect()->back->withInput($request->only('email','remember'));
    }
}
