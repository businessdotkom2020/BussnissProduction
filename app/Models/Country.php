<?php

namespace App\Models;

use App\Models\ShippingMethod;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Country extends Model
{
          use  Translatable;

        protected $translatable = ['name'];

    public $timestamps = false;
    
    protected $fillable = [
        'code',
        'name'
    ];

    public function shippingMethods()
    {
        return $this->belongsToMany(ShippingMethod::class);
    }
}
