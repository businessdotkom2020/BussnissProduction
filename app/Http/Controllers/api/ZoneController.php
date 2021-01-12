<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\ZoneResource;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\collections\ProductIndexCollection;
use App\Http\Resources\collections\StoreCollection;
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

        response()->json([
            'status' => true,
            'code' => 200,
            'data' => [

            'zones' =>  ZoneResource::collection(IndustrialZones::get()),

                       'slider' => [
          'https://i.imgur.com/lb2nq43.jpg',
          'https://i.imgur.com/lb2nq43.jpg',
          ]
            ]

        ]);


    }
    public function show($id){
        return
        response()->json([
            'status' => true,
            'code' => 200,
            'data' =>

        ZoneResource::collection(IndustrialZones::where('state_id',$id)->get())
        ]);

    }
    public function slider(){
        return
        response()->json([
            'status' => true,
            'code' => 200,
            'data' =>

       new  SliderResource(Slider::first())
       ]);

    }


    public function zone_products($id){
        $sortprice = request()->sortprice == "highest" ? "DESC": "ASC"  ;
        $sortdate = request()->sortdate == "latest" ? "DESC": "ASC"  ;


        return  new ProductIndexCollection(Product::where('zone_id',$id)->orderBy('price', $sortprice)->orderBy('created_at', $sortdate)->paginate(10));
    }

    public function zone_factories($id){
        return new StoreCollection(user::where('zone_id',$id)->whereHas('products')->paginate(10));
    }

    public function zone_companies($id){
        return  CompaniesResource::collection(user::where('zone_id',$id)->paginate(10));
    }

}
