<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SocialLinksResource extends JsonResource
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
            "linked_in" => $this->linked_in,
            "instagram" => $this->instagram,
            "whatsapp" => $this->whatsapp,
            "facebook" => $this->facebook,
            "youtube" => $this->youtube,
        ];
    }
}
