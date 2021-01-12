<?php

namespace App\Http\Resources\collections;

use App\Http\Resources\ReviewsRecource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ReviewsCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public $collects = ReviewsRecource::class;

    public function toArray($request) {
          return ['status'=>true  ,'code' => 200,'data' => $this->collection ];
    }
}
