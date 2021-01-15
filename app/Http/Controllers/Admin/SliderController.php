<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:slider-list|slider-create|slider-edit|slider-delete', ['only' => ['index','show']]);
        $this->middleware('permission:slider-create', ['only' => ['create','store']]);
        $this->middleware('permission:slider-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:slider-delete', ['only' => ['destroy','delete_sliders']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $sliders = Slider::orderBy('id', 'desc')->get();
            return view('backend.sliders.index',compact('sliders'));
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
            $products = Product::all();
            $categories = Category::all();
            return view('backend.sliders.create' , compact('products' , 'categories'));
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
            $slider = new Slider();
            $slider->type = $request->type;
            if($request->kind == 1){
                $slider->category_id = $request->category_id;
                if(empty($request->category_id)){
                    return redirect()->back()->with('error', 'choose category');
                }
            }elseif($request->kind == 2){
                $slider->product_id = $request->product_id;
                if(empty($request->category_id)){
                    return redirect()->back()->with('error', 'choose product');
                }
            }
            if (($request->file('image'))) {
                $file_name     = 'slider_image'.   rand(1, 15). rand(155, 200) . rand(25, 55). '.png';
                $request->image->storeAs('public/sliders',$file_name);
                $slider->images = 'sliders/'. $file_name;
            }
            $slider->save();
            return redirect()->route('sliders.index')->with('done', 'Added Successfully ....');
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
        $slider = Slider::find($id);
        if(isset($slider)) {
            $products = Product::all();
            $categories = Category::all();
            return view('backend.sliders.edit' , compact('products' , 'categories','slider'));
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
    public function update(Request $request, $id)
    {
        try {
            $slider = Slider::find($id);
            $slider->type = $request->type;
            if($request->kind == 1){
                $slider->category_id = $request->category_id;
                $slider->product_id = null;
                if(empty($request->category_id)){
                    return redirect()->back()->with('error', 'choose category');
                }
            }elseif($request->kind == 2){
                $slider->product_id = $request->product_id;
                $slider->category_id = null;
                if(empty($request->category_id)){
                    return redirect()->back()->with('error', 'choose product');
                }
            }
            if (($request->file('image'))) {
                @unlink('storage/' . $slider->images);
                $file_name     = 'slider_image'.   rand(1, 15). rand(155, 200) . rand(25, 55). '.png';
                $request->image->storeAs('public/sliders',$file_name);
                $slider->images = 'sliders/'. $file_name;
            }
            $slider->save();
            return redirect()->route('sliders.index')->with('done', 'Edited Successfully ....');
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
            $slider = Slider::find($id);
            @unlink('storage/' . $slider->images);
            $slider->delete();
            return response()->json([
                'success' => 'Record deleted successfully!'
            ]);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error Try Again !!');
        }
    }
    public function delete_sliders(Request $request)
    {
        try {
            $ids = $request->ids;
            $sliders = Slider::whereIn('id',explode(",",$ids))->get();
            if (count($sliders) > 0) {
                foreach ($sliders as $slider) {
                    @unlink('storage/' . $slider->images);
                    $slider->delete();
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
