<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ZoneResource extends JsonResource
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
            'id'           => $this->id,
            'name'           => $this->getTranslatedAttribute('name',$lang),
            'image'       => url('storage/'.$this->image),
            'area_name'       => $this->state ? $this->state->name : null ,
            'created_at'   => $this->created_at,
            'updated_at'   => $this->updated_at,
    
        ];
    }
}
