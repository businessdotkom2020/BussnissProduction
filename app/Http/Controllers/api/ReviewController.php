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
use App\Http\Resources\collections\ReviewsCollection;

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
             "status" => false,
             "code" => 422,
             "message" => 'module not found',
                     ],422);
        }

              if(!$review_model){
                          return response()->json([
                            "status" => false,
                            "code" => 422,
                            "message" => 'module not found',
                          ],422);
            }

        $review_model->review($stars = Request()->stars, $comment = Request()->comment);

         return response()->json([
             "status" => true,
             'code' => 200,
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
             "status" => false,
             'code' => 422,
             "message" => 'module not found',
             ]);
        }
   if(!$review_model){
        return response()->json([
            "status" => false,
            'code' => 200,
            "message" => 'module not found',
            ]);
            }



        return new ReviewsCollection($review_model->reviews()->paginate(10));

    }




    //////////////////    Product Review   ////////////////////////////


    public function review_product(AddReviewRequest $rquest,$id){

        $product = Product::find($id);

        $product->review($stars = Request()->stars, $comment = Request()->comment);

         return response()->json([
             "status" => true,
             'code'   => 200,
             'message' => 'Review Added Successfully'
             ]);
    }

        public function product_reviews($id){
                $product = Product::find($id);
                if(!$product)
                return response()->json(["status" => false,'code' => 422, "message" => "Product not found" ],422);

        return new ReviewsCollection($product->reviews()->paginate(10));

    }





        //////////////////    Request Review   ////////////////////////////


    public function review_request(AddReviewRequest $rquest,$id){

        $request = \App\Models\Request::find($id);
        if(!$request)
        return response()->json(["status" => false,'code' => 422, "message" => "Request not found" ],422);

        $request->review($stars = Request()->stars, $comment = Request()->comment);
        return response()->json([
            "status" => true,
            'code'   => 200,
            'message' => 'Review Added Successfully'
            ]);
    }


        public function request_reviews($id){
         $request = \App\Models\Request::find($id);
         if(!$request)
         return response()->json(["status" => false,'code' => 422, "message" => "Request not found" ],422);

        return new ReviewsCollection($request->reviews()->paginate(10));

    }

        //////////////////    Store  Review   ////////////////////////////


    public function review_store(AddReviewRequest $rquest,$id){

        $store = User::find($id);
        if(!$store)
        return response()->json(["status" => false,'code' => 422, "message" => "store not found" ],422);

        $store->review($stars = Request()->stars, $comment = Request()->comment);
         return response()->json([
             "status" => true,
             'code'   => 200,
             'message' => 'Review Added Successfully'
             ]);
    }


        public function store_reviews($id){
        $store = User::find($id);
        if(!$store)
        return response()->json(["status" => false,'code' => 422, "message" => "store not found" ],422);

        return new ReviewsCollection($store->reviews()->paginate(10));

    }

        public function supplier_reviews(){
          $store = request()->user();
        return new ReviewsCollection($store->reviews()->paginate(10));

    }

        //////////////////    Service  Review   ////////////////////////////


    public function review_service(AddReviewRequest $rquest,$id){

        $service = Service::find($id);
        if(!$service)
        return response()->json(["status" => false,'code' => 422, "message" => "service   not found" ],422);

        $service->review($stars = Request()->stars, $comment = Request()->comment);
        return response()->json([
            "status" => true,
            'code'   => 200,
            'message' => 'Review Added Successfully'
            ]);
    }


        public function service_reviews($id){
         $service = Service::find($id);
         if(!$service)
         return response()->json(["status" => false,'code' => 422, "message" => "service   not found" ],422);

        return new ReviewsCollection($service->reviews()->paginate(10));

    }


        public function destroy($id){
              $review =  Review::find($id) ;

                 if(!$review)
                        return response()->json(['status' => 'failed', 'message' => 'not fond']);
            $review->delete();

        return response()->json([
            'status' => true,
            'code' => 200,
            "message" => "Request Deleted successfully"
            ]) ;

    }

}
