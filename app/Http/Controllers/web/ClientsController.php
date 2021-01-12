<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Models\User;
use App\Models\Review;
use App\Models\Category;
use App\Models\Product;
use App\Models\Job;
use App\Models\Service;
use App\Models\Client;
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

class ClientsController extends Controller
{
    
    public function create(){
        
        return view('clients.create');
    }

   
   

    public function post(){
        // return request()->all();
        // return Request()->title;

      $client = new Client;
            $client->user_id  = Request()->user()->id;
            $client->name     = Request()->name;


       if (Request()->file('image'))
        {
            $file_name     = 'image'.   rand(1, 15). rand(155, 200) . rand(25, 55). '.png';
             Request()->image->storeAs('public/clients',$file_name);
            $client->image = '/clients/'. $file_name;
        }
            $client->save();
            Alert::toast('Job Added Successfully', 'success');
            return redirect('/dashboard/clients');
    }
    


  
}
