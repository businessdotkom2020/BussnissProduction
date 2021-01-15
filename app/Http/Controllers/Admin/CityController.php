<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CityRequest;
use App\Models\City;
use App\Models\Country;
use App\Models\State;
use App\Models\Translation;
use Illuminate\Http\Request;

class CityController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:city-list|city-create|city-edit|city-delete', ['only' => ['index','show']]);
        $this->middleware('permission:city-create', ['only' => ['create','store']]);
        $this->middleware('permission:city-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:city-delete', ['only' => ['destroy','delete_cities']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $cities = City::orderBy('id', 'desc')->get();
            return view('backend.cities.index',compact('cities'));
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
            $countries = Country::all();
            return view('backend.cities.create' , compact('countries'));
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
    public function store(CityRequest $request)
    {
        try {
            $city = new City();
            $city->name = $request->name_en;
            $city->state_id = $request->state_id;
            $city->save();
            if($request->name_ar){
                $translation_name = new Translation();
                $translation_name->table_name = 'cities';
                $translation_name->column_name = 'name';
                $translation_name->foreign_key = $city->id;
                $translation_name->locale = 'ar';
                $translation_name->value = $request->name_ar;
                $translation_name->save();
            }
            return redirect()->route('cities.index')->with('done', 'Added Successfully ....');
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
        $city = City::find($id);
        if(isset($city)){
            $countries = Country::all();
            $states = State::all();
            return view('backend.cities.edit' , compact('city' , 'countries' , 'states'));
        }else{
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
    public function update(CityRequest $request, $id)
    {
        try{
            $city = City::find($id);
            $city->name = $request->name_en;
            $city->state_id = $request->state_id;
            $city->save();
            if($request->name_ar){
                $translation_name = Translation::where('table_name' , 'cities')->where('column_name' , 'name')->
                where('foreign_key' , $id)->first();
                $translation_name->value = $request->name_ar;
                $translation_name->save();
            }
            return redirect()->route('cities.index')->with('done' , 'Edited Successfully ....');
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
        try{
            $city = City::find($id);
            Translation::where('table_name' , 'cities')->where('column_name' , 'name')->
            where('foreign_key' , $id)->delete();
            $city->delete();
            return response()->json([
                'success' => 'Record deleted successfully!'
            ]);
        }catch(\Exception $e){
            return redirect()->back()->with('error', 'Error Try Again !!');
        }
    }

    public function delete_cities(Request $request)
    {
        try{
            $ids = $request->ids;
            $cities = City::whereIn('id',explode(",",$ids))->get();
            if(count($cities) > 0){
                foreach ($cities as $city){
                    Translation::where('table_name' , 'cities')->where('column_name' , 'name')->
                    where('foreign_key' , $city->id)->delete();
                    $city->delete();
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
            return redirect()->back()->with('error', 'Error Try Again !!');
        }
    }
}
