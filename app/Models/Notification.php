<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Notification extends Model
{
    
    
     /**
         * Get the user that owns the phone.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

     /**
         * Get the user that owns the phone.
     */
    public function supplier()
    {
        return $this->belongsTo(User::class,'supplier_id');
    }
    

}
