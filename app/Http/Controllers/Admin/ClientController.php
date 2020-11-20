<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\User;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:tag-list|tag-create|tag-edit|tag-delete', ['only' => ['index','show']]);
        $this->middleware('permission:tag-create', ['only' => ['create','store']]);
        $this->middleware('permission:tag-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:tag-delete', ['only' => ['destroy' , 'delete_clients']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try{
            $clients = Client::orderBy('id' , 'desc')->get();
            return view('backend.clients.index' , compact('clients'));
        }catch(\Exception $e){
            return redirect()->back()->with('error' , 'Error Try Again....');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        try{
            $suppliers = User::whereNotNull('state_id')->get();
            return view('backend.clients.create' , compact('suppliers'));
        }catch(\Exception $e){
            return redirect()->back()->with('error' , 'Error Try Again....');
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
            $client = new Client();
            $client->name = $request->name;
            $client->user_id = $request->user_id;
            if (($request->file('image'))) {
                $file_name     = 'image'.   rand(1, 15). rand(155, 200) . rand(25, 55). '.png';
                $request->image->storeAs('public/clients',$file_name);
                $client->image = 'clients/'. $file_name;
            }
            $client->save();
            return redirect()->route('clients.index')->with('done' , 'Added Successfully....');
        }catch (\Exception $e){
            return redirect()->back()->with('error' , 'Error Try Again....');
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
        $client = Client::where('id' , $id)->first();
        if(isset($client)){
            $suppliers = User::whereNotNull('state_id')->get();
            return view('backend.clients.edit' , compact('client' , 'suppliers'));
        }else{
            return redirect()->back()->with('error' , 'Error Try Again....');
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
            $client = Client::find($id);
            $client->name = $request->name;
            $client->user_id = $request->user_id;
            if (($request->file('image'))) {
                @unlink('storage/' . $client->image);
                $file_name     = 'image'.   rand(1, 15). rand(155, 200) . rand(25, 55). '.png';
                $request->image->storeAs('public/clients',$file_name);
                $client->image = 'clients/'. $file_name;
            }
            $client->save();
            return redirect()->route('clients.index')->with('done' , 'Edited Successfully....');
        }catch (\Exception $e){
            return redirect()->back()->with('error' , 'Error Try Again....');
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
        try{
            $client = Client::find($id);
            @unlink('storage/' . $client->image);
            $client->delete();
            return response()->json([
                'success' => 'Record deleted successfully!'
            ]);
        }catch(\Exception $e){
            return redirect()->back()->with('error' , 'Error Try Again....');
        }
    }
    public function delete_clients()
    {
        try{
            $clients = Client::all();
            if(count($clients) > 0){
                foreach ($clients as $client) {
                    @unlink('storage/' . $client->image);
                    $client->delete();
                }
                return response()->json([
                    'success' => 'Record deleted successfully!'
                ]);
            }else{
                return response()->json([
                    'error' => 'NO Record TO DELETE'
                ]);
            }
        }catch(\Exception $e){
            return redirect()->back()->with('error' , 'Error Try Again....');
        }
    }
}
