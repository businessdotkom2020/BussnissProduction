<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Http\Requests\Admin\CategoryRequest;
use App\Models\Category;
use App\Models\Translation;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:category-list|category-create|category-edit|category-delete', ['only' => ['index','show' , 'tree']]);
        $this->middleware('permission:category-list', ['only' => ['index','show' , 'tree']]);
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
        try {
            $categories = Category::whereNull('parent_id')->orWhere('parent_id', '=', 0)->orderBy('id', 'desc')->get();
            return view('backend.categories.index',compact('categories'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error Try Again !!');
        }
    }

    public function tree()
    {
        try {
            $categories = Category::whereNull('parent_id')->orWhere('parent_id', '=', 0)->orderBy('id', 'desc')->get();
            return view('backend.categories.tree',compact('categories'));
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
            return view('backend.categories.create');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error Try Again !!');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        try {
            $category = new Category();
            $category->name = $request->name_en;
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
            return redirect()->route('categories.index')->with('done', 'Added Successfully ....');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error Try Again !!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        if (isset($category)) {
            return view('backend.categories.edit', compact('category'));
        } else {
            return redirect()->back()->with('error', 'Error Try Again !!');
        }

    }
    public function category_info($id)
    {
        $category = Category::find($id);
        if (isset($category)) {
            return view('backend.categories.info', compact('category'));
        } else {
            return redirect()->back()->with('error', 'Error Try Again !!');
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, $id)
    {
        try {
            $category = Category::find($id);
            $category->name = $request->name_en;
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
            return redirect()->route('categories.index')->with('done', 'Added Successfully ....');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error Try Again !!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $category = Category::find($id);
            @unlink('storage/' . $category->image);
            Translation::where('table_name' , 'categories')->where('column_name' , 'name')->
            where('foreign_key' , $id)->delete();
            $category->delete();
            return response()->json([
                'success' => 'Record deleted successfully!'
            ]);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error Try Again !!');
        }
    }

    public function delete_categories(Request $request)
    {
        try {
            $ids = $request->ids;
            $categories = Category::whereNull('parent_id')->whereIn('id',explode(",",$ids))->get();
            if (count($categories) > 0) {
                foreach ($categories as $category) {
                    @unlink('storage/' . $category->image);
                    Translation::where('table_name' , 'categories')->where('column_name' , 'name')->
                    where('foreign_key' , $category->id)->delete();
                    $category->delete();
                }
                return response()->json([
                    'success' => 'Record deleted successfully!'
                ]);
            } else {
                return response()->json([
                    'error' => 'NO EVENTS TO DELETE'
                ]);
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error Try Again !!');
        }
    }
}
