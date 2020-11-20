<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:service-list|service-create|service-edit|service-delete', ['only' => ['index','show']]);
        $this->middleware('permission:service-create', ['only' => ['create','store']]);
        $this->middleware('permission:service-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:service-delete', ['only' => ['destroy','delete_servicess']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $services = Service::orderBy('id', 'desc')->get();
            return view('backend.services.index',compact('services'));
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
            return view('backend.services.create',compact('categories','users'));
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
           $service = new Service();
           $service->name = $request->name;
           $service->user_id = $request->user_id;
           $service->description = $request->description;
           $service->category_id = $request->category_id;
           $images = array();
           if (is_array($request->file('images'))) {
               foreach ($request->file('images') as $image) {
                   $file_name     = 'product_image'.   rand(1, 15). rand(155, 200) . rand(25, 55). '.png';
                   $image->storeAs('public/services',$file_name);
                   $img_url = 'services/'. $file_name;
                   array_push($images, $img_url);
               }
           }
           $service->images = json_encode($images);
           $service->save();
           return redirect()->route('servicess.index')->with('done', 'Added Successfully ....');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Service::find($id);
        if(isset($service)) {
            $categories = Category::whereNull('parent_id')->get();
            $users = User::whereNotNull('state_id')->get();
            return view('backend.services.edit',compact('categories','users' , 'service'));
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
            $service = Service::find($id);
            $service->name = $request->name;
            $service->user_id = $request->user_id;
            $service->description = $request->description;
            $service->category_id = $request->category_id;
            $images = array();
            if (is_array($request->file('images'))) {
                foreach (json_decode($service->images) as $img){
                    @unlink('storage/' . $img);
                }
                $service->images = null;
                foreach ($request->file('images') as $image) {
                    $file_name     = 'product_image'.   rand(1, 15). rand(155, 200) . rand(25, 55). '.png';
                    $image->storeAs('public/services',$file_name);
                    $img_url = 'services/'. $file_name;
                    array_push($images, $img_url);
                }
                $service->images = json_encode($images);
            }
            $service->save();
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
            $service = Service::find($id);

            foreach (json_decode($service->images) as $img){
                @unlink('storage/' . $img);
            }

            $service->delete();
            return response()->json([
                'success' => 'Record deleted successfully!'
            ]);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error Try Again !!');
        }
    }
    public function delete_servicess()
    {
        try {
            $services = Service::all();
            if (count($services) > 0) {
                foreach ($services as $service) {
                    foreach (json_decode($service->images) as $img){
                        @unlink('storage/' . $img);
                    }
                    $service->delete();
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
