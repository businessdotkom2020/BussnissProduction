<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class Attribute extends Model
{
        use Translatable;
    protected $translatable = ['name'];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'attribute_categories');
    }
    
    public function values()
    {
        return $this->hasMany(AttributeValue::class);
    }

}
