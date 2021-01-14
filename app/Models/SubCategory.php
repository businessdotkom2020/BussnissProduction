<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class SubCategory extends Model
{


    public function getCreatedAtAttribute($date)
    {
        return  $date ? \Carbon\Carbon::parse($date)->format('H:i Y/m/d') : '19:17 2021/01/25';
    }


}
