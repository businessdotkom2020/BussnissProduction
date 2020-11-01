<?php

namespace App\Http\Resources;

use App\Http\Resources\ProductIndexResource;
use App\Http\Resources\ProductVariationResource;
use Illuminate\Http\Resources\Json\JsonResource;

class ReviewsRecource extends ProductIndexResource
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
            'stars'           => (int)$this->stars,
            'comment'           => $this->comment,
             'user_image'       => $this->owner ? url('storage/'.$this->owner->avatar) : "http://businessdotkom.com/storage/users/default.png",
             'user_name'       =>  $this->owner ? $this->owner->name :  "kareem Elsharkawy",
             'can_be_deleted'       => $this->isOwner(),
            'created_at'   => $this->created_at,
            'updated_at'   => $this->updated_at,
        ];

    }
     
             public function isOwner(){
               if( auth()->guard('api')->user()){
          return  auth()->guard('api')->user()->id == $this->user_id ? true: false; 
    }
        return false;
          }


 
}
