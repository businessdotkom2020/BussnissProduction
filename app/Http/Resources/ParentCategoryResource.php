<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ParentCategoryResource extends JsonResource
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
            // 'image'       => url('storage/'.$this->image),
            'image'       => url('storage/'.$this->image),
    'top-suppliers' => [['id' => 1 , 'name'=> 'Dell','logo' => 'https://i.imgur.com/6Li4KwM.png' , 'stars' => 4],['id' => 2 ,'name' => 'Nike','logo'=> 'https://i.imgur.com/FAlNOQ3.jpg','stars' => 3]],
    'slider' => $this->sliders ? $this->sliders->images : [] ,
            'childs' => CategoryResource::collection($this->childs),

            // 'products'    => ProductIndexResource::collection($this->whenLoaded('products')),
        ];
    }
}
