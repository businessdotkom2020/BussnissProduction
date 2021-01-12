<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class City extends Model
{
          use  Translatable;
    protected $translatable = ['name'];
    public function state()
    {
        return $this->belongsTo(State::class);
    }
}
