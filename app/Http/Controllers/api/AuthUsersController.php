<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterUsersRequest;
use App\Http\Resources\PrivateUserResource;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RessetPasswordRequest;
use App\Http\Requests\Auth\RessetUserPasswordRequest;
use App\Http\Requests\Auth\SendUsersRessetCodeRequest;
use App\Notifications\SignupActivate;
use App\Models\User;
use App\Notifications\PasswordResetRequest;
use Carbon\Carbon;
use App\Models\PasswordReset;
use App\Http\Requests\SendRessetEmail;
use App\Http\Requests\SocialAuth;
use App\Http\Requests\RessetPassword;
use App\Http\Resources\CountryResource;
use App\Models\Country;
use App\Models\City;
use App\Models\State;
use App\Http\Resources\UserResource;
use Lang;

use App\Http\Resources\StoreContactResource;


class AuthUsersController extends BaseController
{

    /**
     * Social Login
     *
     * @param  [string] name
     * @param  [string] mobile
     * @param  [string] email
     * @param  [string] country_id
     * @param  [string] password
     */


    public function social(SocialAuth $request)
    {
        $check_user = User::where([['email', Request()->email], ['social_auth_type', request()->social_auth_type]])->first();

        if (User::where([['email', Request()->email], ['social_auth_type', null]])->first()) {
            return response()->json([
                "status" => false,
                "code" => 422,
                "message" => "The given data was invalid.",
                "errors" => [
                    "email" => [
                        "The email has already been taken."
                    ]
                ],
            ], 422);
        }
        if (!$check_user) {


            $user = User::create($request->only('name', 'email', 'social_auth_type', 'social_id'));
        } else {
            $user = $check_user;
        }

        $tokenResult    = $user->createToken('Personal Access Token');
        $token          = $tokenResult->token;
        $token->save();

        return response()->json([
            'status' => true,
            'code' => 200,
            'message' => 'Registered  Successfully',
            'data' => [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
                'mobile' => $user->mobile,

                'token'     =>  $tokenResult->accessToken,
                'token_type' => 'Bearer',
                'expires_at' => Carbon::parse($tokenResult->token->expires_at)->toDateTimeString()
            ],


        ], 200);
    }
    /**
     * register user and create token
     *
     * @param  [string] name
     * @param  [string] mobile
     * @param  [string] email
     * @param  [string] country_id
     * @param  [string] password
     */


    public function register_users(RegisterUsersRequest $request)
    {
        $user = User::create($request->only('name', 'mobile', 'email', 'country_id', 'password'));

        $tokenResult    = $user->createToken('Personal Access Token');
        $token          = $tokenResult->token;
        $token->save();

        return response()->json([
            'status' => true,
            'code' => 200,
            'message' => 'Registered  Successfully',


            'data' => [
                'user' => new UserResource($user),
                'token' => $tokenResult->accessToken
                // 'meta' => [
                //     'token'     =>  $tokenResult->accessToken,
                //     'token_type' => 'Bearer',
                //     'expires_at' => Carbon::parse($tokenResult->token->expires_at)->toDateTimeString()
                // ]
            ]

        ], 200);
    }



    /**
     * Login user and create token
     *
     * @param  [string] email
     * @param  [string] password
     * @param  [boolean] remember_me
     * @return [string] access_token
     * @return [string] token_type
     * @return [string] expires_at
     */

    public function login_users(LoginRequest $request)
    {

        if (is_numeric($request->get('email'))) {
            $credentials =  ['mobile' => $request->get('email'), 'password' => $request->get('password')];
        } elseif (filter_var($request->get('email'), FILTER_VALIDATE_EMAIL)) {
            $credentials =  ['email' => $request->get('email'), 'password' => $request->get('password')];
        }

        if (!$token = auth()->attempt($credentials)) {
            return response()->json([
                'status' => false,
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
            'status' => true,
            'code' => 200,
            'data' => [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
                'mobile' => $user->mobile,

                'token'     =>  $tokenResult->accessToken,
                'token_type' => 'Bearer',
                'expires_at' => Carbon::parse($tokenResult->token->expires_at)->toDateTimeString()
            ],

        ], 200);
    }

    /**
     * Login user and create token
     *
     * @param  [string] email
     * @param  [string] password
     * @param  [boolean] remember_me
     * @return [string] access_token
     * @return [string] token_type
     * @return [string] expires_at
     */

    public function login(LoginRequest $request)
    {

        
        if (is_numeric($request->get('email'))) {
            $credentials =  ['mobile' => $request->get('email'), 'password' => $request->get('password')];
        } elseif (filter_var($request->get('email'), FILTER_VALIDATE_EMAIL)) {
            $credentials =  ['email' => $request->get('email'), 'password' => $request->get('password')];
        }

        if (!$token = auth()->attempt($credentials)) {
            return response()->json([
                'status' => false,
                'code' => 422,
                'message' => 'the giving data did not match our records',
                'errors' => [
                    'email_password' =>  [Lang::get('validation.wrong_email_password')]
                ]
            ], 422);
        }

        $user           = Request()->user();
        $tokenResult    = $user->createToken('Personal Access Token');
        $token          = $tokenResult->token;

        $token->save();

        return response()->json([
            'status' => true,
            'code' => 200,
            'message' => 'Logged in Successfully',
            'data' => [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
                'mobile' => $user->mobile,
                'type'     => $user->type ? "Supplier" : "user",
                'token'     =>  $tokenResult->accessToken,
                'token_type' => 'Bearer',
                'expires_at' => Carbon::parse($tokenResult->token->expires_at)->toDateTimeString()
            ],


        ], 200);
    }


    /**
     * Login user and create token
     * First Step Check if User Alredy verified
     * Second Step Check if verify Code is true and verify User if not
     * Third Step Check return error code message
     */

    public function activate_users()
    {
        if (($user = Request()->user())->email_verified_at)
            return  $this->sendError('activation error', 'This User Alredy Active');

        if ($user->verify_code == Request()->code) {
            $user->email_verified_at = Carbon::now();
            $user->update();
            return $this->sendResponse($user, 'User is now Active');
        }

        return  $this->sendError('error code', 'Wrong Activation Code');
    }


    /**
     * Logout user (Revoke the token)
     *
     * @return [string] message
     */
    public function logout_users(Request $request)
    {
        $request->user()->token()->revoke();
        return response()->json([
            'status' => true,
            'code' => 200,
            'message' => 'Successfully logged out'
        ]);
    }

    // public function send_resset_email(SendUsersRessetCodeRequest $request)
    // {
    //     $user =  User::where('email',Request()->email)->first();
    //     $user->forget_code = rand(1,9).rand(6,9).rand(1,9).rand(4,9).rand(14,99);
    //     $user->save();
    //     $user->notify(new PasswordResetRequest($user->forget_code));

    //     return response()->json([
    //         'data' => [
    //         'message' =>'Resset Email Sent Successfully',
    //         ]
    //     ], 200);
    // }
    public function enter_code(RessetPasswordRequest $request)
    {
        $user = User::where('email', Request()->email)->first();


        $tokenResult    = $user->createToken('Personal Access Token');
        $token          = $tokenResult->token;
        $token->save();

        return response()->json([

            'token'     =>  $tokenResult->accessToken,
            'token_type' => 'Bearer',
            'expires_at' => Carbon::parse($tokenResult->token->expires_at)->toDateTimeString()

        ], 200);
    }


    public function send_resset_email(SendRessetEmail $request)
    {
        $user = User::where('email', Request()->email)->first();


        $passwordReset = PasswordReset::updateOrCreate(
            ['email' => $user->email],
            [
                'email' => $user->email,
                'code' => rand(1,9).rand(6,9).rand(1,9).rand(4,9)
                // 'code' => 999999
            ]
        );
        $user->notify(new PasswordResetRequest($passwordReset->code));

        return response()->json([

            'status' => true,
            'code' => 200,
            'data'    => [
                'email' => $user->email,
            ],
            'message' => 'message sent successfuly',

        ], 200);
    }



    public function resset_password(RessetPassword $request)
    {
        $password_resset = PasswordReset::where([['code', Request()->code], ['email', Request()->email]])->first();


        $user = User::where('email', $password_resset->email)->first();
        $user->password = bcrypt(Request()->password);
        $user->save();

        $tokenResult    = $user->createToken('Personal Access Token');
        $token          = $tokenResult->token;
        $token->save();

        $password_resset->forceDelete();

        return response()->json([
            'status' => true,
            'code' => 200,
            'data' => [
                'token'     =>  $tokenResult->accessToken,
                'token_type' => 'Bearer',
                'expires_at' => Carbon::parse($tokenResult->token->expires_at)->toDateTimeString()
            ]

        ], 200);
    }


    public function countries()
    {


        return response()->json([

            'status' => true,
            'code'    => 200,
            'data' => CountryResource::collection(Country::get())

        ]);
    }
    public function state($id)
    {

        return response()->json([

            'status' => true,
            'code'    => 200,
            'data' => CountryResource::collection(State::where('country_id', $id)->get())

        ]);
    }
    public function city($id)
    {
        return response()->json([
            'status' => true,
            'code'    => 200,
            'data' => CountryResource::collection(City::where('state_id', $id)->get())
        ]);
    }
}