<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Product;
use App\Business;
use App\User;
use DB;
use Auth;

class ProductController extends Controller
{
    //

    public function add_product(Request $request){
            

    	//validate data
    	$validateData = $request->validate([
    			'name' => 'required',
    			'product_description' => 'required',
    			'price'		=> 'required'
    	]);

        if($request->hasFile('product_image')){
                $logo = $request->file('product_image');
                $random_name = time().mt_rand();

                $FileOriginalName = $request->product_image->getClientOriginalName();
                $FileUploadName = $random_name. '.' .$FileOriginalName;

                $request->product_image->storeAs('public/images', $FileUploadName);

                
            }


    	$data = $request->all();
        //return $data;
    	$process_data = self::store($data, $FileUploadName);
    	if($process_data){
            
    		return redirect()->back()->with("status", "Product Add Successfully");
            
    	}else{
            
    		return redirect()->back()->with("status", "Unable to Add Product at this time");
            
    	}

    }


    public function store($data, $FileUploadName){
               //return $data;

    		//process the result in the DB
    		DB::beginTransaction();
    		try{
    			//create the product model
    			$add_product = new Product();
                $add_product->user_id = Auth::user()->id;
    			$add_product->business_id = $data['business_id'];
    			$add_product->name = $data['name'];
    			$add_product->price = $data['price'];
                $add_product->product_img = $FileUploadName;
    			$add_product->description = $data['product_description'];
    			$add_product->save();
                DB::commit();
    			//return result back to the add product function above
    			return $add_product;
    			

    		}catch(Exception $e){
    			throw $e;
    			DB::rollback();
    		}

    }

    //product per business
    public function business_products($business_id){
        //use bisuness id to get all product
        $title = 'All Product of a particular business';
        /*$business = Business::where('user_id', Auth::user()->id)->select('buainess_id')->get();*/
        //$buainess_id = $buainess->business_id;
        $all_products = Product::where('business_id', $business_id)->get();
        //return $all_products;

        return view('business.products.products')->with(['all_products' => $all_products, 'title' => $title]);

    }

    public function product_details($product_id){
        $title = "Product details";
        $product_details = Product::where('id', $product_id)->get();
        return $product_details;

        return view('business.products.product_details');

    }


}
