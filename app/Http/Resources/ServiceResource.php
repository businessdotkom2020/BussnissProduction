<?php

namespace App\Http\Resources;

use App\Http\Resources\ProductIndexResource;
use App\Http\Resources\ProductVariationResource;
use Illuminate\Http\Resources\Json\JsonResource;

class ServiceResource extends ProductIndexResource
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
            'description'           => $this->description,
            'logo'       => url('storage/' . $this->avatar),
            'images'       => url('storage/' . $this->avatar),
            'address'       => $this->address,
            'working_from'       => "7:00",
            'working_to'       => "9:00",
            'rating'       => 5,
            'images'       => $this->images(),
            'services'      => ServicesIndexResource::collection($this->services),
            'store_id'  => $this->user_id,
            'is_favorite'  => $this->isFavorited(),

            'created_at'   => $this->created_at,
            'updated_at'   => $this->updated_at,
        ];
    }

    public function images()
    {
        $images = [];
        $images = json_decode($this->images);
        if (is_array($images)) {
            foreach ($images as $image) {
                $all_images[] = url('storage/' . $image);
            }
            return $all_images;
        }
        return [];
    }
}
