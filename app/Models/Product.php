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
    use Favoritable, Reviewable, CanBeScoped, Translatable;
    protected $translatable = ['name', 'description'];
    protected $appends = ['average_rating', 'supplier_average_rating', 'DefaultImage'];
    protected $fillable = [
        'user_id',
        'main_category_id',
        'sub_category_id',
        'category_id',
        'name',
        'description',
        'price'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getPriceAttribute($price)
    {
        $currency_code =  \Session::get('currency') ? \Session::get('currency')  : currency()->config('default') ;

        if(request('currency')) $currency_code = request('currency') ; 
        return  currency(12.5, $from = 'USD', $to = $currency_code, $format = false);
     }

    public function getCreatedAtAttribute($date)
    {
        return  $date ? \Carbon\Carbon::parse($date)->format('H:i Y/m/d') : '19:17 2021/01/25';
    }


    public function getUpdatedAtAttribute($date)
    {
        return  $date ? \Carbon\Carbon::parse($date)->format('H:i Y/m/d') : '19:17 2021/01/25';
    }

    public function getDefaultImageAttribute()
    {
        return url('storage/' . $this->image);
    }

    public function getImageAttribute($value)
    {

        $isExists = Storage::exists('public/' . $value);
        $status_list = array(

            '/products/product_image819748.jpg',
            '/products/product_image819952.png',
            '/products/product_image1017553.png',
            '/products/product_image1116640.png',
            '/products/product_image1318544.jpg',

        );
        if (is_null($value) || empty($value)  || !$isExists) {
            return $status_list[rand(0, 4)];
        }
        return $value;
    }


    public function getImagesAttribute($value)
    {
        $images =  json_decode($value);

        if (is_Array($images) && count($images)) {
            foreach ($images as $image) {
                $isExists = Storage::exists('public/' . $image);

                if (is_null($image) || empty($image)  || !$isExists) {
                    $avalible_images[] = 'products/product_image819748.jpg';
                    $avalible_images[] = 'products/product_image819952.png';
                    $avalible_images[] = 'products/product_image1017553.png';
                    $avalible_images[] = 'products/product_image1116640.png';
                    $avalible_images[] = 'products/product_image1318544.jpg';
                } else {
                    $avalible_images[] = $image;
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

    // public function getMainCategoryIdAttribute()
    // {
    //     if ($category = Category::find($this->id)) {
    //         if (!$category->parent_id) {
    //             return $category->id;
    //         }

    //         if ($parent_category = Category::find($category->parent_id)) {
    //             if (!$parent_category->parent_id) {
    //                 return $parent_category->id;
    //             }


    //             if ($main_category = Category::find($parent_category->parent_id)) {
    //                 return $main_category->id;
    //             }
    //         }
    //     }
    // }

    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function zone()
    {
        return $this->belongsTo(IndustrialZones::class, 'zone_id');
    }
    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }
    public function tag()
    {
        return $this->belongsTo(Tag::class, 'tag_id');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'category_id');
    }
    public static function boot()
    {
        parent::boot();

        static::creating(function ($product) {
            $product->user_id = Request()->user()->id;
        });
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'product_categories');
    }

    public function prices()
    {
        return $this->hasMany(ProductPrice::class)->select(['id', 'price', 'quantity_from', 'quantity_to']);
    }

    public function options()
    {
        return $this->hasMany(ProductAttribute::class);
    }

    public function like($user = null)
    {
        $user = $user ?: Request()->user();
        return $this->likes()->attach($user);
    }


    public function likes()
    {
        return $this->morphTo(User::class, 'favouriteable');
    }

 
}