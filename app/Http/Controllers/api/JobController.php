<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterUsersRequest;
use App\Http\Resources\JobsResource;
use App\Http\Requests\JobRequest;
use App\Models\Job;


class JobController extends BaseController
{

        public function post(JobRequest $request){
            $job = new Job;
            $job->user_id            = $request->user()->id;
            $job->title              = $request->title;
            $job->description        = $request->description;
            $job->year_experience    = $request->year_experience;
            $job->career_level       = $request->career_level;
            $job->open_positions     = $request->open_positions;
            $job->job_address        = $request->job_address;
            $job->date_announced     = $request->date_announced;
            $job->salary             = $request->salary;

            $job->save();
                
        return response()->json([
            'status' => "success",
             "message" => "Job  Created successfully"
            ]) ;
        }


        public function supplier_jobs($id){
            return JobsResource::collection(Job::where('user_id',$id)->paginate(10));
        }

        public function show($id){
            return new JobsResource(Job::find($id));
        }
        
        
public function update($id  , JobRequest $request){
    $job = Job::find($id);
           if(!$job)
                return response()->json(['status' => 'failed', 'message' => 'not fond']);

            $job->user_id            = $request->user()->id;
            $job->title              = $request->title;
            $job->description        = $request->description;
            $job->year_experience    = $request->year_experience;
            $job->career_level       = $request->career_level;
            $job->open_positions     = $request->open_positions;
            $job->job_address        = $request->job_address;
            $job->date_announced     = $request->date_announced;
            $job->salary             = $request->salary;

            $job->update();
            
                
        return response()->json([
            'status' => "success",
             "message" => "Bransh  Updated successfully"
            ]) ;
}

public function destroy($id){
              $job =  Job::find($id) ;

                 if(!$job)
                        return response()->json(['status' => 'failed', 'message' => 'not fond']);
            $job->delete();

        return response()->json([
            'status' => "success",
             "message" => "Job Deleted successfully"

            ]) ;
}

}
