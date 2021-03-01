<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\User;
class IndexController extends Controller
{
    //
    public function getIndex()
    {
        $product = Product::count();  
        $category = Category::count(); 
        $user = User::count(); 
    	return view('admin.layout.index',compact('product','category','user'));
    }

     public function getLogout()
    {
    	Auth::logout();
    	return redirect()->intened('admin.login.login');
    }
}
