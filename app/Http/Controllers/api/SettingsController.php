<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use App\Models\AppSetting;
use App\Models\Request;
use App\Models\CustomerService;
use App\Http\Requests\CustomerServiceRequest;
use App\Http\Resources\ParentCategoryResource;
use App\Http\Resources\MainCategoryResource;
use App\Http\Resources\CategoryProductsResource;
use App\Http\Resources\ProductIndexResource;
use App\Http\Resources\RequestIndexResource;
use App\Http\Resources\RequestResource;
use App\Http\Resources\StoreResource;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\TermsConditionsResource;
use App\Http\Resources\AboutResource;
use App\Http\Resources\PrivacyPolicyResource;
use App\Http\Resources\SocialLinksResource;


class SettingsController extends Controller
{
   public function customer_service(CustomerServiceRequest $request){
       $customer_service = new CustomerService ;
       $customer_service->name = Request()->name;
       $customer_service->mobile = Request()->mobile;
       $customer_service->title = Request()->title;
       $customer_service->body = Request()->body;
       $customer_service->save();

               return response()->json([
            'status' => true,
            'code' => 200,
            'message' => "Support Ticket Created Sussuflly",
            ]) ;
   }


      public function about(){
        return response()->json([
            'status' => true,
            'code' => 200,
            'data' =>  new AboutResource(AppSetting::first())
        ]) ;
   }
      public function terms_conditions(){
        return response()->json([
            'status' => true,
            'code' => 200,
            'data' =>  new TermsConditionsResource(AppSetting::first())
        ]) ;

   }
      public function privacy_policy(){
        return response()->json([
            'status' => true,
            'code' => 200,
            'data' =>  new PrivacyPolicyResource(AppSetting::first())
        ]) ;

   }

      public function social_links(){
        return response()->json([
            'status' => true,
            'code' => 200,
            'data' => new SocialLinksResource(AppSetting::first())
        ]) ;


   }










}
