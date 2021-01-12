<?php

namespace App\Http\Resources\collections;

use App\Http\Resources\ServicesIndexResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ServicesIndexCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public $collects = ServicesIndexResource::class;

    public function toArray($request) {
          return ['status'=>true  ,'code' => 200,'data' => $this->collection ];
    }
}
