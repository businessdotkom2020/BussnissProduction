<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\{Category,User};
use Illuminate\Http\Request;
use App\Models\Request as Req;

class RequestController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:request-list|request-create|request-edit|request-delete', ['only' => ['index','show']]);
        $this->middleware('permission:request-create', ['only' => ['create','store']]);
        $this->middleware('permission:request-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:request-delete', ['only' => ['destroy','delete_requestss']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $requests = Req::orderBy('id', 'desc')->get();
            return view('backend.requests.index',compact('requests'));
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
            $categories = Category::whereNull('parent_id')->get();
            $users = User::whereNotNull('state_id')->get();
            return view('backend.requests.create',compact('categories','users'));
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
            $req = new Req();
            $req->name = $request->name;
            $req->user_id = $request->user_id;
            $req->description = $request->description;
            $req->category_id = $request->category_id;
            $images = array();
            if (is_array($request->file('images'))) {
                foreach ($request->file('images') as $image) {
                    $file_name     = 'product_image'.   rand(1, 15). rand(155, 200) . rand(25, 55). '.png';
                    $image->storeAs('public/requests',$file_name);
                    $img_url = 'requests/'. $file_name;
                    array_push($images, $img_url);
                }
            }
            $req->images = json_encode($images);
            $req->save();
            return redirect()->route('requestss.index')->with('done', 'Added Successfully ....');
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
            $request= Req::find($id);
            if(isset($request)){
                return view('backend.requests.show' , compact('request'));
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
        $req = Req::find($id);
        if(isset($req)) {
            $categories = Category::whereNull('parent_id')->get();
            $users = User::whereNotNull('state_id')->get();
            return view('backend.requests.edit',compact('categories','users' , 'req'));
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
            $req = Req::find($id);
            $req->name = $request->name;
            $req->user_id = $request->user_id;
            $req->description = $request->description;
            $req->category_id = $request->category_id;
            $images = array();
            if (is_array($request->file('images'))) {
                foreach (json_decode($req->images) as $img){
                    @unlink('storage/' . $img);
                }
                $req->images = null;
                foreach ($request->file('images') as $image) {
                    $file_name     = 'product_image'.   rand(1, 15). rand(155, 200) . rand(25, 55). '.png';
                    $image->storeAs('public/services',$file_name);
                    $img_url = 'services/'. $file_name;
                    array_push($images, $img_url);
                }
                $req->images = json_encode($images);
            }
            $req->save();
            return redirect()->route('servicess.index')->with('done', 'Added Successfully ....');
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
            $req = Req::find($id);

            foreach (json_decode($req->images) as $img){
                @unlink('storage/' . $img);
            }

            $req->delete();
            return response()->json([
                'success' => 'Record deleted successfully!'
            ]);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error Try Again !!');
        }
    }
    public function delete_requestss()
    {
        try {
            $reqs = Req::all();
            if (count($reqs) > 0) {
                foreach ($reqs as $req) {
                    foreach (json_decode($req->images) as $img){
                        @unlink('storage/' . $img);
                    }
                    $req->delete();
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
}
