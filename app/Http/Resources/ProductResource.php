<?php

namespace App\Http\Resources;

use App\Http\Resources\ProductIndexResource;
use App\Http\Resources\ProductVariationResource;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends ProductIndexResource
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
        $currency_code = (request('currency')) ? request('currency') : currency()->config('default');
        $price = currency($this->price, $from = 'USD', $to = $currency_code, $format = true);
        return [
            'id'           => $this->id,
            'category'     => $this->category ? $this->category->name : null,
            'name'         => $this->getTranslatedAttribute('name', $lang),
            'description'  => $this->getTranslatedAttribute('description', $lang),
            'image'        => url('storage/' . ($this->image)),
            'gallery'      => $this->images(),
            'is_favorite'  => $this->isFavorited(),
            'price'        => $price,
            'currency'        => $currency_code,
            'seen_cont'       =>5,

            'store_id'        => $this->owner ? $this->owner->id : null,
            'sale_price'   => $this->sale_price,
            // 'sale_value'   =>  ((float)$this->sale_price* (float)$this->price / 100 ) .'%',
            'sale_value'   => (($this->sale_price / $this->price) * 100) . '%',
            'price_list'   => $this->prices,
            'options'      => attributesIndexResource::collection($this->options),
            'supplier'     => $this->owner ? $this->owner->name : null,
            'rating'       => 4.5,
            'brand'       => $this->brand ? $this->brand->name : '',
            'tag'       => $this->tag ? $this->tag->name : '',
            'product_condition'   => $this->product_condition,
            'created_at'   => $this->created_at,
            'updated_at'   => $this->updated_at,
        ];
    }


    public function images()
    {
        $images = [];
        $all_images = [];
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