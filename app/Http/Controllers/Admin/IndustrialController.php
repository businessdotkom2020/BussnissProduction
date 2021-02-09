<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\IndustrialZones;
use App\Models\State;
use App\Models\Translation;
use Illuminate\Http\Request;

class IndustrialController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:zone-list|zone-create|zone-edit|zone-delete', ['only' => ['index','show']]);
        $this->middleware('permission:zone-create', ['only' => ['create','store']]);
        $this->middleware('permission:zone-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:zone-delete', ['only' => ['destroy','delete_zones','delete_zone']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $zones = IndustrialZones::orderBy('id', 'desc')->get();
            return view('backend.zones.index',compact('zones'));
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
            return view('backend.zones.create' , compact('countries'));
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
        try {
            $zone = new IndustrialZones();
            $zone->name = $request->name_en;
            $zone->state_id = $request->state_id;
            if (($request->file('image'))) {
                $file_name     = 'industrial_zone_image'.   rand(1, 15). rand(155, 200) . rand(25, 55). '.png';
                $request->image->storeAs('public/industrial_zones',$file_name);
                $zone->image = 'industrial_zones/'. $file_name;
            }
            $zone->save();
            if($request->name_ar){
                $translation_name = new Translation();
                $translation_name->table_name = 'industrial_zones';
                $translation_name->column_name = 'name';
                $translation_name->foreign_key = $zone->id;
                $translation_name->locale = 'ar';
                $translation_name->value = $request->name_ar;
                $translation_name->save();
            }
            return redirect()->route('zones.index')->with('done', 'Added Successfully ....');
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
            $zone = IndustrialZones::find($id);
            if(isset($zone)){
                return view('backend.zones.show' , compact('zone'));
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
        $zone = IndustrialZones::find($id);
        if(isset($zone)){
            $countries = Country::all();
            $states = State::all();
            return view('backend.zones.edit' , compact('zone' , 'countries' , 'states'));
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
    public function update(Request $request, $id)
    {
        try{
            $zone = IndustrialZones::find($id);
            $zone->name = $request->name_en;
            $zone->state_id = $request->state_id;
            if (($request->file('image'))) {
                @unlink('storage/' . $zone->image);
                $file_name     = 'industrial_zone_image'.   rand(1, 15). rand(155, 200) . rand(25, 55). '.png';
                $request->image->storeAs('public/industrial_zones',$file_name);
                $zone->image = 'industrial_zones/'. $file_name;
            }
            $zone->save();
            if($request->name_ar){
                $translation_name = Translation::where('table_name' , 'industrial_zones')->where('column_name' , 'name')->
                where('foreign_key' , $id)->first();
                $translation_name->value = $request->name_ar;
                $translation_name->save();
            }
            return redirect()->route('zones.index')->with('done' , 'Edited Successfully ....');
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
            $zone = IndustrialZones::find($id);
            @unlink('storage/' . $zone->image);
            Translation::where('table_name' , 'industrial_zones')->where('column_name' , 'name')->
            where('foreign_key' , $id)->delete();
            $zone->delete();
            return response()->json([
                'success' => 'Record deleted successfully!'
            ]);
        }catch(\Exception $e){
            return redirect()->back()->with('error', 'Error Try Again !!');
        }
    }

    public function delete_zones(Request $request)
    {
        try{
            $ids = $request->ids;
            $zones = IndustrialZones::whereIn('id',explode(",",$ids))->get();
            if(count($zones) > 0){
                foreach ($zones as $zone){
                    @unlink('storage/' . $zone->image);
                    Translation::where('table_name' , 'industrial_zones')->where('column_name' , 'name')->
                    where('foreign_key' , $zone->id)->delete();
                    $zone->delete();
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

    public function delete_zone($id)
    {
        try{
            $zone = IndustrialZones::find($id);
            @unlink('storage/' . $zone->image);
            Translation::where('table_name' , 'industrial_zones')->where('column_name' , 'name')->
            where('foreign_key' , $id)->delete();
            $zone->delete();
            return redirect()->route('zones.index')->with('done' , 'Deleted Successfully ....');
        }catch(\Exception $e){
            return redirect()->back()->with('error', 'Error Try Again !!');
        }
    }
}
