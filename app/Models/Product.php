<?php

namespace App\Models;

use App\Models\Category;
use App\Models\ProductVariation;
use App\Models\Traits\CanBeScoped;
use App\Models\Traits\HasPrice;
use TCG\Voyager\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
       use Favoritable,Reviewable, CanBeScoped, Translatable;
    protected $translatable = ['name', 'description'];
    protected $appends = ['average_rating','MainCategoryId','supplier_average_rating','DefaultImage'];
    protected $fillable = [
        'user_id',
        'category_id',
        'name',
        'description',
        'price'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }



    public function getCreatedAtAttribute($date)
    {
        return  $date ? \Carbon\Carbon::parse($date)->format('H:i Y/m/d') : '19:17 2021/01/25';
    }


    public function getDefaultImageAttribute()
    {
        return url('storage/'.$this->image);
    }

    public function getImageAttribute($value)
    {

        $isExists = Storage::exists('public/'.$value);

        if (is_null($value) || empty($value)  || !$isExists) {
            return 'products/default.jpg' ;
        }
        return $value ;
    }


    public function getImagesAttribute($value)
    {
        $images =  json_decode($value);

        if(is_Array($images) && count($images)){
            foreach($images as $image){
                $isExists = Storage::exists('public/'.$image);

                if (is_null($image) || empty($image)  || !$isExists) {
                    $avalible_images[] = 'products/default.jpg' ;
                }else{
                    $avalible_images[] = $image ;

                }
            }
            $avalible_images = array_unique($avalible_images);

            return json_encode($avalible_images);
        }

        return json_encode(['products/default.jpg']);

    }


    public function getSupplierAverageRatingAttribute()
    {
        return (int)$this->owner->reviews()->average('stars');
    }

    public function getAverageRatingAttribute()
    {
        return (int)$this->reviews()->average('stars');
    }

    public function getMainCategoryIdAttribute()
    {
        if($category = Category::find($this->id) ){
            if(!$category->parent_id){
                return $category->id;
            }

            if($parent_category = Category::find($category->parent_id) ){
                  if(!$parent_category->parent_id){
                    return $parent_category->id;
                }


            if($main_category = Category::find($parent_category->parent_id) ){
                    return $main_category->id;
            }


        }

        }
    }

    public function owner()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function zone()
    {
        return $this->belongsTo(IndustrialZones::class,'zone_id');
    }
    public function brand()
    {
        return $this->belongsTo(Brand::class,'brand_id');
    }
    public function tag()
    {
        return $this->belongsTo(Tag::class,'tag_id');
    }

	public function category() {
		return $this->belongsTo('App\Models\Category','category_id');
	}
    public static function boot()
    {
        parent::boot();

        static::creating(function ($product){
            $product->user_id = Request()->user()->id;
        });
    }



    public function categories()
    {
        return $this->belongsToMany(Category::class, 'product_categories');
    }

    public function prices()
    {
        return $this->hasMany(ProductPrice::class)->select(['id', 'price', 'quantity_from','quantity_to']);
    }

    public function options()
    {
        return $this->hasMany(ProductAttribute::class);
    }

    public function like($user = null)
    {
        $user = $user ?:Request()->user();
        return $this->likes()->attach($user);
    }


    public function likes()
    {
        return $this->morphTo(User::class, 'favouriteable');
    }

	public static function categoryIdRelationship($id) {

		// return
		// 	self::where('products.id', '=', $id)
		// 		->select('products.category_id', 'sub_categories.id as sub_category_id', 'main_categories.id as main_category_id')
		// 			->join('categories', 'products.category_id', '=', 'categories.id')
		// 				->join('sub_categories', 'categories.sub_category_id', '=', 'sub_categories.id')
		// 					->join('main_categories', 'sub_categories.main_category_id', '=', 'main_categories.id')
		// 						->first();
	}

}
