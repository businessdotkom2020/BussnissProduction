<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SupplierIndexResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'id'                => $this->id,
            'store_name'        => $this->name,
            'about_store'       => $this->description,
            'email'             => $this->email,
            'mobile'            => $this->mobile,
            'whatsapp_mobile'   => $this->whatsapp_mobile,
            'hot_number'        => $this->hot_number,
            'country'           => $this->country ? $this->country->name : null,
            'city'              => $this->city ? $this->city->name : null,
            'state'             => $this->state ? $this->state->name : null,
            'postal_code'       => $this->postal_code,
            'store_image'       => url('storage/' . $this->avatar),
            'store_background'  => url('storage/' . $this->store_background),
            'address'           => $this->address,
            'type'              => $this->type,
            'categories'        => AuthCategoriesResource::collection($this->categories),
            'clients'        => ClentsResource::collection($this->clients),
            'lat'               => $this->lat,
            'lang'              => $this->lang,
            'working_from'      => $this->working_from,
            'working_to'        => $this->working_to,
            'delivery_time'     => $this->delivery_time,
            'delivery_fee'      => $this->delivery_fee,
            'user_type'       => $this->type == 'supplier' ? 'supplier' : 'user',
            'year_founded'      => $this->year_founded,
            'favorites_count'   => \App\Models\Favorite::where('user_id', $this->id)->count(),
            'following_count'   => \App\Models\User::find($this->id)->followers()->count(),
            'stars'             => 3,
            'is_following'             => $this->is_following(),
            'has_products'             => $this->products->count() ? true : false,
            'has_services'             => $this->services->count() ? true : false,
            'branshes'             => BranshesResource::collection($this->branchs),
            'images'       => $this->images(),

            'whatsapp' => $this->whatsapp_mobile,
            'hot_number' => $this->hot_number,
            'instagram' =>  $this->instagram_url,
            'facebook' =>   $this->facebook_url,
            'linkedin' =>   $this->linkedin_url,
            'youtube' => $this->youtube_url,
            'address' => $this->address,
            'website' => $this->website,
            'street' => 'street',

        ];
    }


    public function is_following()
    {
        if ($user = auth()->guard('api')->user()) {
            $is_following = \App\Models\Follow::where([
                ['user_id', auth()->guard('api')->user()->id],
                ['follower_id', $this->id]
            ])->first();
            if ($is_following) {
                return true;
            } else {
                return false;
            }
        }
        return false;
    }

    public function vistor_type()
    {
        if (auth('api')->user() && auth('api')->user()->type == 'supplier') {

            return 'supplier';
        }
        return 'user';
    }


    public function images()
    {
        $images = [];
        $images = json_decode($this->images);
        if (is_array($images)) {
            foreach ($images as $image) {
                $all_images[] = url('storage/' . $image);
            }
            return $all_images;
        }
        return [];
    }
}