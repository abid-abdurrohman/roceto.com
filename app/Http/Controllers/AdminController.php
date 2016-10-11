<?php

namespace App\Http\Controllers;

use App\Model\Admin;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Redirect;
use Validator;
use Illuminate\Support\Facades\Hash;
use Session;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login()
		{
			return view('admin.log.login');
		}

		public function index()
		{
			return view('admin.home');
		}

		public function pro_login(Request $request)
		{
			$valid = Validator::make($request->all(), [
				'username' => ['required'],
	    	'password' => ['required'],
			]);
			if ($valid->passes()) {
				$userdata = array(
					'username'  => Input::get('username'),
					'password'  => Input::get('password')
				);
				$query = ['username' => $userdata['username']];
				$admin = Admin::where($query)->first();
				if ($admin == "") {
						return redirect()->action('AdminController@login')->with('message', 'User Unregistered');
				}
				if (Hash::check($userdata['password'], $admin->password)) {
						//return Redirect::action('AdminController@index');
						return redirect()->action('AdminController@index');
				}else{
						return Redirect::to('admin')->with('message', 'Password Mismatch');
				}
			}else{
				return Redirect::to('admin')->with('message', 'Login Failed');
			}
		}
}
