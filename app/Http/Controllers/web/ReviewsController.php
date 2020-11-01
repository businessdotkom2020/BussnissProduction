<?php

namespace App\Http\Controllers\web;

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

use RealRashid\SweetAlert\Facades\Alert;
use Lang;

class ReviewsController extends Controller
{
    
    
    
    //////////////////     Add Review   ////////////////////////////
    
    
    public function add_Review($review_type,$id,AddReviewRequest $rquest){
        if(!\Auth::user())
    {
     
             Alert::toast(trans('general.login_first'), 'success');

        return redirect()->back();   
    }

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
        Alert::toast(trans('general.add_review_successfully'), 'success');

        return redirect()->back();
    }
    


   
    


    
    


    
        public function destroy($id){
              $review =  Review::find($id) ;

                 if(!$review){
                        return response()->json(['status' => 'failed', 'message' => 'not fond']);
                             Alert::toast(trans('general.comment_not_found'), 'success');
      return redirect()->back();

                 }
            $review->delete();
                             Alert::toast(trans('general.delete_comment'), 'success');

      return redirect()->back();


    }
  
}
