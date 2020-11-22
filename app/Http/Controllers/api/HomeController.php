<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Models\User;
use App\Models\Category;
use App\Models\Service;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Resources\TagsResource;
use App\Http\Resources\ParentCategoryResource;
use App\Http\Resources\MainCategoryResource;
use App\Http\Resources\ServicesIndexResource;
use App\Http\Resources\HomeTagsResource;
use App\Http\Resources\CategoryProductsResource;
use App\Http\Resources\CompaniesResource;
use App\Http\Resources\ProductIndexResource;
use App\Http\Resources\StoreResource;
use App\Http\Resources\AuthCategoriesResource;
use App\Http\Resources\collections\AuthCategoriesCollection;
use App\Http\Resources\collections\ProductIndexCollection;
use App\Http\Resources\collections\ServicesIndexCollection;
use App\Http\Resources\collections\StoreCollection;

class HomeController extends Controller
{
   public function services_categories(){
               		$categories =  Category::whereNull('parent_id')
               		    ->whereHas('services')
               		->select('id','name')->get();
               		return new AuthCategoriesCollection($categories);


   }

   public function services_categories_show($id){
               return  new ServicesIndexCollection(Service::where('category_id',$id)->with('category')->paginate(10));

   }

public function tag($tag_id){
            return  ProductIndexResource::collection(Product::where('tag_id',$tag_id)->paginate(10));

}

       public function home(){
        return response()->json([
            'status' => true,
            'code' => 200,

            'data'=>HomeTagsResource::collection(\App\Models\Tag::with('products')->get()),
        //   ->concat([
        //                 'data' => [
        //                     'id' => 9999,
        //                     'name' => 'Hot Offers',
        //                     'image' => 'http://businessdotkom.com/storage/categories/January2020/1o6nDi1kjVuwje5FiFXv.png',
        //                     'products' => ProductIndexResource::collection(Product::whereNotNull('sale_price')->get()),
        //                 ]
        //             ])
                        
        'slider' => [
                'https://i.imgur.com/h3MotVF.jpg',
                'https://i.imgur.com/h3MotVF.jpg',
                ]
                        
 
                    ])
                    ;
    }

    public function hot_offers_suppliers(){

        return  new StoreCollection(

         User::with(["products" => function($q){
               $q->where('sale_price', '!=', null);
            }])

            ->whereHas('products', function ($query)  {
            $query->where('sale_price', '!=', null);
        })
        ->paginate(10)
    );
    }
    public function hot_offers_companies(){

        return  CompaniesResource::collection(

         User::with(["products" => function($q){
               $q->where('sale_price', '!=', null);
            }])

            ->whereHas('products', function ($query)  {
            $query->where('sale_price', '!=', null);
        })->paginate(10)
    );
    }

    public function filter(Request $request){
        $sortprice = request()->sortprice == "highest" ? "DESC": "ASC"  ;
        $sortdate = request()->sortdate == "latest" ? "DESC": "ASC"  ;

        $products = Product::orderBy('price', $sortprice)->orderBy('created_at', $sortdate);






        if ($request->has('category_ids')) {
            $categories_ids = Category::whereIn('parent_id',$request->category_ids)->get()->pluck('id');
            $sub_categories_ids =  Category::whereIn('parent_id',$categories_ids)->get()->pluck('id');
            $products->whereIn('category_id',$sub_categories_ids);
        }

        if ($request->has('product_rating')) {
            foreach($products as $product){
                if((int)$product->reviews()->average('stars') >= $request->product_rating){
                    $products = $product;
                }
            }


        }

        if ($request->has('brand_ids')) {
            $products->whereIn('brand_id', $request->brand_ids);
        }
        if ($request->has('min_price')) {
            $products->where('price','>=', $request->min_price);
        }
        if ($request->has('max_price')) {
            $products->where('price','<=', $request->max_price);
        }


        if ($request->has('product_condition')) {
            $products->where('product_condition', $request->product_condition);
        }


        if ($request->has('has_discount')) {
            $products->whereNotNull('sale_price');
        }


        if ($request->has('saller_rating')) {
            // $products->where('supplier_score', $request->supplier_score);
            foreach($products as $product){
                if((int)$product->owner->reviews()->average('stars') >= $request->saller_rating){
                    $products = $product;
                }
            }


        }


         $q =  Request()->keyword ;



    // return $store_ids;
    if($q){
           $results = Product::withTranslations(['en', 'ar'])->where('name', 'like', '%'.$q.'%')->orWhereHas('translations', function($query) use ($q){
            $query->where('value', 'like', '%'.$q.'%');
            })->paginate(10);
                    return  ProductIndexResource::collection($results);

    }

        return  ProductIndexResource::collection($products->paginate(10));
    }
    public function hot_offers_products(Request $request){


        $sortprice = request()->sortprice == "highest" ? "DESC": "ASC"  ;
        $sortdate = request()->sortdate == "latest" ? "DESC": "ASC"  ;
        $products = Product::whereNotNull('sale_price')->orderBy('price', $sortprice)->orderBy('created_at', $sortdate)->paginate(10);




        return new ProductIndexCollection($products);
    }

    public function latest_slider(){

        return response()->json([
                      'data' => [
                             'slider' => [
                'https://i.imgur.com/lb2nq43.jpg',
                'https://i.imgur.com/lb2nq43.jpg',
                ]
    ]
            ]);
    }


    public function suggested_suppliers(){

        return  new StoreCollection(User::with("products")->whereHas('products')->paginate(10));
    }
    public function suggested_products(){
        $sortprice = request()->sortprice == "highest" ? "DESC": "ASC"  ;
        $sortdate = request()->sortdate == "latest" ? "DESC": "ASC"  ;


            return new ProductIndexCollection(Product::inRandomOrder()->orderBy('price', $sortprice)->orderBy('created_at', $sortdate)->paginate(10));
    }
    public function suggested_services(){

        return  new ServicesIndexCollection(Service::inRandomOrder()->paginate(10));
    }



      public function suppliers(){

            return  new StoreCollection(User::with("products")->whereHas('products')->paginate(10));

    }
    public function services(){

        return  new ServicesIndexCollection(Service::paginate(10));
    }


}
