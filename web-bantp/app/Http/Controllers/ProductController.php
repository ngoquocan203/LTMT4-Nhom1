<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AddProductRequest;
use App\Product;
use App\Category;

class ProductController extends Controller
{
    //
    public function getProduct()
    {	
    	
    	$product['products'] = Product::all();
    	return view('admin.product.product',$product);
    }

    public function getAddProduct()
    {   
        
        $category['category'] = Category::all();
        return view('admin.product.addproduct',$category);
    }

    public function postAddProduct(AddProductRequest $request)
    {
       $file = $request->feature_image->getClientOriginalName();
       $product = new Product;
       $product->category_id = $request->category_id;
       $product->name = $request->name;
       $product->price = $request->price;
       $product->promotion_price = $request->promotion_price;
       $product->feature_image = $file;
       $product->content = $request->content;
       $product->namecate = $request->namecate;

       $product->save();
       return redirect('admin/product/product')->with('thongbao','Thêm thành công');
      
    }

    public function getEdit($id)
    {
        $product['products'] = Product::find($id);//tìm id truyền ở bên trên 
        $category['category'] = Category::all();
        return view('admin.product.editproduct',$product,$category);
    }


    public function postEdit(Request $request,$id)
    {
       $file = $request->feature_image->getClientOriginalName();
       $product = Product::find($id);
       $product->category_id = $request->category_id;
       $product->name = $request->name;
       $product->price = $request->price;
       $product->promotion_price = $request->promotion_price;
       $product->feature_image = $file;
       $product->content = $request->content;
       $product->namecate = $request->namecate;
       $product->save();

       return redirect('admin/product/product')->with('thongbao2','Sửa thành công');
    }

    public function getDelete($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('admin/product/product')->with('thongbao1','Xóa thành công !');
    }
}
