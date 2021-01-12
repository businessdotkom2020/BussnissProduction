<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PrivacyPolicyResource extends JsonResource
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
             $this->getTranslatedAttribute('privacy_policy',$lang),
        ];
    }
}
