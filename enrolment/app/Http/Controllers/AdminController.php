<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
class AdminController extends Controller
{
    public function login_dashbord(Request $request)
    {
    	// return view('admin.dashboard');
    	$email=$request->admin_email;
    	$password=md5($request->admin_password);
        echo $email." ".$password;
    	$result = DB::table('admin_tbl')->where('admin_email', $email)->first();
// ->where('admin_password', $password)
        ddd($result);

    }
}
