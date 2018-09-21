<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Business;
use Auth;
use DB;
use Response;

class AdminController extends Controller
{
    //
    public static function admin_dashboard(){
        $all_business = Business::paginate('5');
        $all_users = User::paginate('5');
    	return view('admin.Home')->with(['all_businesses' => $all_business,'all_users' => $all_users]);
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

   public function edit_business(Request $request){
            $data = $request->all();
            //return $data;
            //find the bisuness by it id
            DB::beginTransaction();
            try{
                $edit_business = Business::find($data['business_id']);
                if(!empty($data['business_name'])){
                    $edit_business->business_name = $data['business_name'];
                }
                if(!empty($data['business_address'])){
                    $edit_business->business_address = $data['business_address'];
                }
                if(!empty($data['email'])){
                    $edit_business->email = $data['email'];
                }
                if(!empty($data['phone'])){
                    $edit_business->phone_number = $data['phone_number'];
                }
                $edit_business->save();
                DB::commit();
                //return to Admin dashboard
                return redirect()->route('admin-home')->with('status', 'Business Account Edited');
            }catch(Exception $e){
                throw $e;
                DB::rollback();
            }


   }

    public function delete_business($business_id){
            return "Good From this ends";

    }

    public function edit_user(Request $request, int $user_id){
            $data = $request->all();
            //find the user
            $edit_user = User::find($user_id);
            DB::beginTransaction();
            try{

            if(!empty($data['username'])){
                $edit_user->username = $data['username'];
            }
            if(!empty($data['email'])){
                $edit_user->email = $data['email'];
            }
            if(!empty($data['user_role'])){
                $edit_user->user_role = $data['user_role'];
            }
            $edit_user->save();
            DB::commit();
            //return to Admin dashboard
                return redirect()->route('admin-home')->with('status', 'User Account Edited');
            }catch(Exeception $e){
                throw $e;
                DB::rollback();
            }
    }

    public function delete_user($user_id){
            return "Good from the Controller End". ' '. $user_id;
    }

}
