<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;
use Auth;
class LoginController extends Controller
{
    //
    public function getLogin(){
    	return view('admin.login.login');
    }

    public function postLogin(Request $request){
    	$arr = ['email' => $request->email, 'password' => $request->password];

    	if($request->remember='Remember Me'){
    		$remember=true;
    	}else{
    		$remember = false;
    	}
    	if(Auth::attempt($arr,$remember)){

    		return redirect()->intended('admin.layout.index');
    	}else{
    		return back()->with('error','Tài khoản hoặc mật khẩu chưa đúng !');
    	}
    }
}
