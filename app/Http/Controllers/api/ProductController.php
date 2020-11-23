<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductIndexResource;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\attributesValuesResource;
use App\Http\Resources\TagsResource;
use App\Http\Resources\MainCategoryResource;
use App\Http\Resources\ProductupdateResource;

use App\Http\Resources\AuthCategoriesResource;
use App\Http\Resources\attributesResource;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use App\Models\Tag;
use App\Models\User;
use App\Models\ProductPrice;
use App\Models\Attribute;
use App\Models\AttributeValue;
use App\Models\Category;
use App\Scoping\Scopes\CategoryScope;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\imageRequest;
use App\Http\Requests\EditRequest;
use App\Http\Resources\collections\ProductIndexCollection;
use App\Http\Resources\collections\TagsCollection;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth:api'])->only('store');
    }

    public function offers()
    {

        return response()->json([
            'status' => true,
            'code' => 200,

    'data' => MainCategoryResource::collection(Category::with('children')->whereHas('children.products', function ($query)  {
    $query->where('sale_price', '!=', null);
})->get()
),
    'top-suppliers' => [['id' => 1 , 'name'=> 'Dell','logo' => 'https://i.imgur.com/6Li4KwM.png' , 'stars' => 4],['id' => 2 ,'name' => 'Nike','logo'=> 'https://i.imgur.com/FAlNOQ3.jpg','stars' => 3]],
    'slider' => [
        'https://i.imgur.com/lb2nq43.jpg',
        'https://i.imgur.com/lb2nq43.jpg',
        ]
]);

    }
    public function used()
    {

        return response()->json([
            'status' => true,
            'code' => 200,

    'data' => MainCategoryResource::collection(Category::where('id',1)->get()
),
    'top-suppliers' => [['id' => 1 , 'name'=> 'Dell','logo' => 'https://i.imgur.com/6Li4KwM.png' , 'stars' => 4],['id' => 2 ,'name' => 'Nike','logo'=> 'https://i.imgur.com/FAlNOQ3.jpg','stars' => 3]],
    'slider' => [
        'https://i.imgur.com/lb2nq43.jpg',
        'https://i.imgur.com/lb2nq43.jpg',
        ]
]);

    }
    public function category_info($id)
    {

        return response()->json([

    'top-suppliers' => [['id' => 1 , 'name'=> 'Dell','logo' => 'https://i.imgur.com/6Li4KwM.png' , 'stars' => 4],['id' => 2 ,'name' => 'Nike','logo'=> 'https://i.imgur.com/FAlNOQ3.jpg','stars' => 3]],
    'slider' => [
        'https://i.imgur.com/lb2nq43.jpg',
        'https://i.imgur.com/lb2nq43.jpg',
        ]
]);

    }

    public function index()
    {
        $products = Product::withScopes($this->scopes())->paginate(10);

        return ProductIndexResource::collection(
            $products
        );
    }
    public function store_products()
    {

        $sortprice = request()->sortprice == "highest" ? "DESC": "ASC"  ;
        $sortdate = request()->sortdate == "latest" ? "DESC": "ASC"  ;

        $products = Product::where('user_id',Request()->user()->id)->orderBy('price', $sortprice)->orderBy('created_at', $sortdate)->paginate(10);

        return ProductIndexResource::collection(
            $products
        );
    }


   public function suggested_supplier()
    {
        $products = Product::limit(10)->get();

        return ProductIndexResource::collection(
            $products
        );
    }
   public function suggested_category()
    {
        $products = Product::limit(10)->get();

        return ProductIndexResource::collection(
            $products
        );
    }


    public function show($id)
    {

        return new ProductResource(
            Product::find($id)
        );
    }

    public function factory_tags($id)
    {
       return   new TagsCollection(Tag::whereHas('products' , function($q) use($id){
            $q->where('user_id', $id);
        })
        ->get())  ;
            //     ->concat([
            // 'data' => [
            //     'id' => 0 ,
            //     'name' => 'Recent Products' ,
            //     'products' => ProductIndexResource::collection(Product::where('user_id',$id)->limit(10)->get()) ,

            //     ]
            // ])


        // return response()->json([
        //     'data' => [
        //         'id' => 0 ,
        //         'name' => 'Recent Products' ,
        //         'products' => ProductIndexResource::collection(Product::where('user_id',$id)->limit(10)->get()) ,
        //         $tags
        //         ]
        //     ]);




    }
    public function factory_tag($id,$tag_id)
    {
        return new ProductIndexCollection(Product::where([['tag_id',$tag_id],['user_id',$id]])->paginate(10));
    }
    public function factory_used($id)
    {
                $sortprice = request()->sortprice == "highest" ? "DESC": "ASC"  ;
        $sortdate = request()->sortdate == "latest" ? "DESC": "ASC"  ;
        return ProductIndexResource::collection(Product::orderBy('price', $sortprice)->orderBy('created_at', $sortdate)->get());

    }

    public function factory_categories($id)
    {
        return AuthCategoriesResource::collection(User::with('categories')->find($id)->categories);
    }

    public function factory_categories_products($factory_id,$category_id)
    {
        return ProductIndexResource::collection(Product::where('category_id',$category_id)->paginate(10));
    }

    public function available_languages(){
         $lang = \Config::get('voyager.multilingual')['locales'];
        return $lang = array_values(array_diff($lang, array(\Config::get('voyager.multilingual')['default'])));

    }



            public function store_images( imageRequest $request){

        $product= Product::find(Request()->product_id);



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
                    $image->storeAs('public/products',$file_name);
                    $product->image = 'products/'. $file_name;
			}

        $product->save();

return response()->json([
    "status" => "success",
    "message" => "Product Created",


    ]);
    }
    public function update_images($product_id,Request $request){

        $product= Product::find($product_id);


         $images = json_decode($product->images);

      if(request()->deleted_images){
          $deleted_images = request()->deleted_images;

            foreach($images as $image){
                if(!in_array($image,$deleted_images)){
                    $new_images[] = $image;
                }
            }


$images =  $new_images;


    }
if(!$images)
    $images = [];

			if (is_array($request->file('images'))) {

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

return response()->json([
    "status" => "success",
    "message" => "Product Images Updated",


    ]);
    }


    public function store(Request $request)
    {

        // return request()->all();
         $lang = \Config::get('voyager.multilingual')['locales'];
         $lang = array_values(array_diff($lang, array(\Config::get('voyager.multilingual')['default'])));

        $langs = [];


         $product = new Product;

         $product->name = $request->name;
         $product->user_id = Request()->user()->id;
         $product->description = $request->description;
         $product->price = $request->price;
         $product->sale_price = $request->sale_price;
         $product->tag_id = $request->tag_id;
         $product->category_id = $request->category_id;
         $product->brand_id = $request->brand_id;

         $product->product_condition = $request->product_condition;



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
return response()->json([
    "status" => "success",
        "product_id" => $product->id

    ]);
    }
    public function update_product(Request $request,$product_id)
    {

        // return request()->all();
         $lang = \Config::get('voyager.multilingual')['locales'];
         $lang = array_values(array_diff($lang, array(\Config::get('voyager.multilingual')['default'])));

        $langs = [];


         $product =  Product::find($product_id);

         $product->name = $request->name;
         $product->user_id = Request()->user()->id;
         $product->description = $request->description;
         $product->price = $request->price;
         $product->sale_price = $request->sale_price;
         $product->tag_id = $request->tag_id;
         $product->category_id = $request->category_id;
         $product->brand_id = $request->brand_id;

         $product->product_condition = $request->product_condition;



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
return response()->json([
    "status" => "success",
        "product_id" => $product->id

    ]);




    }




    public function update_product_get($product_id){

                $lang = \Config::get('voyager.multilingual')['locales'];
         $lang = array_values(array_diff($lang, array(\Config::get('voyager.multilingual')['default'])));





          return new ProductupdateResource(
            Product::withTranslations($lang)->find($product_id)
        );

    }


    protected function attributes()
    {
                return  attributesResource::collection(
            Attribute::get()
        );
    }
    protected function attributes_by_category($id)
    {
                return  attributesResource::collection(
            Attribute::whereHas('categories', function ($query) use($id) {
    $query->where('id', $id);
})->get()
        );
    }
    protected function attribute_values($id)
    {
                return  attributesValuesResource::collection(
            AttributeValue::where('attribute_id',$id)->get()
        );
    }




        public function destroy($id){
                 $product =  Product::find($id) ;

                 if(!$product)
                        return response()->json(['status' => 'failed', 'message' => 'not fond']);
            $product->delete();

        return response()->json([
            'status' => "success",
             "message" => "product Deleted successfully"

            ]) ;

    }

}
