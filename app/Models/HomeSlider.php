<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class HomeSlider extends Model
{
    protected $appends = ['image_url'];

    
    public function getImageUrlAttribute()
    {
 
        return url('storage/'.$this->image);
    }
}