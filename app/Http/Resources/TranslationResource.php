<?php

namespace App\Http\Resources;

use App\Http\Resources\ProductIndexResource;
use App\Http\Resources\ProductVariationResource;
use Illuminate\Http\Resources\Json\JsonResource;

class TranslationResource extends ProductIndexResource
{


    public function toArray($request)
    {

        return [
            'id'           => $this->id,
            'column_name'     => $this->column_name.'_'.$this->locale ,

            'value'     => $this->value ,


        ];

    }
    
    


    
    

}
