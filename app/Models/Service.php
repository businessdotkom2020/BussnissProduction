<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Service extends Model
{
    use Favoritable, Reviewable;

    protected $appends = ['average_rating'];



    // public function getCreatedAtAttribute($date)
    // {
    //     return  $date ? \Carbon\Carbon::parse($date)->format('H:i Y/m/d') : '19:17 2021/01/25';
    // }


    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'created_at'        => 'datetime',
        'updated_at'        => 'datetime',
    ];


    public function getAverageRatingAttribute()
    {
        return (int)$this->reviews()->average('stars');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}