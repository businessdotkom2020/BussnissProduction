<?php

namespace App\Http\Resources\collections;

use App\Http\Resources\AuthCategoriesResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class AuthCategoriesCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public $collects = AuthCategoriesResource::class;

    public function toArray($request) {
          return ['status'=>true  ,'code' => 200,'data' => $this->collection ];
    }
}
