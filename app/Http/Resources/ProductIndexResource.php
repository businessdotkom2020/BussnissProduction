<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductIndexResource extends JsonResource
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
            'id'          => $this->id,
            'name' => $this->getTranslatedAttribute('name',$lang),
            'image'        => url('storage/'.($this->image)),
            'price'        => $this->price,
            'currency'        => trans('currency.'.$currency_code) ,
            'seen_cont'       =>5,
 
            'is_favorite'  => $this->isFavorited(),
            // 'sale_value'     => (($this->sale_price/$this->price) * 100) .'%',
            // 'sale_value'     => number_format((($this->sale_price/$this->price) * 100) ,2)  .'%',
            'store_name'        => $this->owner ? $this->owner->name :null,
            'store_id'        => $this->owner ? $this->owner->id :null,
            'stars'             => 3.5,

        ];
    }





}