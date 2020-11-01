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

class CategoriesController extends Controller
{
    
  public function show($category_id){
      
      $suppliers = User::whereHas('categories', function ($query) use($category_id)  { 
            $query->where('id',$category_id ); 
        })->get();

      $products = Product::get();
      
     $category = Category::find($category_id);
        $keyword = '';
      return view('categories.show',compact('products','suppliers','category','keyword'));
  }
  public function search(Request $request){
      

          $sortprice = request()->sortprice == "highest" ? "DESC": "ASC"  ;
        $sortdate = request()->sortdate == "latest" ? "DESC": "ASC"  ;
        
        $products = Product::orderBy('price', $sortprice)->orderBy('created_at', $sortdate)->paginate(16);
        
        
        
        
        
        
        if ($request->category_ids) {
            $categories_ids = Category::whereIn('parent_id',$request->category_ids)->get()->pluck('id');
            $sub_categories_ids =  Category::whereIn('parent_id',$categories_ids)->get()->pluck('id');
            $products->whereIn('category_id',$sub_categories_ids);
        }

        if ($request->product_rating) {
            foreach($products as $product){
                if((int)$product->reviews()->average('stars') >= $request->product_rating){
                    $products = $product;
                }
            }
        }

        if ($request->brand_ids) {
            $products->whereIn('brand_id', $request->brand_ids);
        }
        
        if( request()->my_range){
             $prices  = explode(";",request()->my_range);

                $products->where('price','>=',$prices[0]);
            
                $products->where('price','<=', $prices[1]);
            
        }
        
        
        if ($request->product_condition) {
            $products->where('product_condition', $request->product_condition);
        }
        
        
        if ($request->has_discount) {
            $products->whereNotNull('sale_price');
        }
        
        
        if ($request->saller_rating) {
            // $products->where('supplier_score', $request->supplier_score);
            foreach($products as $product){
                if((int)$product->owner->reviews()->average('stars') >= $request->saller_rating){
                    $products = $product;
                }
            }


        }

         $q =  Request()->keyword ;

    // return $store_ids;
    if($q){
           $products = Product::withTranslations(['en', 'ar'])->where('name', 'like', '%'.$q.'%')->orWhereHas('translations', function($query) use ($q){
            $query->where('value', 'like', '%'.$q.'%');
            })->paginate(10);
                

    }
    $category_id =  request()->category_id ? request()->category_id : Category::first()->id ;
    $category_ids = $request->category_ids ? $request->category_ids : Category::whereNull('parent_id')->get()->pluck('id') ;
    
     $suppliers = User::whereHas('categories', function ($query) use($category_id)  { 
            $query->where('id',$category_id ); 
        })->orwhereHas('categories', function ($query) use($category_ids)  { 
            $query->whereIn('id',$category_ids ); 
        })->
        
        
        get();
        $category =null; 
        $keyword =request()->keyword; 
      return view('categories.show',compact('products','suppliers','category','keyword'));
  }
  

  
}
