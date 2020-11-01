<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Resources\ParentCategoryResource;
use App\Http\Resources\MainCategoryResource;
use App\Http\Resources\CategoryProductsResource;
use App\Http\Resources\ProductIndexResource;
use App\Http\Resources\ServicesIndexResource;
use App\Http\Resources\StoreResource;

use App\Http\Resources\RequestIndexResource;

class FavoritesController extends Controller
{
    public function product_favorite($id){
        
        $product = Product::find($id);
                if(!$product)
                    return response()->json([ "status" => "failed", "mesage" => "product not found" ],401);
        $product->favorite();

         return response()->json([
             "status" => "success",
             "message" => "Toggled Favorite Successfully"
             ]);
    }
  
    public function request_favorite($id){
        
        $request = \App\Models\Request::find($id);
        if(!$request)
                    return response()->json([ "status" => "failed", "mesage" => "request not found" ],401);

        $request->favorite();

         return response()->json([
             "status" => "success",
             "message" => "Toggled Favorite Successfully"

             ]);
    }
 
 
    public function service_favorite($id){
        
        $service = \App\Models\Service::find($id);
        if(!$service)
                    return response()->json([ "status" => "failed", "mesage" => "Service not found" ],401);

        $service->favorite();

         return response()->json([
             "status" => "success",
                          "message" => "Toggled Favorite Successfully"

             ]);
    }
    
    public function get_favorites(){
        
        
        if($type == 'product'){
             $favorite_model = \App\Models\Favorite::where([['user_id',Request()->user()->id],['favorited_type','App\Models\Product']])->get()->pluck('favorited_id');

        }elseif($type == 'service'){
             $favorite_model = \App\Models\Favorite::where([['user_id',Request()->user()->id],['favorited_type','App\Models\Service']])->get()->pluck('favorited_id');

        
        }elseif($type == 'request'){
             $favorite_model = \App\Models\Favorite::where([['user_id',Request()->user()->id],['favorited_type','App\Models\Request']])->get()->pluck('favorited_id');

        }
        else{
                     return response()->json([
             "status" => "failed"
             ]);
        }
        
        
        $products_ids =  \App\Models\Favorite::where([['user_id',Request()->user()->id],['favorited_type','App\Models\Product']])->get()->pluck('favorited_id');
        return ProductIndexResource::collection(Product::whereIn('id',$products_ids)->get());
    }
    
    public function get_favorite_products(){
        $products_ids =  \App\Models\Favorite::where([['user_id',Request()->user()->id],['favorited_type','App\Models\Product']])->get()->pluck('favorited_id');
        return ProductIndexResource::collection(Product::whereIn('id',$products_ids)->get());
    }
    
    public function get_favorite_requests(){
                $requests_ids =  \App\Models\Favorite::where([['user_id',Request()->user()->id],['favorited_type','App\Models\Request']])->get()->pluck('favorited_id');

        return RequestIndexResource::collection(\App\Models\Request::whereIn('id',$requests_ids)->get());
    }
    
    public function get_favorite_services(){
                $services_ids =  \App\Models\Favorite::where([['user_id',Request()->user()->id],['favorited_type','App\Models\Service']])->get()->pluck('favorited_id');

        return ServicesIndexResource::collection(\App\Models\Service::whereIn('id',$services_ids)->get());
    }
    
  
}
