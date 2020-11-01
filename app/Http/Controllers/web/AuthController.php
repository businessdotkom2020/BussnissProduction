<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterUsersRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use Auth;
use Illuminate\Validation\ValidationException;
use App\Http\Requests\Auth\RegisterSuppliersRequestFirstStep;
use App\Http\Requests\Auth\RegisterSuppliersRequestSecondStep;
class AuthController extends Controller
{
    public function show_register_form(){
        return view('auth.register');
    }
    public function show_register_supplier_form (){
        return view('auth.supplier_register');
    }

    public function show_login_form(){
        return view('auth.login');
    }
    public function do_login(){
      if (Auth::attempt(['email' => Request()->email, 'password' => Request()->password], 1)) {
         Alert::toast(trans('general.logged_user_successfully'), 'success');

      return redirect('/');
}
throw ValidationException::withMessages(['field_name' => trans('general.wrong_login_data')]);

return redirect()->back();
    }

    public function register_user(RegisterUsersRequest $request){


      $user = User::create([
          'name' => $request->name,
          'email' => $request->email,
          'mobile' => $request->mobile,
          'country_id' => $request->country_id,
          'password' => Hash::make($request->password),
      ]);

             if ($request->file('image'))
        {

            $file_name     = 'image'.   rand(1, 15). rand(155, 200) . rand(25, 55). '.png';
             Request()->image->storeAs('public/users',$file_name);
            $user->avatar = 'users/'. $file_name;
            $user->save();
        }


        Alert::toast(trans('general.registered_user_successfully'), 'success');
Auth::login($user);

      return redirect('/');
    }
    public function do_register_supplier (RegisterSuppliersRequestSecondStep $request){



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
        $user->type   = Request()->type;


       if ($request->file('store_image'))
        {
            $file_name     = 'image'.   rand(1, 15). rand(155, 200) . rand(25, 55). '.png';
             Request()->store_image->storeAs('public/users',$file_name);
            $user->avatar = 'users/'. $file_name;
        }
       if ($request->file('store_background'))
        {
            $file_name     = 'image'.   rand(1, 15). rand(155, 200) . rand(25, 55). '.png';
             Request()->store_background->storeAs('public/users',$file_name);
            $user->store_background = 'users/'. $file_name;
        }

        $user->save();

        $user->categories()->attach(Request()->category_ids);



        Alert::toast(trans('general.registered_user_successfully'), 'success');
        Auth::login($user);

      return redirect('/');

    }


    public function logout(){


        Auth::logout();
        Alert::toast(trans('general.logout_successfully'), 'success');

      return redirect('/');

    }



    //For fetching states
public function getStates($id)
{
    $states = \DB::table("states")
                ->where("country_id",$id)
                ->pluck("name","id");
    return response()->json($states);
}

//For fetching cities
public function getCities($id)
{
    $cities= \DB::table("cities")
                ->where("state_id",$id)
                ->pluck("name","id");
    return response()->json($cities);
}

}
