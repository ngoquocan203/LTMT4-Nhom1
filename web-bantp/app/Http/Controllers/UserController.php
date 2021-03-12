<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    //
    public function getUser()
    {   
      $user['users']= User::orderBy('id','asc')->paginate(6);
    	return view('admin.user.user',$user);
    }

    public function getEdit($id)
    {
    	$user['users'] = User::find($id);//tìm thể loại có id truyền ở bên trên 
      return view('admin.user.edit',$user);
    }

    public function postEdit(Request $request,$id)
    {
       $users = User::find($id);
       $users->fullname = $request->fullname;
       $users->email = $request->email;
       $users->password = bcrypt($request->password);
       $users->level = $request->level;

       $users->save();
       return redirect('admin/user/user')->with('thongbao','Sửa thành công');
    }

    public function getAdd()
    {
    	return view('admin.user.add');
    }
}
