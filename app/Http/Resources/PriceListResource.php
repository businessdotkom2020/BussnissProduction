<?php

namespace App\Http\Resources;

use App\Http\Resources\ProductIndexResource;
use App\Http\Resources\ProductVariationResource;
use Illuminate\Http\Resources\Json\JsonResource;

class PriceListResource extends ProductIndexResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {

        $lang = (request('lang')) ? request('lang') : \App::getLocale();
        \App::setlocale($lang);

        $currency_code =  \Session::get('currency') ? \Session::get('currency')  : currency()->config('default') ;

        if(request('currency')) $currency_code = request('currency') ; 
        
        return [
            'id'           => $this->id,
            'quantity_from'  => $this->quantity_from,
            'quantity_to'  => $this->quantity_to,
            'price'        => $this->price,
            'currency'     => trans('currency.'.$currency_code) ,
         
            
        ];
    }


 
}