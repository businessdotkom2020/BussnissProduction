<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\{User,Notification};

use App\Http\Resources\NotificationsResource;


class NotificationsController extends Controller
{

    public function index(){
        return NotificationsResource::collection(Notification::where()->paginate(10));
    }


    
}