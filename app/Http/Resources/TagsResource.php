<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Category;
use App\Models\Product;

class TagsResource extends JsonResource
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
            'name' => $this->name,

            'products'    => ProductIndexResource::collection(Product::where([['tag_id',$this->id],['user_id',Request()->supplier_id]])->get()),
        ];
    }
    
    
   
}
