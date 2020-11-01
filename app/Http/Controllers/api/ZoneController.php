<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\ZoneResource;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use App\Models\User;
use App\Models\Slider;
use App\Models\Product;
use App\Models\IndustrialZones;
use Illuminate\Http\Request;
use App\Http\Resources\ProductResource;
use App\Http\Resources\StoreResource;
use App\Http\Resources\CompaniesResource;
use App\Http\Resources\SliderResource;

use App\Http\Resources\ProductIndexResource;

class ZoneController extends Controller
{
    public function index(){
        return  
        
        
        ZoneResource::collection(IndustrialZones::get())
          ->additional([
                     'slider' => [
        'https://i.imgur.com/lb2nq43.jpg',
        'https://i.imgur.com/lb2nq43.jpg',
        ]
       
            ]);
            
    }
    public function show($id){
        return  
        
        
        ZoneResource::collection(IndustrialZones::where('state_id',$id)->get());
            
    }
    public function slider(){
        return  
        
        
       new  SliderResource(Slider::first());
            
    }


    public function zone_products($id){
        $sortprice = request()->sortprice == "highest" ? "DESC": "ASC"  ;
        $sortdate = request()->sortdate == "latest" ? "DESC": "ASC"  ;
        

        return  ProductIndexResource::collection(Product::where('zone_id',$id)->orderBy('price', $sortprice)->orderBy('created_at', $sortdate)->paginate(10));
    }

    public function zone_factories($id){
        return  StoreResource::collection(user::where('zone_id',$id)->whereHas('products')->paginate(10));
    }

    public function zone_companies($id){
        return  CompaniesResource::collection(user::where('zone_id',$id)->paginate(10));
    }
    
}