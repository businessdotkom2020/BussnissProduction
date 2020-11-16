<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Moderator;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AdminauthController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function showLoginFrom()
    {
        return view('backend.auth.login');
    }

    public function login(Request $request)
    {
        $this->validateLogin($request);
        if ($this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);
            return $this->sendLockoutResponse($request);
        }
        if ($this->attemptLogin($request)) {
            return $this->sendLoginResponse($request);
        }
        $this->incrementLoginAttempts($request);
        return $this->sendFailedLoginResponse($request);
    }

    protected function credentials(Request $request)
    {
        return ['email' => $request->{$this->username()}, 'password' => $request->password, 'status' => 1];
    }

    protected function authenticated(Request $request, $user)
    {
//        $user->generateToken();
//        response()->json(['data' => $user->toArray()], 201);
        $moderator = Moderator::find($user->id);
        /*$permissions = $moderator->permissions;
        foreach ($permissions as $permission) {
            Session::put($permission->permissions, $permission->permissions);
        }*/
        return Redirect::intended('/admin');
    }

    public function __construct()
    {
        $this->middleware('guest:moderator')->except('logout');
    }

    protected function guard()
    {
        return Auth::guard('moderator');
    }
}
