<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\UpdateUserInfoRequest;
use App\Http\Requests\Auth\UpdateUserPasswordRequest;
use App\Http\Resources\StoreContactResource;
use App\Http\Resources\UserResource;
use App\Http\Resources\ConsumerContactResource;
use App\Http\Resources\ServiceContactResource;
use App\Models\User;

class UsersController extends Controller
{
    public function profile()
    {
        $user = Request()->user();
         if(!$user)
        return response()->json([ "status" => false,'code' => 422, "message" => "User not found" ],422);

        return response()->json([
            "status" => true,
            'code' => 200,
            "data" => new UserResource(Request()->user())
        ]);

    }
    public function contact_consumer($id)
    {
        $user = User::find($id);
        if(!$user)
       return response()->json([ "status" => false,'code' => 422, "message" => "User not found" ],422);

       return response()->json([
           "status" => true,
           'code' => 200,
           "data" => new ConsumerContactResource($user)
       ]);
     }
    public function contact_store($id)
    {
        $user = User::find($id);
        if(!$user)
                return response()->json([ "status" => false,'code' => 422, "message" => "User not found" ],422);

        return response()->json([
            "status" => true,
            'code' => 200,
            "data" => new StoreContactResource(User::find($id))
        ]);

     }
    public function contact_service($id)
    {
        $user = User::find($id);
        if(!$user)
       return response()->json([ "status" => false,'code' => 422, "message" => "User not found" ],422);

       return response()->json([
           "status" => true,
           'code' => 200,
           "data" => new ServiceResource($user)
       ]);

     }



    public function update_user_data(UpdateUserInfoRequest $request)
    {
       $user =  Request()->user();
       $user->name = Request()->name ?  Request()->name :  $user->name;
       $user->mobile = Request()->mobile ?  Request()->mobile :  $user->mobile;
       $user->email = Request()->email ?  Request()->email :  $user->email;
       $user->whatsapp_mobile = Request()->whatsapp_mobile ?  Request()->whatsapp_mobile :  $user->whatsapp_mobile ;
       $user->address = Request()->address ?  Request()->address :  $user->address;

       if ($request->file('image'))
        {
            $file_name     = 'image'.   rand(1, 15). rand(155, 200) . rand(25, 55). '.png';
             Request()->image->storeAs('public/users',$file_name);
            $user->avatar = 'users/'. $file_name;
        }

       $user->update();



      return response()->json([
          "status" => true,
          'code' => 200,
          "data" => new UserResource($user)
      ]);

    }

    public function update_user_password(UpdateUserPasswordRequest $request)
    {
       $user =  Request()->user();
       $user->password = bcrypt(Request()->password);
       $user->update();

 return new UserResource($user);
       return response()->json([
        "status" => true,
        'code' => 200,
        "data" => new UserResource($user)
    ]);

    }
}
