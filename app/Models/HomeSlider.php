<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class HomeSlider extends Model
{
    protected $appends = ['image_url','path_url'];

    
    public function getImageUrlAttribute()
    {
 
        return url('storage/'.$this->image);
    }


    public function getPathUrlAttribute()
    {
        if($this->product_id){
            url('product/'.$this->product_id);
        }
        return url('url/'.$this->link);
    }
}