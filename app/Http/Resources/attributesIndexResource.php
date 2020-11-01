<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class attributesIndexResource extends JsonResource
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

        return [
            'key' => $this->attribute->getTranslatedAttribute('name',$lang),
            'values' =>\App\Models\AttributeValue::find($this->value_id)->getTranslatedAttribute('value',$lang) ,


        ];
    }
    public function attribute_value($lang){
     $value_id =     \App\Models\ProductAttribute::where([['product_id',$this->product_id],['attribute_id',$this->attribute_id]])->first()->value_id;
    return  $value = \App\Models\AttributeValue::find($value_id) ? \App\Models\AttributeValue::find($value_id)->getTranslatedAttribute('value',$lang)  : null;

    }
}
