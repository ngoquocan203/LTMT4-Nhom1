<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;
use App\Category;
class HomeController extends Controller
{
    //


    public function getHome()
    {	
    	$category = Category::all();
    	$slide =Slide::all();
    	view()->share('category',$category);
    	view()->share('slide',$slide);
    	return view('font.home');
    }
    
}
