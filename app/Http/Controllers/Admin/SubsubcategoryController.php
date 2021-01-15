<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SubcategoryRequest;
use App\Models\Category;
use App\Models\Translation;
use Illuminate\Http\Request;

class SubsubcategoryController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:category-list|category-create|category-edit|category-delete', ['only' => ['index','show']]);
        $this->middleware('permission:category-list', ['only' => ['index','show']]);
        $this->middleware('permission:category-create', ['only' => ['create','store']]);
        $this->middleware('permission:category-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:category-delete', ['only' => ['destroy' , 'delete_categories']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try{
            $cats = Category::whereNull('parent_id')->get();
            $subcategories_ids =[];
            foreach($cats as $cat){
                foreach ($cat->children as $child){
                    array_push($subcategories_ids , $child->id);
                }
            }
            $categs = Category::whereIn('id' , $subcategories_ids)->orderBy('id' , 'desc')->get();
            $subsubcategories_ids = [];
            foreach ($categs as $subcat){
                foreach ($subcat->children as $subsub){
                    array_push($subsubcategories_ids , $subsub->id);
                }
            }
            $categories = \App\Models\Category::whereIn('id' , $subsubcategories_ids)->orderBy('id' , 'desc')->get();
            return view('backend.subsubcategories.index' , compact('categories'));
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
            $parents = Category::get();
            return view('backend.subsubcategories.create' , compact('parents'));
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
    public function store(SubcategoryRequest $request)
    {
        try{
            $category = new Category();
            $category->name = $request->name_en;
            $category->parent_id = $request->parent_id;
            if (($request->file('image'))) {
                $file_name     = 'category_image'.   rand(1, 15). rand(155, 200) . rand(25, 55). '.png';
                $request->image->storeAs('public/categories',$file_name);
                $category->image = 'categories/'. $file_name;
            }
            $category->save();
            if($request->name_ar){
                $translation_name = new Translation();
                $translation_name->table_name = 'categories';
                $translation_name->column_name = 'name';
                $translation_name->foreign_key = $category->id;
                $translation_name->locale = 'ar';
                $translation_name->value = $request->name_ar;
                $translation_name->save();
            }
            return redirect()->route('subsubcategories.index')->with('done' , 'Added Successfully....');
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
        $category = Category::where('id' , $id)->first();
        if(isset($category)){
            $parents = Category::all();
            return view('backend.subsubcategories.edit' , compact('category' , 'parents'));
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
    public function update(SubcategoryRequest $request, $id)
    {
        try{
            $category = Category::find($id);
            $category->name = $request->name_en;
            $category->parent_id = $request->parent_id;
            if (($request->file('image'))) {
                @unlink('storage/' . $category->image);
                $file_name     = 'category_image'.   rand(1, 15). rand(155, 200) . rand(25, 55). '.png';
                $request->image->storeAs('public/categories',$file_name);
                $category->image = 'categories/'. $file_name;
            }
            $category->save();
            if($request->name_ar){
                $translation_name = Translation::where('table_name' , 'categories')->where('column_name' , 'name')->
                where('foreign_key' , $id)->first();
                $translation_name->value = $request->name_ar;
                $translation_name->save();
            }
            return redirect()->route('subsubcategories.index')->with('done' , 'Edited Successfully....');
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
            $category = Category::find($id);
            @unlink('storage/' . $category->image);
            Translation::where('table_name' , 'categories')->where('column_name' , 'name')->
            where('foreign_key' , $id)->delete();
            $category->delete();
            return response()->json([
                'success' => 'Record deleted successfully!'
            ]);
        }catch(\Exception $e){
            return redirect()->back()->with('error' , 'Error Try Again....');
        }

    }

    public function delete_categories(Request $request)
    {
        try{
            $ids = $request->ids;
            $categories = Category::whereNotNull('parent_id')->whereIn('id',explode(",",$ids))->get();
            if(count($categories) > 0){
                foreach ($categories as $category) {
                    @unlink('storage/' . $category->image);
                    Translation::where('table_name' , 'categories')->where('column_name' , 'name')->
                    where('foreign_key' , $category->id)->delete();
                    $category->delete();
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
