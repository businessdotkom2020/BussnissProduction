<?php

namespace App\Http\Resources;

use App\Http\Resources\ProductIndexResource;
use App\Http\Resources\ProductVariationResource;
use Illuminate\Http\Resources\Json\JsonResource;

class ServicesDetailsResource extends ProductIndexResource
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
            'images'       => $this->images(),
                         'rating'       => 5 ,

            'share_url'  => "https://www.facebook.com/",
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
