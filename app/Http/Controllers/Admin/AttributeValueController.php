<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Attribute;
use App\Models\AttributeValue;
use App\Models\Translation;
use Illuminate\Http\Request;

class AttributeValueController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:attr-list|attr-create|attr-edit|attr-delete', ['only' => ['index','show']]);
        $this->middleware('permission:attr-create', ['only' => ['create','store']]);
        $this->middleware('permission:attr-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:attr-delete', ['only' => ['destroy' , 'delete_attr_values']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $values = AttributeValue::orderBy('id', 'desc')->get();
            return view('backend.attr_values.index',compact('values'));
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
            $attrs = Attribute::all();
            return view('backend.attr_values.create' , compact('attrs'));
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
            $value = new AttributeValue();
            $value->value = $request->value_en;
            $value->attribute_id = $request->attribute_id;
            $value->save();
            if($request->value_ar){
                $translation_name = new Translation();
                $translation_name->table_name = 'attribute_values';
                $translation_name->column_name = 'value';
                $translation_name->foreign_key = $value->id;
                $translation_name->locale = 'ar';
                $translation_name->value = $request->value_ar;
                $translation_name->save();
            }
            return redirect()->route('attr_values.index')->with('done', 'Added Successfully ....');
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
        $value = AttributeValue::find($id);
        if(isset($value)){
            $attrs = Attribute::all();
            return view('backend.attr_values.edit' , compact('value' , 'attrs' ));
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
            $value = AttributeValue::find($id);
            $value->value = $request->value_en;
            $value->attribute_id = $request->attribute_id;
            $value->save();
            if($request->value_ar){
                $translation_name = Translation::where('table_name' , 'attribute_values')->where('column_name' , 'value')->
                where('foreign_key' , $id)->first();
                $translation_name->value = $request->value_ar;
                $translation_name->save();
            }
            return redirect()->route('attr_values.index')->with('done' , 'Edited Successfully ....');
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
            $value = AttributeValue::find($id);
            Translation::where('table_name' , 'attribute_values')->where('column_name' , 'value')->
            where('foreign_key' , $id)->delete();
            $value->delete();
            return response()->json([
                'success' => 'Record deleted successfully!'
            ]);
        }catch(\Exception $e){
            return redirect()->back()->with('error', 'Error Try Again !!');
        }
    }

    public function delete_attr_values(Request $request)
    {
        try{
            $ids = $request->ids;
            $values = AttributeValue::whereIn('id',explode(",",$ids))->get();
            if(count($values) > 0){
                foreach ($values as $value){
                    Translation::where('table_name' , 'attribute_values')->where('column_name' , 'value')->
                    where('foreign_key' , $value->id)->delete();
                    $value->delete();
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
