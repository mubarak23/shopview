<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BusinessController;
use Illuminate\Http\Request;
use App\User;
use Auth;
use DB;
use Response;

class UserController extends Controller
{
	//home page 
	public function Home(){
		return view('main_home');
	}

    //User Registration
	public function User_register(){
		//register view
		return view('user.register');
	}

	//process user registration
	public function process_register(Request $request){
			$data = $request->all();
			
			//never trust user data
			$user_validateData = $request->validate([
				'username'	=> 'required',
				'email'		=> 'required|unique:users',
				'password'	=> 'required',
				'confirm_password'	=> 'required'
			]);

			//send the data to store method
			DB::beginTransaction();
			try{
				if(self::store($data)){
					DB::commit();
					return redirect()->route('main-home')->with('status', 'User Account Created Successfull');
				}else{
					return redirect()->back()->with('error', 'Unable to create User Account');
				}

			}catch(Exception $e){
				throw $e;
				DB::rollback();
			}
	}

	public function store($data){
			//create a new user model
			$user_regiser = new User();
			$user_regiser->username = $data['username'];
			$user_regiser->email = $data['email'];
			$user_regiser->user_role = 3;
			$user_regiser->password = bcrypt($data['password']);
			//save user registration data
			$user_regiser->save();

			return $user_regiser;

		}



    public function User_login(){
    	//login view
    	return view('user.login');
    }

    public function process_login(Request $request){
    	$data = $request->all();
    	//check if email exit
    	$check_email = User::where('email', $data['email'])->exists();
    	if(!$check_email){
    		return redirect()->back()->withInput()->with('status', "Email Does Not Exit");
    	}else{
    		//auth attempt
    		if(Auth::attempt(['email' => $data['email'], 'password' => $data['password']])){
    			//check the user role
    			//return $data;
    			if(Auth::user()->user_role === 1){
    				//return Auth::user()->user_role;
    				return redirect()->route('admin-home');
 
    			}elseif(Auth::user()->user_role === 2){
    				return redirect()->route('business-dashboard');

    			}elseif(Auth::user()->user_role === 3){
    				return redirect()->route('main-home');
    			}else{
    				return 'Bad Road Here';
    			}

    		}else{
    			return redirect()->back()->withInput()->with('status', "Incorrect Login Credientials");
    		}
    	}
    	
    }

    public function admin_logout(){
    	Auth::logout();
    	return redirect()->route('main-home');
    }

}
