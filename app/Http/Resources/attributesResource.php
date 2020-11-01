<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class attributesResource extends JsonResource
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
            'id' => $this->id,
            'name' => $this->getTranslatedAttribute('name',$lang),
            'values' => attributesValuesResource::collection(\App\Models\AttributeValue::where('attribute_id',$this->id)->get()),

        ];
    }
}
