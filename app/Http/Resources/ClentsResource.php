<?php

namespace App\Http\Resources;

use App\Http\Resources\ProductIndexResource;
use App\Http\Resources\ProductVariationResource;
use Illuminate\Http\Resources\Json\JsonResource;

class ClentsResource extends ProductIndexResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return array_merge(parent::toArray($request), [
        //     'variations' => ProductVariationResource::collection(
        //         $this->variations->groupBy('type.name')
        //     )
        // ]);
        // return parent::toArray($request);
                $lang = (request('lang')) ? request('lang') : \App::getLocale();

        return [
            'id'           => $this->id,
            'name'           => $this->name,

                        'image'        => $this->image  ? url('storage/'.$this->image) : "https://i.imgur.com/mFI2maG.jpg",

            'created_at'   => $this->created_at,
            'updated_at'   => $this->updated_at,
        ];

    }


}
