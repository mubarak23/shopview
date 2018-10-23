<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Business;
use App\User;
use DB;

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

    
    	$data = $request->all();
        //return $data;
    	$process_data = self::store($data);
    	if($process_data){
            
    		return redirect()->back()->with("status", "Product Add Successfully");
            
    	}else{
            
    		return redirect()->back()->with("status", "Unable to Add Product at this time");
            
    	}

    }


    public function store($data){
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
    			$add_product->description = $data['product_description'];
    			$add_product->save();
                DB::commit();
    			//return result back to the add product function above
    			return $add_product;
    			DB::commit();

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
        $all_products = Product::where('business_id', $business_id)->first();
        return view('business.products.products')->with(['all_products' => $all_products, 'title' => $title]);

    }

    public function product_details($product_id){
        $title = "Product details";
        $product_details = Product::where('id', $product_id)->get();
        return view('business.products.product_details');

    }


}
