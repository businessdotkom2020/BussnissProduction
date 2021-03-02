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
        return response()->json([
            'status' => true,
            'code' => 200,
            "data" => new NotificationsResource(Notification::find($notification_id))
        ]);
    }

    public function seen()
    {
        $notifications = Notification::where('user_id', request()->user()->id)->update(['read_at' => \Carbon\Carbon::now()]);

        return response()->json([
            'status' => true,
            'code' => 200,
            "message" => "Job  Created successfully"
        ]);
    }
}