<?php

namespace App\Http\Controllers;
use App\User;
use Auth;
use DB;
use Response;
use App\Business;
use App\Review;
use App\Star_rating;

use Illuminate\Http\Request;

class BusinessController extends Controller
{
    //show business details
    public function business_details($businesss_id){
        $business_detail = Business::where('id', $businesss_id)->first();
    	return view('business.business_details')->with(['businesss_details' => $business_detail]);
    }

    //show business ownner dashboard
    public static function business_dashboard(){
        //get the business details
        $businesss_details = Business::where('user_id', Auth::user()->id)->first();
    	return view('business.business_dashboard')->with(['business_details' => $businesss_details ]);
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

    public function register_business(){
    	//show the business registreation form
    	return view('business.register_business');
    }

    public function process_business(Request $request){
            //collect all data
            $data = $request->all();

           //run validation
            $validate_data = $request->validate([
                'business_name' => 'required',
                'business_address' => 'required',
                'opening_hours'     => 'required',
                'start_day'     => 'required',
                'close_day'    => 'required',
                'type'   => 'required',
                'phone_number'  => 'required',
                'website_url'   => 'required'
            ]);
           // 
           
            DB::beginTransaction();
            try{

                self::busniness_store($data);
                DB::commit();
                return redirect()->route('business-dashboard')->with('status', 'Business Account Successfully Created');

            }catch(exception $e){
                throw $e;
                DB::rollback();
            }
    }

    public function busniness_store($data){

            $working_days = $data['start_day']. ' ' .$data['close_day'];
            //create new business
            $register_business = new Business();
            $register_business->user_id = Auth::user()->id;
            $register_business->user_role = Auth::user()->user_role;
            $register_business->business_name = $data['business_name'];
            $register_business->business_address = $data['business_address'];
            $register_business->opening_hours = $data['opening_hours'];
            $register_business->working_days = $working_days;
            $register_business->phone_number = $data['phone_number'];
            $register_business->email = $data['email'];
            $register_business->business_type = $data['type'];
            $register_business->website_url = $data['website_url'];

            $register_business->save();
            return $register_business;
    }


    public function upload_logo(Request $request){
            // Get filename with extension
      $filenameWithExt = $request->file('logo')->getClientOriginalName();

      // Get just the filename
      $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

      // Get extension
      $extension = $request->file('logo')->getClientOriginalExtension();

      // Create new filename
      $filenameToStore = $filename.'_'.time().'.'.$extension;

      // Uplaod image
      $path= $request->file('photo')->storeAs('public/img/', $filenameToStore);
      DB::beginTransaction();
      try{  
         $store_logo = Business::where('user_id', Auth::user()->id);
      $store_logo->businesss_logo = $filenameToStore;
      $store_logo->save();
      return redirect()->route('business-dashboard')->with('status', 'Bus
     iness Account Successfully Created');

        DB::commit();
      }catch(Exception $e){
        throw $e;
        DB::rollback();
      }

    }

    public function review(Request $request){
        $data = $request->all();
        //run valuidation on user input
        $validate_data = $request->validate([
                'review' => 'required',
            ]);
           
           //process review of user
           DB::beginTransaction();
           try{
                $add_review = new Review();
                $add_review->user_id = Auth::user()->id;
                $add_review->user_role = Auth::user()->user_role;
                $add_review->business_id = $data['business_id'];
                $add_review->businss_name = $data['business_name'];
                $add_review->review = $data['review'];
                $add_review->save();
            DB::commit();
            return redirect()->route('main-home');
           }catch(Exception $e){
            throw $e;
            DB::rollback();
           }


    }



}
