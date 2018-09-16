<?php

namespace App\Http\Controllers;
use App\User;
use Auth;
use DB;
use Response;

use Illuminate\Http\Request;

class BusinessController extends Controller
{
    //show business details
    public function business_details(){
    	return view('business.business_details');
    }

    //show business ownner dashboard
    public static function business_dashboard(){
    	return view('business.business_dashboard');
    }

    //show registration form for businesss owner
    public function register_owner(){
    	return view('business.register_owner');
    }

    //process business owner
    public function process_owner(Request $request){
    		//validate user data
    	$data = $request->all();
    	//return $data;

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
    				return redirect()->route('user_login')->with('status', 'Account Created Successfull');
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
    	$register_admin->user_role = 2;
    	$register_admin->save();
    	return $register_admin;

    }




}
