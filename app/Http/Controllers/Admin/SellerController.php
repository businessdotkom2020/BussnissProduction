<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SellerRequest;
use App\Models\Category;
use App\Models\CategoryUser;
use App\Models\City;
use App\Models\Country;
use App\Models\State;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SellerController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:supplier-list|supplier-create|supplier-edit|supplier-delete', ['only' => ['index','show']]);
        $this->middleware('permission:supplier-list', ['only' => ['index','show']]);
        $this->middleware('permission:supplier-create', ['only' => ['create','store']]);
        $this->middleware('permission:supplier-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:supplier-delete', ['only' => ['destroy' , 'delete_suppliers']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $users = User::whereNotNull('state_id')->orderBy('id', 'desc')->get();
            return view('backend.sellers.index',compact('users'));
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
            $countries = Country::all();
            return view('backend.sellers.create' , compact('countries','categories'));
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
    public function store(SellerRequest $request)
    {
        try{
            $user = new User();
            $user->name       = $request->name;
            $user->email      = $request->email;
            $user->mobile     = $request->mobile;
            $user->hot_number = $request->hotline;
            $user->country_id = $request->country_id;
            $user->state_id   = $request->state_id;
            $user->city_id    = $request->city_id;
            $user->street_nom = $request->street_no;
            $user->address    = $request->address;
            $user->lat        = $request->lat;
            $user->lang       = $request->lang;
            $user->zip_code    = $request->zip_code;
            /********** optional ********/
            $user->facebook_url    = $request->facebook;
            $user->linkedin_url    = $request->linkedin;
            $user->instagram_url    = $request->instagram;
            $user->youtube_url    = $request->youtube;
            $user->working_from    = $request->working_from;
            $user->working_to    = $request->working_to;
            $user->delivery_time    = $request->delivery_time;
            $user->delivery_fee    = $request->delivery_fee;
            $user->year_founded    = $request->year_founded;
            /**********************************/
            $user->password    = Hash::make($request->password);
            $user->type   = 'supplier';
            if ($request->file('store_image'))
            {
                $file_name     = 'image'.   rand(1, 15). rand(155, 200) . rand(25, 55). '.png';
                Request()->store_image->storeAs('public/users',$file_name);
                $user->avatar = 'users/'. $file_name;
            }
            if ($request->file('store_background'))
            {
                $file_name     = 'image'.   rand(1, 15). rand(155, 200) . rand(25, 55). '.png';
                Request()->store_background->storeAs('public/users',$file_name);
                $user->store_background = 'users/'. $file_name;
            }
            $user->save();
            $user->categories()->attach(Request()->category_ids);

            return redirect()->route('sellerss.index')->with('done', 'Added Successfully ....');
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
            $user = User::whereNotNull('state_id')->where('id',$id)->first();
            if(isset($user)){
                return view('backend.sellers.show' , compact('user'));
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
        $user = User::find($id);
        if (isset($user)) {
            $categories = Category::whereNull('parent_id')->get();
            $countries = Country::all();
            $states = State::all();
            $cities = City::all();
            $select_categoriesIds = [];
            $select_cats = CategoryUser::where('user_id' , $id)->get();
            foreach ($select_cats as $select_cat){
                array_push($select_categoriesIds , $select_cat->category_id);
            }
            $select_categories = Category::whereIn('id' , $select_categoriesIds)->get();
            return view('backend.sellers.edit', compact('user' , 'countries' , 'select_categories' ,
                'categories' , 'states' , 'cities'));
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
    public function update(SellerRequest $request, $id)
    {
        try{
            $user = User::find($id);
            $user->name       = $request->name;
            $user->email      = $request->email;
            $user->mobile     = $request->mobile;
            $user->hot_number = $request->hotline;
            $user->country_id = $request->country_id;
            $user->state_id   = $request->state_id;
            $user->city_id    = $request->city_id;
            $user->street_nom = $request->street_no;
            $user->address    = $request->address;
            $user->lat        = $request->lat;
            $user->lang       = $request->lang;
            $user->zip_code    = $request->zip_code;
            /********** optional ********/
            $user->facebook_url    = $request->facebook;
            $user->linkedin_url    = $request->linkedin;
            $user->instagram_url    = $request->instagram;
            $user->youtube_url    = $request->youtube;
            $user->working_from    = $request->working_from;
            $user->working_to    = $request->working_to;
            $user->delivery_time    = $request->delivery_time;
            $user->delivery_fee    = $request->delivery_fee;
            $user->year_founded    = $request->year_founded;
            /**********************************/
            if($request->password){
                $user->password    = Hash::make($request->password);
            }else{
                $user->password    = $user->password ;
            }
            $user->type   = 'supplier';
            if ($request->file('store_image'))
            {
                if($user->avatar != 'users/default.png'){
                    @unlink('storage/' . $user->avatar);
                }
                $file_name     = 'image'.   rand(1, 15). rand(155, 200) . rand(25, 55). '.png';
                Request()->store_image->storeAs('public/users',$file_name);
                $user->avatar = 'users/'. $file_name;
            }
            if ($request->file('store_background'))
            {
                $file_name     = 'image'.   rand(1, 15). rand(155, 200) . rand(25, 55). '.png';
                Request()->store_background->storeAs('public/users',$file_name);
                $user->store_background = 'users/'. $file_name;
                @unlink('storage/' . $user->store_background);
            }
            $user->save();
            CategoryUser::where('user_id' , $id)->delete();
            $user->categories()->attach(Request()->category_ids);
            return redirect()->route('sellerss.index')->with('done', 'Added Successfully ....');
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
            $user = User::find($id);
            if($user->avatar != 'users/default.png'){
                @unlink('storage/' . $user->avatar);
            }
            @unlink('storage/' . $user->store_background);
            CategoryUser::where('user_id' , $id)->delete();
            $user->delete();
            return response()->json([
                'success' => 'Record deleted successfully!'
            ]);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error Try Again !!');
        }
    }
    public function delete_sellerss()
    {
        try {
            $users = User::whereNotNull('state_id')->get();
            if (count($users) > 0) {
                foreach ($users as $user) {
                    if($user->avatar != 'users/default.png'){
                        @unlink('storage/' . $user->avatar);
                    }
                    @unlink('storage/' . $user->store_background);
                    CategoryUser::where('user_id' , $user->id)->delete();
                    $user->delete();
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
