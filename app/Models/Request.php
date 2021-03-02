<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;
use Illuminate\Support\Facades\Storage;


class Request extends Model
{
    use Favoritable, Translatable, Reviewable;

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'created_at'        => 'datetime',
        'updated_at'        => 'datetime',
    ];


    protected $appends = ['average_rating'];

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

        $avalible_images[] = 'products/product_image819748.jpg';
        $avalible_images[] = 'products/product_image819952.png';
        $avalible_images[] = 'products/product_image1017553.png';
        $avalible_images[] = 'products/product_image1116640.png';
        $avalible_images[] = 'products/product_image1318544.jpg';
        $avalible_images = array_unique($avalible_images);

        return json_encode($avalible_images);
    }


    public function getAverageRatingAttribute()
    {
        return (int)$this->reviews()->average('stars');
    }

    protected $translatable = ['name', 'description'];
    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'category_id');
    }
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function getCreatedAtAttribute($date)
    {
        return  $date ? \Carbon\Carbon::parse($date)->format('H:i Y/m/d') : '19:17 2021/01/25';
    }


    public function getUpdatedAtAttribute($date)
    {
        return  $date ? \Carbon\Carbon::parse($date)->format('H:i Y/m/d') : '19:17 2021/01/25';
    }
}
