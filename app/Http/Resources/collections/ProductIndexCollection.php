<?php

namespace App\Http\Resources\collections;

use App\Http\Resources\ProductIndexResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ProductIndexCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public $collects = ProductIndexResource::class;

    public function toArray($request) {
          return ['status'=>true  ,'code' => 200,'data' => $this->collection ];
    }
}
