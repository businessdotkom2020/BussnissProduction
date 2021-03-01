<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = [
        'title', 'user_id', 'description', 'year_experience', 'career_level', 'open_positions', 'job_address', 'date_announced', 'salary', 'created_at', 'updated_at'
    ];
    protected $hidden = [
        'created_at', 'updated_at'
    ];
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }




    public function getCreatedAtAttribute($date)
    {
        return  $date ? \Carbon\Carbon::parse($date)->format('H:i Y/m/d') : '19:17 2021/01/25';
    }


    public function getUpdatedAtAttribute($date)
    {
        return  $date ? \Carbon\Carbon::parse($date)->format('H:i Y/m/d') : '19:17 2021/01/25';
    }
}