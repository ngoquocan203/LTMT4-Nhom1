<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Category;
use App\Http\Requests\AddCategoryRequest;
use App\Http\Requests\EditCateRequest;


class CategoryController extends Controller
{
    //
    public function getCategory()
    {	
    	
    	$category['category'] = Category::all();
    	return view('admin.category.category',$category);
    }

    
    public function postCategory(AddCategoryRequest $request)
    {
       $this->validate($request,
        [
            'name'=>'required|min:3|max:50|unique:Category,name'
        ],
        [
            'name.required'=>'Bận chưa nhập danh mục cần thêm',
            'name.min'=>'Tên danh mục phải từ 3 kí tự trở lên',
            'name.max'=>'Tên danh mục phải từ 50 kí tự trở xuống',
            'name.unique'=>'Tên danh mục đã tồn tại'
        ]);

       $category = new Category;
       $category->name = $request->name;
       $category->save();
       return redirect('admin/category/category')->with('thongbao','Thêm mới thành công');
    }




    public function getEdit($id)
    {
        $category['category'] = Category::find($id);//tìm thể loại có id truyền ở bên trên 

        return view('admin.category.editcategory',$category);
    }


    public function postEdit(EditCateRequest $request,$id)
    {
       $category = Category::find($id);
       $this->validate($request,
        [
            'name'=>'required|min:3|max:50'
        ],
        [
            'name.required'=>'Bận chưa nhập danh mục cần thêm',
            'name.min'=>'Tên danh mục phải từ 3 kí tự trở lên',
            'name.max'=>'Tên danh mục phải từ 50 kí tự trở xuống',
        ]);
       $category->name = $request->name;
       $category->save();

       return redirect('admin/category/category')->with('thongbao2','Sửa thành công');
    
    }




    public function getDelete($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect('admin/category/category')->with('thongbao1','Xóa thành công !');
    }
}
