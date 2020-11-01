<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class StoreResource extends JsonResource
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
            'id'                => $this->id,
            'name'        => $this->name,
            'logo'       => url('storage/'.$this->avatar),
            'stars'             => 3,
             'products'    => ProductIndexResource::collection($this->products),

        ];
    }
}
