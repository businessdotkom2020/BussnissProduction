<?php

namespace App\Models;

use App\Models\Product;
use App\Models\Traits\HasChildren;
use App\Models\Traits\IsOrderable;
use TCG\Voyager\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasChildren, IsOrderable, Translatable;
    protected $with = ['childs','sliders'];

    protected $translatable = ['name'];
    protected $fillable = [
        'name',
        'parent_id',
        'order'
    ];
    // protected $appends = ['slider','top-sellers'];
    protected $appends = ['hasChild'];

    public function getTopSuppliersAttribute()
{

  return   [['id' => 1 , 'name'=> 'Dell','logo' => 'https://i.imgur.com/6Li4KwM.png' , 'stars' => 4],['id' => 2 ,'name' => 'Nike','logo'=> 'https://i.imgur.com/FAlNOQ3.jpg','stars' => 3]];
}


    public function getSliderAttribute()
{
 $slider =  $this->sliders;
    $slide_images = [];
    if($slider){
        $images =  json_decode($slider['images']);
        foreach($images as $image){
            $slide_images[] = url('storage/'.$image);
        }
        return $slide_images;
    }
}


    public function scopeParents($query)
{
    return $query->whereNull('parent_id');
}


    protected $hidden = ['updated_at','created_at','parent_id'];

        public function parent()
    {
        return $this->belongsTo('App\Models\Category', 'parent_id');
    }
        public function Users()
    {
        return $this->belongsToMany(User::class);
    }

        public function children()
    {
            return $this->hasMany(Category::class, 'parent_id', 'id');
    }

        public function childs()
    {
            return $this->hasMany(Category::class, 'parent_id', 'id');
    }
    public function sliders()
    {
            return $this->hasOne(Slider::class,'category_id');
    }

    public function childrenRecursive()
    {
        return $this->children()->with('childrenRecursive');
    }


    public function sub_children()
    {
            return $this->hasMany(Category::class, 'parent_id');
    }


        protected static function boot()
    {
        parent::boot();
        static::saving(function ($category) {
            if(request()->parent_id == 0 ){
            $category->parent_id = null;
            }
            elseif(request()->category_id  != 0){
             $category->parent_id = request()->category_id;

            }
        });

        static::updated(function ($category) {
            if(request()->parent_id == 0 ){
            $category->parent_id = null;
            }
            elseif(request()->category_id  != 0){
             $category->parent_id = request()->category_id;

            }

                   if (Request()->file('image'))
        {
            $file_name     = 'image'.   rand(1, 15). rand(155, 200) . rand(25, 55). '.png';
             Request()->image->storeAs('public/categories',$file_name);
            $category->image = '/categories/'. $file_name;
        }

        });
    }



    public function getHasChildAttribute()
{

    return $this->children()->count() ? true : false;

}


	public static function parentIdRelationship($id) {



                $cat = \App\Models\Category::find($id);
                if ($cat->parent){
                    if($cat->parent->parent){
                        return [
                            'category_id' => $cat->parent ?  (string) $cat->parent->id : null,
                            'parent_id' => $cat->parent ? (string) $cat->parent->parent->id : null ,
                         ];

                    }
                    elseif($cat->parent && !$cat->parent->parent){
                                      return [
                            'parent_id' => $cat->parent ?  (string) $cat->parent->id : null,
                            'category_id' =>  null ,
                         ];
                    }



                }
                else{
                       return [
                            'category_id' => null,
                            'parent_id' =>  null ,
                         ];
                }


	}


    public function products()
    {
        return $this->hasMany(Product::class,'category_id','id');
    }

    public function requests()
    {
        return $this->hasMany(Request::class);
    }
    public function services()
    {
        return $this->hasMany(Service::class);
    }
}
