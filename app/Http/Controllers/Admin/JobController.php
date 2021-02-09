<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\{Job , User};
use Illuminate\Http\Request;

class JobController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:job-list|job-create|job-edit|job-delete', ['only' => ['index','show']]);
        $this->middleware('permission:job-create', ['only' => ['create','store']]);
        $this->middleware('permission:job-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:job-delete', ['only' => ['destroy','delete_jobss','delete_job']]);
    }
    public function index()
    {
        try {
            $jobs = Job::orderBy('id', 'desc')->get();
            return view('backend.jobs.index',compact('jobs'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error Try Again !!');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        try {
            $users = User::whereNotNull('state_id')->get();
            return view('backend.jobs.create',compact('users'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error Try Again !!');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            Job::create($request->all());
            return redirect()->route('jobss.index')->with('done', 'Added Successfully ....');
        }catch (\Exception $e){
            return redirect()->back()->with('error', 'Error Try Again !!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $job = Job::find($id);
            if(isset($job)){
                return view('backend.jobs.show' , compact('job'));
            }else{
                return redirect()->back()->with('error', 'Error Try Again !!');
            }

        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error Try Again !!');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $job = Job::find($id);
        if(isset($job)) {
            $users = User::whereNotNull('state_id')->get();
            return view('backend.jobs.edit',compact('users' , 'job'));
        } else {
            return redirect()->back()->with('error', 'Error Try Again !!');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try{
            $job = Job::find($id);
            $job->update($request->all());
            return redirect()->route('jobss.index')->with('done', 'Added Successfully ....');
        }catch (\Exception $e){
            return redirect()->back()->with('error', 'Error Try Again !!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $job = Job::find($id);
            $job->delete();
            return response()->json([
                'success' => 'Record deleted successfully!'
            ]);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error Try Again !!');
        }
    }
    public function delete_jobss(Request $request)
    {
        try {
            $ids = $request->ids;
            $jobs = Job::whereIn('id',explode(",",$ids))->get();
            if (count($jobs) > 0) {
                foreach ($jobs as $job) {
                    $job->delete();
                }
                return response()->json([
                    'success' => 'Record deleted successfully!'
                ]);
            } else {
                return response()->json([
                    'error' => 'NO Records TO DELETE'
                ]);
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error Try Again !!');
        }
    }

    public function delete_job($id)
    {
        try {
            $job = Job::find($id);
            $job->delete();
            return redirect()->route('jobss.index')->with('done', 'Deleted Successfully ....');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error Try Again !!');
        }
    }
}
