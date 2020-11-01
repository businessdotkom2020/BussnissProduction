<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Category;
use App\Models\Product;

class HomeTagsResource extends JsonResource
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

            'products'    => ProductIndexResource::collection(Product::where('tag_id',$this->id)->get()),
        ];
    }
    
    
   
}
