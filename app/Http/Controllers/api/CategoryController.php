<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use App\Models\CategoryUser;
use App\Models\Tag;
use Illuminate\Http\Request;
use App\Http\Resources\ParentCategoryResource;
use App\Http\Resources\MainCategoryResource;
use App\Http\Resources\StoreResource;
use App\Http\Resources\CategoryProductsResource;
use App\Http\Resources\ProductIndexResource;
use App\Http\Resources\AuthCategoriesResource;
use App\Http\Resources\collections\ParentCategoryCollection;
use App\Http\Resources\collections\ProductIndexCollection;
use App\Http\Resources\collections\StoreCollection;
use App\Http\Resources\CompaniesResource;

class CategoryController extends Controller
{

      public function home(){





return CategoryProductsResource::collection(Category::whereNull('parent_id')->get())
  ->concat([
                'data' => [
                    'id' => 9999,
                    'name' => 'How Offers',
                    'image' => 'http://businessdotkom.com/storage/categories/January2020/1o6nDi1kjVuwje5FiFXv.png',
                    'products' => ProductIndexResource::collection(Product::whereNotNull('sale_price')->get()),
                ]
            ])
  ->concat([
                'data' => [
                     'slider' => [
        'https://i.imgur.com/lb2nq43.jpg',
        'https://i.imgur.com/lb2nq43.jpg',
        ]
                ]
            ]);
    }



    public function auth_categories(){
        		return AuthCategoriesResource::collection(Category::whereNull('parent_id')->get());

    }
    public function brands_list(){
        		return AuthCategoriesResource::collection(\App\Models\Brand::get());

    }
    public function tags_list(){
        		return AuthCategoriesResource::collection(\App\Models\Tag::get());

    }

    public function sub_add_categories($id){
        		return AuthCategoriesResource::collection(Category::where('parent_id',$id)->get());

    }

    public function sub_sub_add_categories($id){
        		return AuthCategoriesResource::collection(Category::where('parent_id',$id)->get());

    }



	public function list_categories() {
        //  response()->json([
        //     'data' => Category::with(['childs.childs.childs','sliders'])->whereNull('parent_id')->get()
        // ]);

		return new ParentCategoryCollection(Category::with(['childs.childs.childs','sliders'])->whereNull('parent_id')->get());
	}

    public function index()
    {
        return CategoryResource::collection(
            Category::with('children','products')->parents()->get());
    }

    public function show(Category $category)
    {
        return new CategoryResource(
            $category->load('children','products'));
    }
    public function category_stores($id)
    {
       $stores_ids =  CategoryUser::where('category_id',$id)->get()->pluck('user_id');
        return  new StoreCollection(user::whereIn('id',$stores_ids)->paginate(10));

    }
    public function category_companies($id)
    {
        return  CompaniesResource::collection(user::where('id',145)->paginate(10));

    }
    public function category_products($id)
    {
        $sortprice = request()->sortprice == "highest" ? "DESC": "ASC"  ;
        $sortdate = request()->sortdate == "latest" ? "DESC": "ASC"  ;
        return new ProductIndexCollection(Product::where('category_id',$id)->orderBy('price', $sortprice)->orderBy('created_at', $sortdate)->paginate(10));
    }
    public function category_used_products($id)
    {
        return  ProductIndexResource::collection(Product::where('category_id',$id)->paginate(10));
    }

}
