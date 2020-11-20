<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\{
    Attribute, Brand, Category, Product, ProductAttribute, ProductPrice, Tag, User, Translation
};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:product-list|product-create|product-edit|product-delete', ['only' => ['index','show']]);
        $this->middleware('permission:product-create', ['only' => ['create','store']]);
        $this->middleware('permission:product-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:product-delete', ['only' => ['destroy' ,'delete_prodectss']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $products = Product::orderBy('id', 'desc')->get();
            return view('backend.products.index',compact('products'));
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
            $brands = Brand::all();
            $tags = Tag::all();
            $users = User::whereNotNull('state_id')->get();
            $attribtes = Attribute::all();
            return view('backend.products.create' , compact('users' , 'categories' ,'brands' , 'tags' ,
                'attribtes'));
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
            $lang = \Config::get('voyager.multilingual')['locales'];
            $lang = array_values(array_diff($lang, array(\Config::get('voyager.multilingual')['default'])));
            $langs = [];
            $product = new Product();
            $product->name = $request->name_en;
            $product->user_id = $request->user_id;
            $product->description = $request->description_en;
            $product->price = $request->price;
            $product->sale_price = $request->sale_price;
            $product->tag_id = $request->material_id;
            $product->category_id = $request->category_id;
            $product->brand_id = $request->brand_id;
            $product->product_condition = $request->product_condition;
            $images = array();
            if (is_array($request->file('images'))) {
                foreach ($request->file('images') as $image) {
                    $file_name     = 'product_image'.   rand(1, 15). rand(155, 200) . rand(25, 55). '.png';
                    $image->storeAs('public/products',$file_name);
                    $img_url = 'products/'. $file_name;
                    array_push($images, $img_url);
                }
            }
            $product->images = json_encode($images);
            if (($request->file('image'))) {
                $file_name     = 'product_image'.   rand(1, 15). rand(155, 200) . rand(25, 55). '.png';
                $request->image->storeAs('public/products',$file_name);
                $product->image = 'products/'. $file_name;
            }
            $product->save();
            $product->categories()->attach(Request()->category_ids);
            $price_list = [];
            $price_list = $request->prices;
            foreach($price_list as $price){
                $price_option = new ProductPrice();
                $price_option->product_id = $product->id;
                $price_option->price = $price['price'];
                $price_option->quantity_from = $price['quantity_from'];
                $price_option->quantity_to = $price['quantity_to'];
                $price_option->save();
            }
            $attributes = [];
            $attributes = $request->options;
            foreach($attributes as $attribute){
                $attribute_id =   $attribute['attribute_id'];
                $values_id =   $attribute['values_id'];
                $attribute = new ProductAttribute();
                $attribute->product_id = $product->id;
                $attribute->attribute_id = $attribute_id;
                $attribute->value_id = $values_id;
                $attribute->save();

            }
            if($request->name_ar){
                $translation_name = new Translation();
                $translation_name->table_name = 'products';
                $translation_name->column_name = 'name';
                $translation_name->foreign_key = $product->id;
                $translation_name->locale = 'ar';
                $translation_name->value = $request->name_ar;
                $translation_name->save();
            }
            if($request->description_ar){
                $translation_description = new Translation();
                $translation_description->table_name = 'products';
                $translation_description->column_name = 'description';
                $translation_description->foreign_key = $product->id;
                $translation_description->locale = 'ar';
                $translation_description->value = $request->description_ar;
                $translation_description->save();
            }
            return redirect()->route('productss.index')->with('done', 'Added Successfully ....');
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
        try {
            $product = Product::find($id);
            $categories = Category::whereNull('parent_id')->get();
            $brands = Brand::all();
            $tags = Tag::all();
            $users = User::whereNotNull('state_id')->get();
            $attribtes = Attribute::all();
            return view('backend.products.edit' , compact('users' , 'categories' ,'brands' , 'tags' ,
                'attribtes','product'));
        } catch (\Exception $e) {
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
            $lang = \Config::get('voyager.multilingual')['locales'];
            $lang = array_values(array_diff($lang, array(\Config::get('voyager.multilingual')['default'])));
            $langs = [];
            $product = Product::find($id);
            $product->name = $request->name_en;
            $product->user_id = $request->user_id;
            $product->description = $request->description_en;
            $product->price = $request->price;
            $product->sale_price = $request->sale_price;
            $product->tag_id = $request->material_id;
            $product->category_id = $request->category_id;
            $product->brand_id = $request->brand_id;
            $product->product_condition = $request->product_condition;
            $images = array();
            if ($request->file('images')) {
                foreach (json_decode($product->images) as $img){
                    @unlink('storage/' . $img);
                }
                $product->images = null;
                foreach ($request->file('images') as $image) {
                    $file_name     = 'product_image'.   rand(1, 15). rand(155, 200) . rand(25, 55). '.png';
                    $image->storeAs('public/products',$file_name);
                    $img_url = 'products/'. $file_name;
                    array_push($images, $img_url);
                }
                $product->images = json_encode($images);
            }
            if (($request->file('image'))) {
                @unlink('storage/' . $product->image);
                $file_name     = 'product_image'.   rand(1, 15). rand(155, 200) . rand(25, 55). '.png';
                $request->image->storeAs('public/products',$file_name);
                $product->image = 'products/'. $file_name;
            }
            $product->save();
            $product->categories()->attach(Request()->category_ids);
            $price_list = [];
            $price_list = $request->prices;
            foreach($price_list as $price){
                $old_price_options = ProductPrice::where('product_id' , $id)->get();
                foreach ($old_price_options as $old_price_option){
                    $old_price_option->delete();
                }
                $price_option = new ProductPrice();
                $price_option->product_id = $product->id;
                $price_option->price = $price['price'];
                $price_option->quantity_from = $price['quantity_from'];
                $price_option->quantity_to = $price['quantity_to'];
                $price_option->save();
            }
            $attributes = [];
            $attributes = $request->options;
            foreach($attributes as $attribute){
                $attribute_options = ProductAttribute::where('product_id' , $id)->get();
                foreach ($attribute_options as $attribute_option){
                    $attribute_option->delete();
                }
                $attribute_id =   $attribute['attribute_id'];
                $values_id =   $attribute['values_id'];
                $attribute = new ProductAttribute();
                $attribute->product_id = $product->id;
                $attribute->attribute_id = $attribute_id;
                $attribute->value_id = $values_id;
                $attribute->save();

            }
            if($request->name_ar){
                $translation_name = Translation::where('table_name' , 'products')->where('column_name' , 'name')->
                where('foreign_key' , $id)->first();
                $translation_name->value = $request->name_ar;
                $translation_name->save();
            }
            if($request->description_ar){
                $translation_description = Translation::where('table_name' , 'products')->where('column_name' , 'description')->
                where('foreign_key' , $id)->first();
                $translation_description->value = $request->description_ar;
                $translation_description->save();
            }
            return redirect()->route('productss.index')->with('done', 'Edited Successfully ....');
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
            $product = Product::find($id);

            Translation::where('table_name' , 'products')->where('column_name' , 'name')->
            where('foreign_key' , $id)->delete();
            Translation::where('table_name' , 'products')->where('column_name' , 'description')->
            where('foreign_key' , $id)->delete();
            $old_price_options = ProductPrice::where('product_id' , $id)->get();
            foreach ($old_price_options as $old_price_option){
                $old_price_option->delete();
            }
            $attribute_options = ProductAttribute::where('product_id' , $id)->get();
            foreach ($attribute_options as $attribute_option){
                $attribute_option->delete();
            }
            foreach (json_decode($product->images) as $img){
                @unlink('storage/' . $img);
            }
            @unlink('storage/' . $product->image);

            $product->delete();
            return response()->json([
                'success' => 'Record deleted successfully!'
            ]);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error Try Again !!');
        }
    }
    public function delete_prodectss()
    {
        try {
            $products = Product::all();
            if (count($products) > 0) {
                foreach ($products as $product) {

                    Translation::where('table_name' , 'products')->where('column_name' , 'name')->
                    where('foreign_key' , $product->id)->delete();
                    Translation::where('table_name' , 'products')->where('column_name' , 'description')->
                    where('foreign_key' , $product->id)->delete();
                    $old_price_options = ProductPrice::where('product_id' , $product->id)->get();
                    foreach ($old_price_options as $old_price_option){
                        $old_price_option->delete();
                    }
                    $attribute_options = ProductAttribute::where('product_id' , $product->id)->get();
                    foreach ($attribute_options as $attribute_option){
                        $attribute_option->delete();
                    }
                    foreach (json_decode($product->images) as $img){
                        @unlink('storage/' . $img);
                    }
                    @unlink('storage/' . $product->image);

                    $product->delete();
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
