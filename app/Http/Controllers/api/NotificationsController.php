<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\collections\NotificationsCollections;
use Illuminate\Http\Request;

use App\Models\{User, Notification};

use App\Http\Resources\NotificationsResource;


class NotificationsController extends Controller
{

    public function index()
    {
        return new NotificationsCollections(Notification::where('user_id', request()->user()->id)->get());
    }

    public function show($notification_id)
    {
        return new NotificationsCollections(Notification::where([['user_id', request()->user()->id], ['id', $notification_id]])->get());
    }

    public function seen()
    {
        $notifications = Notification::where('user_id', request()->user()->id)->get();
        return new NotificationsCollections(Notification::where('user_id', auth()->id)->get());
    }
}