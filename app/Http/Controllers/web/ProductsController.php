<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterUsersRequest;
use App\Models\{User,Product,ProductPrice};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use Lang;
use DB;

class ProductsController extends Controller
{
    public function show($product_id){

         $product =  Product::with('options')->find($product_id);

         $related_products = Product::where([['category_id',$product->category_id],['id','!=',$product->id]])->get();
         $related__store_products = Product::where([['user_id',$product->user_id],['id','!=',$product->id]])->get();
        return view('products.show',compact('product','related_products','related__store_products','product_id'));
    }



    public function edit($product_id){
        $lang = \Config::get('voyager.multilingual')['locales'];
        $lang = array_values(array_diff($lang, array(\Config::get('voyager.multilingual')['default'])));


         $product =  Product::with('options')->find($product_id);

         $related_products = Product::where([['category_id',$product->category_id],['id','!=',$product->id]])->get();
         $related__store_products = Product::where([['user_id',$product->user_id],['id','!=',$product->id]])->get();
        return view('products.edit',compact('product','related_products','related__store_products','product_id','lang'));
    }

    public function latest_products(){
        $keyword = "Latest Products";
        $category = "";
        $products = Product::latest()->paginate(12);

        return view('products.index_group',compact('keyword','category','products'));
    }
    public function most_common(){

        $keyword = "Most Common";
        $category = "";
        $products = Product::orderBy('name','asc')->paginate(12);

        return view('products.index_group',compact('keyword','category','products'));
    }

    public function best_selling(){

        $keyword = "Best Selling";
        $category = "";
        $products = Product::orderBy('name','desc')->paginate(12);

        return view('products.index_group',compact('keyword','category','products'));
    }

    public function create(){
        return view('products.create');
    }

    //For fetching states

public function getValues($attribute_id)
{
    $values = \DB::table("attribute_values")->where("attribute_id",$attribute_id)->pluck("value","id");
    return response()->json($values);
}


public function getSubCategory($category_id)
{
    $sub_categories = \DB::table("categories")->where("parent_id",$category_id)->pluck("name","id");
    return response()->json($sub_categories);
}


    //For fetching states
public function getSubSubCategory($sub_category_id)
{
    $sub_categories = \DB::table("categories")->where("parent_id",$sub_category_id)->pluck("name","id");
    return response()->json($sub_categories);
}


    public function favorite(){

        if(!Request()->user())
                 return response()->json([
             "status" => true,
             "message" => trans('general.login_first')
             ]);


         $product = Product::find(Request()->product_id);

            if(!$product)
              return response()->json([ "status" => "failed", "mesage" => "product not found" ],401);

                $product->favorite();

    $favorite_model = \App\Models\Favorite::where([['favorited_id',Request()->product_id],['user_id',Request()->user()->id],['favorited_type','App\Models\Product']])->first();
 if($favorite_model){
        $mesage =     trans('general.added_product_to_favorite');

 }
 else{
        $mesage =     trans('general.removed_product_from_favorite');


 }

         return response()->json([
             "status" => true,
             "class" => 'fav-active',
             "message" => $mesage
             ]);
    }


    public function delete($product_id)
{
                 $product =  Product::find($product_id) ;

                 if(!$product || $product->user_id != \Auth::id() )
                        return response()->json(['status' => 'failed', 'message' => 'not fond']);
            $product->delete();

     Alert::toast('Product Deleted Successfully', 'success');

      return redirect()->back();

}



    public function store(Request $request)
    {

        // return request()->all();
         $lang = \Config::get('voyager.multilingual')['locales'];
         $lang = array_values(array_diff($lang, array(\Config::get('voyager.multilingual')['default'])));

        $langs = [];


         $product = new Product;

         $product->name = $request->name_en;
         $product->user_id = Request()->user()->id;
         $product->description = $request->description_en;
         $product->price = $request->price;
         $product->sale_price = $request->sale_price;
         $product->tag_id = $request->tag_id;
         $product->category_id = $request->category_id;
         $product->brand_id = $request->brand_id;

         $product->product_condition = $request->product_condition;


                           		$images = array();
		/**
		 * check if images come as array then loop the images to save them
		 */

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
         $price_option = new ProductPrice;
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
             $attribute = new \App\Models\ProductAttribute;
             $attribute->product_id = $product->id;
             $attribute->attribute_id = $attribute_id;
             $attribute->value_id = $values_id;
             $attribute->save();

     }


            foreach($lang as $lang_option)  {
          $name_lang_option = "name_" . $lang_option;
          $description_lang_option = "description_" . $lang_option;
           if(request()->$name_lang_option){
              DB::table('translations')->updateOrInsert(
    ['table_name' => 'products', 'column_name' => "name" , "foreign_key"=> $product->id , "locale" => $lang_option ],[ "value" => request()->$name_lang_option]
);

           }
           if( request()->$description_lang_option){
              DB::table('translations')->updateOrInsert(
    ['table_name' => 'products', 'column_name' => "description" , "foreign_key"=> $product->id , "locale" => $lang_option ],
    ["value" => request()->$description_lang_option]

);
           }
       }



                Alert::toast('Product Added Successfully', 'success');
                return redirect('/product/'.$product->id);


    }


    public function update_product(Request $request,$product_id)
    {
          request()->all();
         $lang = \Config::get('voyager.multilingual')['locales'];
            $lang = array_values(array_diff($lang, array(\Config::get('voyager.multilingual')['default'])));

        $langs = [];


         $product =  Product::find($product_id);

         $product->name = $request->name_en;
         $product->user_id = Request()->user()->id;
         $product->description = $request->description_en;
         $product->price = $request->price;
         $product->sale_price = $request->sale_price;
         $product->tag_id = $request->tag_id;
         $product->category_id = $request->category_id;
         $product->brand_id = $request->brand_id;

         $product->product_condition = $request->product_condition;









               if ($request->images) {
$images =[];

                foreach ($request->images as $image) {
                    if(is_string($image))
                    array_push($images, $image);
                }

                foreach ($request->file('images') as $image) {
                       $file_name     = 'product_image'.   rand(1, 15). rand(155, 200) . rand(25, 55). '.png';
                       $image->storeAs('public/products',$file_name);
                       $img_url = 'products/'. $file_name;
                       array_push($images, $img_url);
                   }

               }


           $product->images = json_encode($images);




               if ($image = ($request->file('image'))) {

                       $file_name     = 'product_image'.   rand(1, 15). rand(155, 200) . rand(25, 55). '.png';
                       $image->storeAs('public/products',$file_name);
                       $product->image = 'products/'. $file_name;
               }




        $product->update();



    ProductPrice::where('product_id',$product_id)->delete();

     $price_list = [];
     $price_list = $request->prices;

     foreach($price_list as $price){
         $price_option = new ProductPrice;
         $price_option->product_id = $product->id;
         $price_option->price = $price['price'];
         $price_option->quantity_from = $price['quantity_from'];
         $price_option->quantity_to = $price['quantity_to'];
         $price_option->save();
     }

          $attributes = [];
     $attributes = $request->options;


    \App\Models\ProductAttribute::where('product_id',$product_id)->delete();

     foreach($attributes as $attribute){
         $attribute_id =   $attribute['attribute_id'];
         $values_id =   $attribute['values_id'];
             $attribute = new \App\Models\ProductAttribute;
             $attribute->product_id = $product->id;
             $attribute->attribute_id = $attribute_id;
             $attribute->value_id = $values_id;
             $attribute->save();

     }


            foreach($lang as $lang_option)  {
          $name_lang_option = "name_" . $lang_option;
          $description_lang_option = "description_" . $lang_option;
           if(request()->$name_lang_option){

              DB::table('translations')->updateOrInsert(
    ['table_name' => 'products', 'column_name' => "name" , "foreign_key"=> $product->id , "locale" => $lang_option ],[ "value" => request()->$name_lang_option]
);

           }
           if( request()->$description_lang_option){
              DB::table('translations')->updateOrInsert(
    ['table_name' => 'products', 'column_name' => "description" , "foreign_key"=> $product->id , "locale" => $lang_option ],
    ["value" => request()->$description_lang_option]

);
           }
       }


       Alert::toast('Product Updated Successfully', 'success');

       return redirect()->back();



    }





}
