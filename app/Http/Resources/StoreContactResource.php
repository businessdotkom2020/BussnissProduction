<?php

namespace App\Http\Resources;

use App\Http\Resources\CountryResource;
use Illuminate\Http\Resources\Json\JsonResource;

class StoreContactResource extends JsonResource
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
            'instagram' => $this->instagram_url,
            'facebook' => $this->facebook_url,
            'linkedin' => $this->linkedin_url,
            'youtube_url' => $this->youtube_url,
            'address' => $this->address,
            'lat' => $this->lat,
            'lang' => $this->lang,
        ];
    }
}
