<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class IndustrialZones extends Model
{
    public $timestamps = false;
           use Translatable;

        protected $translatable = ['name'];


    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function factories()
    {
        return $this->hasMany(User::class)->where('type','factory');
    }

    public function companies()
    {
        return $this->hasMany(User::class)->where('type','company');
    }
}
