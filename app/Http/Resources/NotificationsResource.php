<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Category;

class NotificationsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'supplier_id' => $this->supplier_id,
            'notify_type' => $this->notify_type,
            'notify_type_id' => $this->notify_id,
            'created_at' => $this->created_at,
        ];
    }
    
    
   
}
