<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Branch extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
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