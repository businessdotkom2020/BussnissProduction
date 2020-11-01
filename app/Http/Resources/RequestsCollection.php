<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class RequestsCollection extends ResourceCollection
{
    /**
     * The resource that this resource collects.
     *
     * @var string
     */
    public $collects = RequestIndexResource::class;
    
    public function toArray($request) {
          return ['value'=>true  ,'data' => $this->collection ,'code' => 200];
    }
}