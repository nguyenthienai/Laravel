<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class LoginController extends Controller
{
    public function getLogin()
    {
    	return view ('backend.login');
    }

    public function doLogin()
    {
    	$email 		= Request('email');
    	$password 	= Request('password');
    	$remember	= Request('remember');
    	$doremember	= false;
    	if ($remember === "Remember Me"){
    		$doremember	= true;
    	}
    	$dataLogin 	= Auth::attempt(['email'=>$email, 'password'=>$password], $doremember);
    	if ($dataLogin){
    		return redirect(route('admin.home'));
    	}    	
    	else{
    		return back()->with('error', 'Tài khoản hoặc mật khẩu không đúng.');
    	}
     }
}
