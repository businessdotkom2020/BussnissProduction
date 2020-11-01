<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class ProductAttribute extends Model
{
    
    public function values()
    {
        return $this->hasMany(AttributeValue::class);
    }
        public function attribute()
    {
        return $this->belongsTo(Attribute::class);
    }
    
        public function value()
    {
        return $this->belongsTo(AttributeValue::class);
    }
    
}
