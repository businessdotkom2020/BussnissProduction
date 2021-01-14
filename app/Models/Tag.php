<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class Tag extends Model
{
    use Translatable;
    protected $translatable = ['name'];





    public function getCreatedAtAttribute($date)
    {
        return  $date ? \Carbon\Carbon::parse($date)->format('H:i Y/m/d') : '19:17 2021/01/25';
    }

    
    public function products()
    {
        return $this->hasMany(Product::class);
    }


}
