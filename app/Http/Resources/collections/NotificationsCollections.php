<?php

namespace App\Http\Resources\collections;

use Illuminate\Http\Resources\Json\ResourceCollection;
use App\Http\Resources\NotificationsResource;

class NotificationsCollections extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public $collects = NotificationsResource::class;

    public function toArray($request)
    {
        return ['status' => true, 'code' => 200, 'data' => $this->collection];
    }
}