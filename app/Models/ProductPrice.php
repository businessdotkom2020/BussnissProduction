<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class ProductPrice extends Model
{
    public function getPriceAttribute($price)
    {
        $currency_code =  \Session::get('currency') ? \Session::get('currency')  : currency()->config('default') ;

        if(request('currency')) $currency_code = request('currency') ; 
        return  currency(floatval($price), $from = 'USD', $to = $currency_code, $format = false);
     }

}