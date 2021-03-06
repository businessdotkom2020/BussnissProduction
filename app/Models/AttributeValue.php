<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class AttributeValue extends Model
{
            use Translatable;
    protected $translatable = ['value'];
    public function attribute()
    {
        return $this->belongsTo(Attribute::class);
    }
}
