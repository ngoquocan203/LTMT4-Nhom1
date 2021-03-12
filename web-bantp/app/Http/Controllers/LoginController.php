<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;
use Auth;
use Session;
class LoginController extends Controller
{
    //
      public function getLogin(){
        return view('admin/login/login');
    }

    public function postLogin(Request $request){

        
        $arr = ['email' => $request->email, 'password' => $request->password];
        
        //if($request->remember='Remember Me'){
        //  $remember=true;
        //}else{
        //  $remember = false;
        //}
        if(Auth::attempt($arr)){   
            if(Auth::user()->level == 0){
                return redirect('admin/layout/index');
            } 
            else
            {
                return redirect('font/home');
            } 	
        }
        else
        {
            return back()->with('error','Tài khoản hoặc mật khẩu chưa đúng !');
        }
    }
}
