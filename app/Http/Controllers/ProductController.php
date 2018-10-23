<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
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
}
