<?php

namespace App\Http\Resources;

use App\Http\Resources\CountryResource;
use Illuminate\Http\Resources\Json\JsonResource;

class ConsumerContactResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
          'id' => $this->id,
            'name' => $this->name,
            'image' => url('storage/'.$this->avatar),
            'mobile' => $this->mobile,
            'email' => $this->email,
            'whatsapp' => $this->whatsapp_mobile,
            'hot_number' => $this->hot_number,
            'facebook' => $this->facebook_url,
        ];
    }
}
