<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

trait Reviewable
{
    /**
     * Boot the trait.
     */
    protected static function bootReviewable()
    {
        static::deleting(function ($model) {
            $model->reviews->each->delete();
        });
    }

    /**
     * A reply can be favorited.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function reviews()
    {
        return $this->morphMany(Review::class, 'reviewed');
    }

    /**
     * Favorite the current reply.
     *
     * @return Model
     */
    public function review($stars,$comment)
    {
        $attributes = ['user_id' => auth()->id(),'stars' => $stars, 'comment'=> $comment];

        if (! $this->reviews()->where($attributes)->exists()) {
            return $this->reviews()->create($attributes);
        }
    }

    /**
     * Unfavorite the current reply.
     */
    public function unreviews()
    {
        $attributes = ['user_id' => auth()->id()];

        $this->reviews()->where($attributes)->get()->each->delete();
    }

    /**
     * Determine if the current reply has been favorited.
     *
     * @return boolean
     */
    public function isReviewd()
    {
        return ! ! $this->reviews->where('user_id', auth()->id())->count();
    }

    /**
     * Fetch the favorited status as a property.
     *
     * @return bool
     */
    public function getIsReviewdAttribute()
    {
        return $this->isReviewd();
    }

    /**
     * Get the number of favorites for the reply.
     *
     * @return integer
     */
    public function getReviewsCountAttribute()
    {
        return $this->reviews->count();
    }
}