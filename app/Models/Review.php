<?php

namespace App\Models;

use App\Cart\Money;
use App\Models\PaymentMethod;
use App\Models\Transaction;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{


    /**
     * Don't auto-apply mass assignment protection.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Fetch the model that was favorited.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function reviewed()
    {
        return $this->morphTo();
    }



    public function getCreatedAtAttribute($date)
    {
        return  $date ? \Carbon\Carbon::parse($date)->format('H:i Y/m/d') : '19:17 2021/01/25';
    }


    public function getUpdatedAtAttribute($date)
    {
        return  $date ? \Carbon\Carbon::parse($date)->format('H:i Y/m/d') : '19:17 2021/01/25';
    }



    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}