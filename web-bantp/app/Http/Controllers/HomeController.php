<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;
use App\Category;
use App\Product;
use App\Cart;
use Session;
class HomeController extends Controller
{
    //


    public function getHome()
    {	
    	$category = Category::all();
    	$slide =Slide::all();
    	view()->share('category',$category);
    	view()->share('slide',$slide);

    	//$data['new'] = Product::orderBy('id','desc')->take(9)->get();
         
        $data['new'] = Product::orderBy('id','desc')->paginate(6);
        $sale_product['sale_products'] = Product::where('promotion_price','<>',0)->paginate(6);
    	return view('font.home',$data,$sale_product);
    }
     

    public function getSearch(Request $request)
    {
    	$category = Category::all();
    	$slide =Slide::all();
    	view()->share('category',$category);
    	view()->share('slide',$slide);
    	
    	$result = $request->result;
    	$result = str_replace(' ', '%', $result);

    	$search['products'] = Product::where('name','like','%'.$result.'%')->get();
    	return view('font.search',$search);
    } 

    public function getProduct($id)
    {
        $slide = Slide::all();
        view()->share('slide',$slide);
        $category['category']=Category::all();
         
        $type_product['products'] = Product::where('category_id',$id)->paginate(6);
        
        return view('font.product',$category,$type_product);
    }

    public function getDetail($id)
    {
        $category['category']= Category::all();
        $product['products'] = Product::where('id',$id)->first();  
        return view('font.detail',$category,$product);
    }

    public function getCart(Request $request ,$id)
    {
       $product['products'] = Product::where('id',$id)->first();
       if($product != null )
       {
            $cart = Session('Cart') ? Session('Cart'):null;
            $newCart = new Cart($cart);
            $newCart->AddCart($product,$id);
            dd($newCart);
       }
    

        //$product['products'] = Product::find($id);
        //$oldCart = Session('cart')?Session::get('cart'):null;
        //$cart = new Cart($oldCart);
        //$cart->add($product,$id);
        //$request->session()->put('cart',$cart);
        
        //$category['category'] = Category::all();
       // return view('font.cart',$category);

        //return view('font.cart',$category,$product);
       
    }
}
