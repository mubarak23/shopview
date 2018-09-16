<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use DB;
use Response;

class AdminController extends Controller
{
    //
    public static function admin_dashboard(){
    	return view('admin.Home')->with('status', 'Welcome To Admin Section');
    }

    public function admin_account(Request $request){
    	//validate user data
    	$data = $request->all();

    	$validate_data = $request->validate([
    			'username'	=> 'required',
    			'password'	=> 'required',
    			'email'		=> 'required|unique:users',
    			'confirm_password'	=> 'required'
    		]);
    		DB::beginTransaction();
    		try{
    			if(self::store($data)){
    				DB::commit();
    				return redirect()->route('admin-home')->with('status', 'Account Created Successfull');
    			}else{
    				return redirect()->back()->with('error', 'Unable to Created Account at this time');
    			}

    		}catch(Exception $e){
    			throw $e;
    			DB::rolback();
    		}
    }

    public function store($data){
    		//create new user model 
    	$register_admin = new User();
    	$register_admin->username = $data['username'];
    	$register_admin->email = $data['email'];
    	$register_admin->password = bcrypt($data['password']);
    	$register_admin->user_role = 1;
    	$register_admin->save();
    	return $register_admin;

    }
}
