<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CountryRequest;
use App\Models\Country;
use App\Models\Translation;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:country-list|country-create|country-edit|country-delete', ['only' => ['index','show']]);
        $this->middleware('permission:country-create', ['only' => ['create','store']]);
        $this->middleware('permission:country-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:country-delete', ['only' => ['destroy' , 'delete_countries']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $countries = Country::orderBy('id', 'desc')->get();
            return view('backend.countries.index',compact('countries'));
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
            return view('backend.countries.create');
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
    public function store(CountryRequest $request)
    {
        try {
            $country = new Country();
            $country->name = $request->name_en;
            $country->save();
            if($request->name_ar){
                $translation_name = new Translation();
                $translation_name->table_name = 'countries';
                $translation_name->column_name = 'name';
                $translation_name->foreign_key = $country->id;
                $translation_name->locale = 'ar';
                $translation_name->value = $request->name_ar;
                $translation_name->save();
            }
            return redirect()->route('countries.index')->with('done', 'Added Successfully ....');
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
        $country = Country::find($id);
        if(isset($country)) {
            return view('backend.countries.edit' , compact('country'));
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
    public function update(CountryRequest $request, $id)
    {
        try {
            $country = Country::find($id);
            $country->name = $request->name_en;
            $country->save();
            if($request->name_ar){
                $translation_name = Translation::where('table_name' , 'countries')->where('column_name' , 'name')->
                where('foreign_key' , $id)->first();
                $translation_name->value = $request->name_ar;
                $translation_name->save();
            }
            return redirect()->route('countries.index')->with('done', 'Edited Successfully ....');
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
            $country = Country::find($id);
            Translation::where('table_name' , 'countries')->where('column_name' , 'name')->
            where('foreign_key' , $id)->delete();
            $country->delete();
            return response()->json([
                'success' => 'Record deleted successfully!'
            ]);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error Try Again !!');
        }
    }
    public function delete_countries(Request $request)
    {
        try {
            $ids = $request->ids;
            $countries = Country::whereIn('id',explode(",",$ids))->get();
            if (count($countries) > 0) {
                foreach ($countries as $country) {
                    Translation::where('table_name' , 'countries')->where('column_name' , 'name')->
                    where('foreign_key' , $country->id)->delete();
                    $country->delete();
                }
                return response()->json([
                    'success' => 'Record deleted successfully!'
                ]);
            } else {
                return response()->json([
                    'error' => 'NO Countries TO DELETE'
                ]);
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error Try Again !!');
        }
    }
}
