<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Message;

class SuperAdminController extends Controller
{
     public function index()
    {
    	return view ('admin.admin_login');
    }

    public function dashboard()
    {
        $messages = DB::table('messages')->simplePaginate(6);

        return view ('admin.dashboard')->with('messages',$messages);
    }
    public function settings()
    {
    	return view ('admin.general_settings');
    }

}
