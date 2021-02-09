<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class Moderator extends Authenticatable
{
    use HasRoles;
    protected $fillable = [
        'name','phone', 'email', 'password','status' , 'created_at' , 'updated_at'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    use Notifiable;

}
