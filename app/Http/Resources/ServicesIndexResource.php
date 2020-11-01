<?php

namespace App\Http\Resources;

use App\Http\Resources\ProductIndexResource;
use App\Http\Resources\ProductVariationResource;
use Illuminate\Http\Resources\Json\JsonResource;

class ServicesIndexResource extends ProductIndexResource
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
            'category'       =>  $this->category ? $this->category->name :   null ,
            'images'       => $this->images(),
                        'default_image'        => ($this->images ) ? url('storage/'.(json_decode($this->images))[0]) : "https://i.imgur.com/mFI2maG.jpg",

                        'share_url'  => "https://www.facebook.com/",
            'store_id'  => $this->user_id ,

            'rating'       => 5 ,
            'youtube_url'=>       $this->youtube_url ,
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
