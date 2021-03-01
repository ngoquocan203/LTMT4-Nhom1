<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
class Login extends Controller
{
    //
    public function getLogin(){
    	return view('backend.login');
    }

    public function postLogin(Request @request){
    	$arr= ['email'=>$request->email,'password'=>$request->password];
    	if (Auth::attempt($arr)) {
    		dd('Đăng nhập thành công');
    	}else{
    		dd('Đăng nhập thất bại');
    	}
    }
}
