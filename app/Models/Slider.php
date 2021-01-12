<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Slider extends Model
{
    protected $hidden = ['category_id','updated_at','created_at'];
//   public function getImagesAttribute($value) {
//         $slide_images = [];
//         foreach(json_decode($value) as $image){
//             $slide_images[] = url('storage/'.$image);
//         }
//         return $slide_images;

//     }
  public function test() {
      return 'asc';
        $slide_images = [];
        foreach(json_decode($value) as $image){
            $slide_images[] = url('storage/'.$image);
        }
        return $slide_images;

    }


    	public function category() {
		return $this->belongsTo(Category::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function industrial_zone()
    {
        return $this->belongsTo(IndustrialZones::class , 'industrial_id');
    }
}
