<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BrandRequest;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:tag-list|tag-create|tag-edit|tag-delete', ['only' => ['index','show']]);
        $this->middleware('permission:tag-create', ['only' => ['create','store']]);
        $this->middleware('permission:tag-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:tag-delete', ['only' => ['destroy' , 'delete_brands','delete_brand']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $brands = Brand::orderBy('id', 'desc')->get();
            return view('backend.brands.index',compact('brands'));
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
            return view('backend.brands.create');
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
    public function store(BrandRequest $request)
    {
        try {
            $brand = new Brand();
            $brand->name = $request->name;
            if (($request->file('image'))) {
                $file_name     = 'brand_image'.   rand(1, 15). rand(155, 200) . rand(25, 55). '.png';
                $request->image->storeAs('public/brands',$file_name);
                $brand->image = 'brands/'. $file_name;
            }
            $brand->save();
            return redirect()->route('brands.index')->with('done', 'Added Successfully ....');
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
            $brand = Brand::find($id);
            if(isset($brand)){
                return view('backend.brands.show' , compact('brand'));
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
        $brand = Brand::where('id', $id)->first();
        if (isset($brand)) {
            return view('backend.brands.edit', compact('brand'));
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
    public function update(BrandRequest $request, $id)
    {
        try {
            $brand = Brand::find($id);
            $brand->name = $request->name;
            if (($request->file('image'))) {
                @unlink('storage/' . $brand->image);
                $file_name     = 'brand_image'.   rand(1, 15). rand(155, 200) . rand(25, 55). '.png';
                $request->image->storeAs('public/brands',$file_name);
                $brand->image = 'brands/'. $file_name;
            }
            $brand->save();
            return redirect()->route('brands.index')->with('done', 'Edited Successfully ....');
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
            $brand = Brand::find($id);
            @unlink('storage/' . $brand->image);
            $brand->delete();
            return response()->json([
                'success' => 'Record deleted successfully!'
            ]);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error Try Again !!');
        }
    }
    public function delete_brands(Request $request)
    {
        try {
            $ids = $request->ids;
            $brands = Brand::whereIn('id',explode(",",$ids))->get();
            if (count($brands) > 0) {
                foreach ($brands as $brand) {
                    @unlink('storage/' . $brand->image);
                    $brand->delete();
                }
                return response()->json([
                    'success' => 'Record deleted successfully!'
                ]);
            } else {
                return response()->json([
                    'error' => 'NO Brands TO DELETE'
                ]);
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error Try Again !!');
        }
    }

    public function delete_brand($id)
    {
        try {
            $brand = Brand::find($id);
            @unlink('storage/' . $brand->image);
            $brand->delete();
            return redirect()->route('brands.index')->with('done', 'Deleted Successfully ....');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error Try Again !!');
        }
    }
}
