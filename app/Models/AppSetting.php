<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class AppSetting extends Model
{
           use Translatable;

       protected $translatable = ['privacy_policy', 'terms_conditions','about_us'];
}
