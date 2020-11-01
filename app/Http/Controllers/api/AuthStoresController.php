<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterSuppliersRequestFirstStep;
use App\Http\Requests\Auth\RegisterSuppliersRequestSecondStep;
use App\Models\User;
use Carbon\Carbon;
use App\Http\Requests\Auth\LoginRequest;

class AuthStoresController extends Controller
{


    public function auth_check_data(RegisterSuppliersRequestFirstStep $request){
        return response()->json([
            'status' => true,
            'code' => 200,
            ]);
    }

    public function register(RegisterSuppliersRequestSecondStep $request)
    {

        $user = new User();
        $user->name       = Request()->supplier_name;
        $user->email      = Request()->email;
        $user->mobile     = Request()->mobile;
        $user->hot_number = Request()->hot_number;
        $user->country_id = Request()->country_id;
        $user->state_id   = Request()->state_id;
        $user->city_id    = Request()->city_id;
        $user->street_nom = Request()->street_nom;
        $user->address    = Request()->address;
        $user->lat        = Request()->lat;
        $user->lang       = Request()->lang;
        $user->zip_code    = Request()->zip_code;
        $user->password    = Request()->password;
        $user->type   = 'supplier';

        $user->save();

        $user->categories()->attach(Request()->category_ids);


        $tokenResult    = $user->createToken('Personal Access Token');
        $token          = $tokenResult->token;
        $token->save();


        return response()->json([
            'status' => true,
            'code' => 200,
                'token'     =>  $tokenResult->accessToken,
                'token_type' => 'Bearer',
                'expires_at' => Carbon::parse($tokenResult->token->expires_at)->toDateTimeString()

            ],200);
    }


    public function login(LoginRequest $request)
    {

        if(is_numeric($request->get('email'))){
            $credentials=  ['mobile'=>$request->get('email'),'password'=>$request->get('password')];
        }
          elseif (filter_var($request->get('email'), FILTER_VALIDATE_EMAIL)) {
            $credentials=  ['email'=>$request->get('email'),'password'=>$request->get('password')];
        }

        if (!$token = auth()->attempt($credentials)) {
            return response()->json([
                'message' => 'The given data was invalid.',
                'errors' => [
                    'email_password' =>  ['Wrong credentials Please Try Again']
                ]
            ], 422);
        }

        $user           = Request()->user();
        $tokenResult    = $user->createToken('Personal Access Token');
        $token          = $tokenResult->token;

        $token->save();

        return response()->json([
            'token'     =>  $tokenResult->accessToken,
            'token_type' => 'Bearer',
            'expires_at' => Carbon::parse($tokenResult->token->expires_at)->toDateTimeString()

        ],200);
    }

}
