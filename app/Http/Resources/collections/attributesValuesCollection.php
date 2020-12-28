<?php

namespace App\Http\Resources\collections;

use App\Http\Resources\attributesValuesResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class attributesValuesCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public $collects = attributesValuesResource::class;

    public function toArray($request) {
          return ['status'=>true  ,'code' => 200,'data' => $this->collection ];
    }
}
