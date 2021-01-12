<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Category;
use App\Models\Product;

class CategoryProductsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $lang = (request('lang')) ? request('lang') : \App::getLocale();

        return [
            'id' => $this->id,
            'name' => $this->getTranslatedAttribute('name',$lang),
            'image'       => url('storage/'.$this->image),
            'products'    => ProductIndexResource::collection(Product::whereIn('category_id',$this->categories_ids($this->id))->get()),
        ];
    }
    
    
    public function categories_ids($id){
        
              $main_category = Category::with('children.children')->find($id);
              $children_ids = [];
              $sub_childrens_ids = [];

                foreach($main_category->children as $childrens){
                    $children_ids[] = $childrens->id;
                    foreach($childrens->children as $children){
                        $sub_childrens_ids[] = $children->id;
                    }
                }
             $categories =  array_merge($sub_childrens_ids, $children_ids);
              array_push($categories, (int)$id);
            return $categories;
    }
}
