<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Attribute;
use App\Models\Category;
use App\Models\Translation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AttributeController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:attr-list|attr-create|attr-edit|attr-delete', ['only' => ['index','show']]);
        $this->middleware('permission:attr-create', ['only' => ['create','store']]);
        $this->middleware('permission:attr-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:attr-delete', ['only' => ['destroy' , 'delete_attributes']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try{
            $attributes = Attribute::orderBy('id' , 'desc')->get();
            return view('backend.attributes.index' , compact('attributes'));
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
            $categories = Category::whereNull('parent_id')->orWhere('parent_id' , '==' , 0)->get();
            return view('backend.attributes.create' , compact('categories'));
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
            $attribute = new Attribute();
            $attribute->name = $request->name_en;
            $attribute->save();
            if($request->name_ar){
                $translation_name = new Translation();
                $translation_name->table_name = 'attributes';
                $translation_name->column_name = 'name';
                $translation_name->foreign_key = $attribute->id;
                $translation_name->locale = 'ar';
                $translation_name->value = $request->name_ar;
                $translation_name->save();
            }
            if($request->category_ids){
                foreach ($request->category_ids as $cat_id){
                    DB::table('attribute_categories')->insert(
                        ['attribute_id' => $attribute->id, 'category_id' => $cat_id]
                    );
                }
            }
            return redirect()->route('attributes.index')->with('done' , 'Added Successfully....');
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
        $attribute = Attribute::find($id);
        if(isset($attribute)){
            $categories = Category::whereNull('parent_id')->orWhere('parent_id' , '==' , 0)->get();
            /* get selected categories */
            $cat_ids = [];
            $select_categories_ids = DB::table('attribute_categories')->where('attribute_id' , $id)->get();
            foreach ($select_categories_ids as $categories_id){
                array_push($cat_ids , $categories_id->category_id);
            }
            /* end get selected categories */
            $select_categories = Category::whereIn('id' , $cat_ids)->get();
            return view('backend.attributes.edit' , compact('categories' , 'attribute','select_categories'));
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
            $attribute = Attribute::find($id);
            $attribute->name = $request->name_en;
            $attribute->save();
            if($request->name_ar){
                $translation_name = Translation::where('table_name' , 'attributes')->where('column_name' , 'name')->
                where('foreign_key' , $id)->first();
                $translation_name->value = $request->name_ar;
                $translation_name->save();
            }
            if($request->category_ids){
                DB::table('attribute_categories')->where('attribute_id' , $id)->delete();
                foreach ($request->category_ids as $cat_id){
                    DB::table('attribute_categories')->insert(
                        ['attribute_id' => $attribute->id, 'category_id' => $cat_id]
                    );
                }
            }
            return redirect()->route('attributes.index')->with('done' , 'Edited Successfully....');
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
        try {
            $attribute = Attribute::find($id);
            DB::table('attribute_categories')->where('attribute_id' , $id)->delete();
            Translation::where('table_name' , 'attributes')->where('column_name' , 'name')->
            where('foreign_key' , $id)->delete();
            $attribute->delete();
            return response()->json([
                'success' => 'Record deleted successfully!'
            ]);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error Try Again !!');
        }
    }

    public function delete_attributes(Request $request)
    {
        try {
            $ids = $request->ids;
            $attributes = Attribute::whereIn('id',explode(",",$ids))->get();
            if (count($attributes) > 0) {
                foreach ($attributes as $attribute) {
                    DB::table('attribute_categories')->delete();
                    Translation::where('table_name' , 'attributes')->where('column_name' , 'name')->
                    where('foreign_key' , $attribute->id)->delete();
                    $attribute->delete();
                }
                return response()->json([
                    'success' => 'Record deleted successfully!'
                ]);
            } else {
                return response()->json([
                    'error' => 'NO Attributes TO DELETE'
                ]);
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error Try Again !!');
        }
    }
}
