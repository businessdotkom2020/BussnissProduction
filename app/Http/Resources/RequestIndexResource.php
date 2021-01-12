<?php

namespace App\Http\Resources;

use App\Http\Resources\ProductIndexResource;
use App\Http\Resources\ProductVariationResource;
use Illuminate\Http\Resources\Json\JsonResource;

class RequestIndexResource extends ProductIndexResource
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
            'category'  => $this->category ? $this->category->name : null,
            'mobile'  => $this->user ? $this->user->mobile : null,
            'email'  => $this->user ? $this->user->email : null,
            'avatar'  => $this->user ? url('storage',$this->user->avatar) : null,
            'whatsapp'  => $this->user ? $this->user->whatsapp : null,
            'name' => $this->getTranslatedAttribute('name',$lang),
            'description' => $this->getTranslatedAttribute('description',$lang),
                           'images' =>  $this->images(),
            'is_favorite'  => $this->isFavorited(),
                        'user_name' => $this->user ? $this->user->name: null ,
            'default_image'        => json_decode($this->images ) ? url('storage/'.(json_decode($this->images))[0]) : "https://i.imgur.com/mFI2maG.jpg",

            'added_by_supplier' =>       true ,
                                    'share_url'  => "https://www.facebook.com/",
            'store_id'  => $this->user_id ,

            'user_image'  => $this->user ? url('storage/'.$this->user->avatar) : null,
            'created_at'   => $this->created_at,
            'updated_at'   => $this->updated_at,
        ];

    }
    
             public function images(){
          $images = [];
          $all_images = [];
          $images = json_decode($this->images);
      	if(is_array($images)){
          foreach($images as $image){
            $all_images [] = url('storage/'.$image);
          }
                    return $all_images;

        }
      return [];
          }
}
