<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Auth;
class RegisterController extends Controller
{
    //
    public function getRegister()
    {
    	return view('font/register');
    }

    public function postRegister(Request $request)
    {
    	 // Kiểm tra dữ liệu vào
		//$allRequest  = $request->all();	
		$this->validate($request,
	        [
	            'fullname' => 'required|string|max:255',
				'email' => 'required|string|email|max:255|unique:users,email',
				'password' => 'required|min:6',
				'repassword' => 'required|same:password'
	        ],
	        [
	            'fullname.required' => 'Họ và tên là trường bắt buộc',
				'fullname.max' => 'Họ và tên không quá 255 ký tự',

				'email.required' => 'Email là trường bắt buộc',
				'email.email' => 'Email không đúng định dạng',
				'email.max' => 'Email không quá 255 ký tự',
				'email.unique' => 'Email đã tồn tại',

				'password.required' => 'Mật khẩu là trường bắt buộc',
				'password.min' => 'Mật khẩu phải chứa ít nhất 6 ký tự',

				'repassword.require' => 'Bạn chưa nhập lại mật khẩu',
				'repassword.same' => 'Mật khẩu nhập lại chưa khớp',
				
	        ]);



		$users = new User;
		$users->fullname = $request->fullname;
		$users->email = $request->email;
		$users->password = bcrypt($request->password);
		$users->level = 1;
		$users->save();

		return redirect('register')->with('thongbao1','Đăng kí thành công');
	}



	public function getEditAcc()
	{
		$user = Auth::user();
		return view('font.editacc',$user);
	}

	public function postEditAcc(Request $request)
	{
		
	    $users = Auth::user();
        $users->fullname = $request->fullname;
       	$this->validate($request,
	        [
				'password' => 'required|min:6',
	        ],
	        [
				'password.required' => 'Mật khẩu là trường bắt buộc',
				'password.min' => 'Mật khẩu phải chứa ít nhất 6 ký tự',
				
	        ]);
       	 $users->password = bcrypt($request->password);

       $users->save();
       return back()->with('thongbao','Sửa thành công !');
	}
}	
 
	
   
