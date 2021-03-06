<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MainCategoryResource extends JsonResource
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
            'image'       => url('storage/'.$this->image),
            'childs' => CategoryResource::collection($this->children),
            // 'products'    => ProductIndexResource::collection($this->whenLoaded('products')),
        ];
    }
}
