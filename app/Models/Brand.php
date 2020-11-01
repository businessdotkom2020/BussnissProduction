<?php

namespace App\Models;
use TCG\Voyager\Traits\Translatable;

use Illuminate\Database\Eloquent\Model;


class Brand extends Model
{
           use  Translatable;

    protected $translatable = ['name'];

}
