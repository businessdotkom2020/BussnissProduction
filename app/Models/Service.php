<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Service extends Model
{
          use Favoritable,Reviewable;

    protected $appends = ['average_rating'];



    public function getAverageRatingAttribute()
    {
        return (int)$this->reviews()->average('stars');
    }

    	public function category() {
		return $this->belongsTo(Category::class);
	}
	
	
    public function owner()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
