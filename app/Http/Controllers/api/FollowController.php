<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Resources\SupplierFollowResource;
use App\Http\Resources\SupplierIndexResource;


class FollowController extends Controller
{
    
    public function follow(Request $request, $id)
    {
        $user = User::find($id);
        
        if(!$user)
            return response()->json([ "status" => "failed" , "mesage" => "user not found" ],401);
        
        if ($request->user()->canFollow($user)) {
            $request->user()->following()->attach($user);
        }
        elseif($request->user()->canUnfollow($user)){
            $request->user()->following()->detach($user);
        }
        return response()->json([
            "status" => "success"
            ]);
    }
    
    
        public function followers_count(Request $request, $id)
    {
        $user = User::find($id);
                if(!$user)
            return response()->json([ "status" => "failed" , "mesage" => "user not found" ],401);
        return response()->json([
            "data" => [
                "count" => $user->followers()->count()
                ]
            ]); 
    }
    
    
                public function following(Request $request)
    {
         $user = $request->user();
        // return $user->following()->get();
        return  SupplierFollowResource::collection($user->following()->get()) ; 
    }
    
            public function following_count(Request $request)
    {
             $user = $request->user();
        return response()->json([
            "data" => [
                "count" => $user->following()->count()
                ]
            ]); 
    }
}