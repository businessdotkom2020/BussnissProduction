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
use App\Http\Requests\Auth\ValidateStepOneWeb;
use App\Http\Requests\WebRegisterSupplierRequest;
use App\Http\Requests\SendRessetEmail;
use App\Notifications\PasswordResetRequest;
use App\Models\PasswordReset;
use App\Http\Requests\RessetPassword;
use Validator;

 class AuthController extends Controller
{
    public function show_register_form()
    {
        return view('auth.register');
    }


    public function ValidateStepOne(ValidateStepOneWeb $request)
    {
return request()->all();
        $validator = Validator::make($request->all(), [
            'supplier_name'   => 'required|min:5|max:20|',
            'email'           => 'required|email|unique:users,email',
            'mobile'          => 'required|string|min:9|max:20|unique:users,mobile',
            'hot_number'      => 'required|string|min:4|max:20|unique:users,hot_number',
            "category_ids"    => "required|array|min:1",
            "category_ids.*"  => "required|string|distinct|min:1|exists:categories,id",
            'password'        => 'required|min:6|max:20|confirmed',
        ]);

        if ($validator->passes()) {

            return response()->json(['success'=>'Added new records.']);
			
        }

        return response()->json(['error'=>$validator->errors()]);

        return $validated = $request->validated();

    }


    public function show_register_supplier_form()
    {
        return view('auth.supplier_register');
    }

    public function show_login_form()
    {
        return view('auth.login');
    }
    public function do_login()
    {
        if (Auth::attempt(['email' => Request()->email, 'password' => Request()->password])) {
            Alert::toast(trans('general.logged_user_successfully'), 'success');

            return redirect('/');
        }
        throw ValidationException::withMessages(['password' => trans('general.wrong_login_data')]);

        return redirect()->back();
    }

    public function register_user(RegisterUsersRequest $request)
    {


        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'country_id' => $request->country_id,
            'password' => Hash::make($request->password),
        ]);

        if ($request->file('image')) {

            $file_name     = 'image' .   rand(1, 15) . rand(155, 200) . rand(25, 55) . '.png';
            Request()->image->storeAs('public/users', $file_name);
            $user->avatar = 'users/' . $file_name;
            $user->save();
        }


        Alert::toast(trans('general.registered_user_successfully'), 'success');
        Auth::login($user);

        return redirect('/');
    }
    public function do_register_supplier(WebRegisterSupplierRequest $request)
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


        if ($request->file('store_image')) {
            $file_name     = 'image' .   rand(1, 15) . rand(155, 200) . rand(25, 55) . '.png';
            Request()->store_image->storeAs('public/users', $file_name);
            $user->avatar = 'users/' . $file_name;
        }
        if ($request->file('store_background')) {
            $file_name     = 'image' .   rand(1, 15) . rand(155, 200) . rand(25, 55) . '.png';
            Request()->store_background->storeAs('public/users', $file_name);
            $user->store_background = 'users/' . $file_name;
        }

        $user->save();

        $user->categories()->attach(Request()->category_ids);



        Alert::toast(trans('general.registered_user_successfully'), 'success');
        Auth::login($user);

        return redirect('/');
    }


    public function logout()
    {


        Auth::logout();
        Alert::toast(trans('general.logout_successfully'), 'success');

        return redirect('/');
    }



    //For fetching states
    public function getStates($id)
    {
        $states = \DB::table("states")
            ->where("country_id", $id)
            ->pluck("name", "id");
        return response()->json($states);
    }

    //For fetching cities
    public function getCities($id)
    {
        $cities = \DB::table("cities")
            ->where("state_id", $id)
            ->pluck("name", "id");
        return response()->json($cities);
    }


public function show_forget_password_form(){
    return view('auth.send_resset_password');
}
public function do_forget_password_supplier(SendRessetEmail $request){

    $user = User::where('email', Request()->email)->first();


    $passwordReset = PasswordReset::updateOrCreate(
        ['email' => $user->email],
        [
            'email' => $user->email,
            'code' => rand(1,9).rand(6,9).rand(1,9).rand(4,9).rand(11,99)
            // 'code' => 999999
        ]
    );
    $user->notify(new PasswordResetRequest($passwordReset->code));

    return redirect()->route('form.resset_password',['user_id' => $user->id]);
}

public function show_resset_password_form($user_id){
    $user = User::find($user_id);
    return view('auth.resset_password',compact('user'));

}
public function do_resset_password_supplier(RessetPassword $request){

    $password_resset = PasswordReset::where([['code', Request()->code], ['email', Request()->email]])->first();

    if(!$password_resset){
        throw ValidationException::withMessages(['field_name' => 'Wrong Resset Code ']);
    }


    $user = User::where('email', $password_resset->email)->first();
    $user->password = bcrypt(Request()->password);
    $user->save();
    $password_resset->forceDelete();

    Auth::login($user);

    Alert::toast(trans('general.password_resseted_successfully'), 'success');

    return redirect('/');
}



}