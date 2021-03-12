<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;
class SlideController extends Controller
{
    //
    public function getSlide()
    {
    	$slide['slide'] = Slide::all();
    	return view('admin/slide/slide',$slide);
    }

    public function getAdd()
    {
    	//$slide['slide'] = Slide::all();
    	return view('admin/slide/addslide');
    }

    public function postAdd(Request $request)
    {
    	$file = $request->image->getClientOriginalName();
    	$slide = new Slide;
    	$slide->name = $request->name;
    	$slide->image=$file;
        $request->file('image')->move('admin_asset/img',$file);
    	$slide->save();
    	return redirect('admin/slide/slide')->with('thongbao','Thêm thành công');
    }

    public function getEdit($id)
    {
    	$slide['slide']= Slide::find($id);
    	return view('admin/slide/editslide',$slide);
    }

    public function postEdit(Request $request,$id)
    {	
    	$file = $request->image->getClientOriginalName();
    	$slide= Slide::find($id);
    	$slide->name = $request->name;
    	$slide->image=$file;
        $request->file('image')->move('admin_asset/img',$file);
    	$slide->save();
    	return redirect('admin/slide/slide')->with('thongbao2','Sửa thành công');
    }

    public function getDelete($id)
    {
    	$slide=Slide::find($id);
    	$slide->delete();
    	return redirect('admin/slide/slide')->with('thongbao1','Xóa thành công');
    }
}
