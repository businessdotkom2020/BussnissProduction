<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BranchRequest;
use App\Models\Branch;
use App\Models\User;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:branch-list|branch-create|branch-edit|branch-delete', ['only' => ['index','show']]);
        $this->middleware('permission:branch-list', ['only' => ['index','show']]);
        $this->middleware('permission:branch-create', ['only' => ['create','store']]);
        $this->middleware('permission:branch-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:branch-delete', ['only' => ['destroy' , 'delete_branches','delete_branch']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $branches = Branch::orderBy('id', 'desc')->get();
            return view('backend.branches.index',compact('branches'));
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
            return view('backend.branches.create' , compact('users'));
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
    public function store(BranchRequest $request)
    {
        try{
            $branch = new Branch();
            $branch->name       = $request->name;
            $branch->user_id       = $request->user_id;
            $branch->email      = $request->email;
            $branch->mobile     = $request->mobile;
            $branch->land_line = $request->hotline;
            $branch->address    = $request->address;
            $branch->lat        = $request->lat;
            $branch->lang       = $request->lng;
            /********** optional ********/
            $branch->work_from    = $request->working_from;
            $branch->work_to    = $request->working_to;
            $branch->delivery_from    = $request->delivery_from;
            $branch->delivery_to    = $request->delivery_to;
            $branch->delivery_fee    = $request->delivery_fee;
            /**********************************/
            $branch->save();

            return redirect()->route('branches.index')->with('done', 'Added Successfully ....');
        } catch (\Exception $e) {
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
            $branch = Branch::find($id);
            if(isset($branch)){
                return view('backend.branches.show' , compact('branch'));
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
        $branch = Branch::find($id);
        if (isset($branch)) {
            $users = User::whereNotNull('state_id')->get();
            return view('backend.branches.edit', compact('users' , 'branch'));
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
    public function update(BranchRequest $request, $id)
    {
        try{
            $branch = Branch::find($id);
            $branch->name       = $request->name;
            $branch->user_id       = $request->user_id;
            $branch->email      = $request->email;
            $branch->mobile     = $request->mobile;
            $branch->land_line = $request->hotline;
            $branch->address    = $request->address;
            $branch->lat        = $request->lat;
            $branch->lang       = $request->lng;
            /********** optional ********/
            $branch->work_from    = $request->working_from;
            $branch->work_to    = $request->working_to;
            $branch->delivery_from    = $request->delivery_from;
            $branch->delivery_to    = $request->delivery_to;
            $branch->delivery_fee    = $request->delivery_fee;
            /**********************************/
            $branch->save();
            return redirect()->route('branches.index')->with('done', 'Added Successfully ....');
        } catch (\Exception $e) {
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
            $branch = Branch::find($id);
            $branch->delete();
            return response()->json([
                'success' => 'Record deleted successfully!'
            ]);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error Try Again !!');
        }
    }
    public function delete_branches(Request $request)
    {
        $ids = $request->ids;
        $branches = Branch::whereIn('id',explode(",",$ids))->get();
        foreach ($branches as $branch){
            $branch->delete();
        }
        return response()->json(['success'=>"Records Deleted successfully."]);
    }

    public function delete_branch($id)
    {
        try {
            $branch = Branch::find($id);
            $branch->delete();
            return redirect()->route('branches.index')->with('done', 'Deleted Successfully ....');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error Try Again !!');
        }
    }
}
