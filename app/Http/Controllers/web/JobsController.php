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

class JobsController extends Controller
{
    
    public function create(){
        
        return view('jobs.create');
    }

    public function show($job_id){
        $job = Job::find($job_id);
        return view('jobs.show',compact('job'));

    }

    public function post(){
        // return request()->all();
        // return Request()->title;

            $job = new Job;
            $job->title              = Request()->title;
            $job->user_id            = \Auth::id();
            $job->description        = Request()->description;
            $job->year_experience    = Request()->year_experience;
            $job->career_level       = Request()->career_level;
            $job->open_positions     = Request()->open_positions;
            $job->job_address        = Request()->job_address;
            $job->date_announced     = Request()->date_announced;
            $job->salary             = Request()->salary;
            $job->save();
        
            Alert::toast('Job Added Successfully', 'success');
            return redirect('/job/'.$job->id);
    }
    


  
}
