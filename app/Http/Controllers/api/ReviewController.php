<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Models\User;
use App\Models\Review;
use App\Models\Category;
use App\Models\Product;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Resources\ParentCategoryResource;
use App\Http\Resources\MainCategoryResource;
use App\Http\Resources\CategoryProductsResource;
use App\Http\Resources\ProductIndexResource;
use App\Http\Resources\ReviewsRecource;
use App\Http\Resources\StoreResource;
use App\Http\Requests\AddReviewRequest;


class ReviewController extends Controller
{
    
    
    
    //////////////////     Add Review   ////////////////////////////
    
    
    public function review($review_type,$id,AddReviewRequest $rquest){
        if($review_type == 'product'){
             $review_model = Product::find($id);

        }elseif($review_type == 'supplier'){
            $review_model = User::find($id);

        }elseif($review_type == 'service'){
            $review_model = Service::find($id);

        
        }elseif($review_type == 'request'){
            $review_model =  \App\Models\Request::find($id);

        }
        else{
                     return response()->json([
             "status" => "failed"
             ]);
        }
        
              if(!$review_model){
                          return response()->json([
             "status" => "failed",
             "message" => "Id Not Found"
             ]); 
            }
        
        $review_model->review($stars = Request()->stars, $comment = Request()->comment);

         return response()->json([
             "status" => "success",
            "message" => "Review Added Successfuly",

             ]);
    }
    
        //////////////////     Reviews   ////////////////////////////

            public function reviews($review_type,$id){

               if($review_type == 'product'){
             $review_model = Product::find($id);

        }elseif($review_type == 'supplier'){
            $review_model = User::find($id);

        }elseif($review_type == 'service'){
            $review_model = Service::find($id);

        
        }elseif($review_type == 'request'){
            $review_model =  \App\Models\Request::find($id);

        }
        else{
                     return response()->json([
             "status" => "failed"
             ]);
        }
   if(!$review_model){
                          return response()->json([
             "status" => "failed",
             "message" => "Id Not Found"
             ]); 
            }

        return ReviewsRecource::collection($review_model->reviews()->paginate(10));

    }
    
    

    
    //////////////////    Product Review   ////////////////////////////
    
    
    public function review_product(AddReviewRequest $rquest,$id){
        
        $product = Product::find($id);
        
        $product->review($stars = Request()->stars, $comment = Request()->comment);

         return response()->json([
             "status" => "success"
             ]);
    }
    
        public function product_reviews($id){
                $product = Product::find($id);

        return ReviewsRecource::collection($product->reviews()->paginate(10));

    }
    


    
    
        //////////////////    Request Review   ////////////////////////////

    
    public function review_request(AddReviewRequest $rquest,$id){
        
        $request = \App\Models\Request::find($id);
        
        $request->review($stars = Request()->stars, $comment = Request()->comment);
         return response()->json([
             "status" => "success",
             "message" => "Review Added Successfully"
             ]);
    }
    
    
        public function request_reviews($id){
         $request = \App\Models\Request::find($id);
        return ReviewsRecource::collection($request->reviews()->paginate(10));

    }
    
        //////////////////    Store  Review   ////////////////////////////

    
    public function review_store(AddReviewRequest $rquest,$id){
        
        $store = User::find($id);
        
        $store->review($stars = Request()->stars, $comment = Request()->comment);
         return response()->json([
             "status" => "success"
             ]);
    }
    
    
        public function store_reviews($id){
         $store = User::find($id);
        return ReviewsRecource::collection($store->reviews()->paginate(10));

    }
    
        public function supplier_reviews(){
          $store = request()->user();
        return ReviewsRecource::collection($store->reviews()->paginate(10));

    }
    
        //////////////////    Service  Review   ////////////////////////////

    
    public function review_service(AddReviewRequest $rquest,$id){
        
        $service = Service::find($id);
        
        $service->review($stars = Request()->stars, $comment = Request()->comment);
         return response()->json([
             "status" => "success"
             ]);
    }
    
    
        public function service_reviews($id){
         $service = Service::find($id);
        return ReviewsRecource::collection($service->reviews()->paginate(10));

    }
    
    
        public function destroy($id){
              $review =  Review::find($id) ;

                 if(!$review)
                        return response()->json(['status' => 'failed', 'message' => 'not fond']);
            $review->delete();

        return response()->json([
            'status' => "success",
             "message" => "Request Deleted successfully"

            ]) ;

    }
  
}
