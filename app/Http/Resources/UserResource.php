<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'id'          => $this->id,
            'name'        => $this->name,
            'email'       => $this->email,
            'image'      => url('storage/'.$this->avatar),
            'mobile'      => $this->mobile,
            'whatsapp_mobile'      => $this->whatsapp_mobile,
            'country'      => $this->country ?  $this->country->name : null,
            'address'      => $this->address,
            'favorites_count'      => \App\Models\Favorite::where('user_id',$this->id)->count(),
                                    'following_count'      => $this->following()->count(),

            // 'last_login'      =>$this->last_login ? $this->last_login->format('Y-m-d H:i:s') : null,
        ];
        
        
        
    }
    
}
