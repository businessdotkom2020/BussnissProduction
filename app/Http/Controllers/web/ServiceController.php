<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Models\User;
use App\Models\Review;
use App\Models\Category;
use App\Models\Product;
use App\Models\Service;
use App\Models\Request;

use App\Http\Resources\ParentCategoryResource;
use App\Http\Resources\MainCategoryResource;
use App\Http\Resources\CategoryProductsResource;
use App\Http\Resources\ProductIndexResource;
use App\Http\Resources\ReviewsRecource;
use App\Http\Resources\StoreResource;
use App\Http\Requests\AddReviewRequest;

use RealRashid\SweetAlert\Facades\Alert;
use Lang;

class ServiceController extends Controller
{
    
   public function index(){
       return view('services.index');
   }
   
   public function show($service_id){
       $service = Service::find($service_id);
       return view('services.show',compact('service'));
   }
   

  
   public function create(){
       return view('services.create');
   }
   

  
public function post(){
        
        
         $req = new Service ;
         $req->category_id = Request()->category_id;
         $req->user_id = Request()->user()->id;
         $req->name = Request()->name;
         $req->description = Request()->description;
         
         $images = array();
		/**
		 * check if images come as array then loop the images to save them
		 */

			if (is_array(Request()->file('images'))) {

				foreach (Request()->file('images') as $image) {
                    $file_name     = 'product_image'.   rand(1, 15). rand(155, 200) . rand(25, 55). '.png';
                    $image->storeAs('public/requests',$file_name);
                    $img_url = 'requests/'. $file_name;
					array_push($images, $img_url);
				}

			}

        $req->images = json_encode($images);
        
        $req->save();
        
        
        

                Alert::toast(trans('general.add_review_successfully'), 'success');
                return redirect('/service/'.$req->id);

    }
    
 public function favorite(){

        if(!Request()->user())
                 return response()->json([
             "status" => true,
             "message" => trans('general.login_first')
             ]);
        
        
         $product = Service::find(Request()->service_id);
                
            if(!$product)
              return response()->json([ "status" => "failed", "mesage" => "product not found" ],401);
        
                $product->favorite();
    
    $favorite_model = \App\Models\Favorite::where([['favorited_id',Request()->product_id],['user_id',Request()->user()->id],['favorited_type','App\Models\Service']])->first();
 if($favorite_model){
        $mesage =     trans('general.added_product_to_favorite');

 }
 else{
        $mesage =     trans('general.removed_product_from_favorite');

     
 }

         return response()->json([
             "status" => true,
             "message" => $mesage
             ]);
    }
   

  
}
