<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Resources\ProductResource;

use App\Http\Resources\ProductIndexResource;

class SearchController extends Controller
{
    public function search(){
        


         $q =  Request()->keyword ;
         $category_ids =  Request()->category_id ? [Request()->category_id] : Category::get()->pluck('id') ;
         $store_ids =  Request()->store_id ? [Request()->store_id] : User::get()->pluck('id'); 
         $min_price =  Request()->min_price ? Request()->min_price : 0 ;
         $max_price =  Request()->max_price ? Request()->max_price : 10000000;
    
    
    // return $store_ids;
    if($q){
           $results = Product::withTranslations(['en', 'ar'])->where('name', 'like', '%'.$q.'%')->orWhereHas('translations', function($query) use ($q){
            $query->where('value', 'like', '%'.$q.'%');
            })->paginate(10);
    }else{
                   $results = Product::whereIn('category_id',$category_ids)->whereIn('user_id',$store_ids)->whereBetween('price', [$min_price, $max_price])->paginate(10);
    }


      return ProductIndexResource::collection($results);
      
    }
}