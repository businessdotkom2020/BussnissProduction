<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CompaniesResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
           // return parent::toArray($request);
           return [
            'id'           => $this->id,
            'name'           => $this->name,
            'image'       => url('storage/'.$this->avatar),
               'rating'       => 5 ,


            'created_at'   => $this->created_at,
            'updated_at'   => $this->updated_at,
        ];
    }
}
