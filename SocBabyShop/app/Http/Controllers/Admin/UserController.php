<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddAdminRequest;
use App\User;
use Auth;
use Session;

class UserController extends Controller
{
	public function listUser()
	{
		$users = User::all();
		return view ('backend.user', compact('users'));
	}

	public function checkCreate()
	{
		$pass = Request('password');
		$confirmpass = Request('confirmpassword');
		$isConfirmCorrect = $pass === $confirmpass;
		$isPasswordCorrect 	= password_verify($pass, Auth::user()->password);
		if($isConfirmCorrect){
			if($isPasswordCorrect){
				return redirect(route('user.createuser'));
			}
			else{
				Session::flash('error', 'Mật khẩu không chính xác !');
				return redirect(route('user.list'));
			}
		}
		else{
			Session::flash('error', 'Mật khẩu không khớp. Vui lòng nhập lại !');
			return redirect(route('user.list'));
		}
	}

	public function create()
	{
		return view('backend.createuser');
	}

	public function createUser(AddAdminRequest $request)
	{
		$user = new User();
		$user->name = Request('name');
		$user->email = Request('email');
		$user->password = bcrypt(Request('password'));
		$user->save();
		Session::flash('success', 'Thêm mới Quản trị viên thành công !');
		return back();
	}

	public function checkUser()
	{
		$pass = Request('password');
		$confirmpass = Request('confirmpassword');
		$btn = Request('btn');
		$isPasswordCorrect 	= password_verify($pass, Auth::user()->password);
		$isConfirmCorrect = $pass === $confirmpass;

		if($isConfirmCorrect){
			if ($isPasswordCorrect){
				if ($btn === 'delete'){
					return redirect(route('user.delete'));
				}
				if ($btn === 'edit'){
					return redirect(route('user.edit'));
				}
			}
			else {
				Session::flash('error', 'Mật khẩu không chính xác !');
				return back();
			}
		}
		else {
			Session::flash('error', 'Mật khẩu không khớp !');
			return back();
		}
		
	}

	public function infoUser()
	{
		return view('backend.infouser');
	}

	public function storePass()
	{
		$oldpass = Request('oldpassword');
		$newpass = Request('newpassword');
		$confirmpass = Request('confirmpassword');
		$isPasswordCorrect 	= password_verify($oldpass, Auth::user()->password);
		$isConfirmCorrect = $newpass === $confirmpass;
		
		if($isConfirmCorrect){
			if($isPasswordCorrect){
				Auth::user()->password = bcrypt($newpass);
				Auth::user()->save();
				Session::flash('success','Đổi mật khẩu thành công !');
				return redirect(route('user.list'));
			}
			else{
				Session::flash('error','Mật khẩu không chính xác !');
				return redirect(route('user.list'));
			}
		}
		else{
			Session::flash('error','Mật khẩu không trùng khớp. Vui lòng nhập lại!');
			return redirect(route('user.list'));
		}
	}

	public function editUser()
	{
		return view ('backend.edituser');
	}

	public function storeUser()
	{
		$attribute = request()->all();
		Auth::user()->update($attribute);
		Session::flash('success','Đã cập nhật thành công !');
		return redirect(route('user.list'));
	}

	public function deleteUser()
	{
		Auth::user()->delete();
		Session::flash('success','Đã xóa thành công !');
		return redirect(route('user.list'));
	}
}
