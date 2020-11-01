<?php

namespace App\Models;

use App\Models\Traits\CanBeDefault;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    use CanBeDefault;
    
    protected $fillable = [
        'card_type',
        'last_four',
        'provider_id',
        'default',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
