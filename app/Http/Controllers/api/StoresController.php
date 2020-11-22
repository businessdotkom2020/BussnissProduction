<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\UpdateStoreInfoRequest;
use App\Http\Resources\ServicesIndexResource;
use App\Http\Resources\SupplierIndexResource;
use App\Http\Resources\JobsResource;
use App\Http\Requests\Auth\UpdateUserPasswordRequest;

class StoresController extends Controller
{


    public function store_jobs($id)
    {
        return  JobsResource::collection(\App\Models\Job::where('user_id',$id)->paginate(10));
    }

    public function my_jobs()
    {
        return  JobsResource::collection(\App\Models\Job::where('user_id',Request()->user()->id)->paginate(10));
    }


    public function store_services($id)
    {
        return  ServicesIndexResource::collection(\App\Models\Service::where('user_id',$id)->paginate(10));
    }


    public function profile()
    {

        return response()->json([
            "status" => true,
            "code" => 200,
            "data" => new SupplierIndexResource(Request()->user())
            ]);


    }
    public function show_factory($supplier_id)
    {
        $supplier = \App\Models\User::find($supplier_id);
        if(!\App\Models\User::find($supplier_id))
                                return response()->json(['status' => 'failed', 'message' => 'not fond']);


        return response()->json([
            "status" => true,
            "code" => 200,
            "data" => new SupplierIndexResource($supplier)
            ]);
    }

    public function suppliers_services()
    {
        return  ServicesIndexResource::collection(\App\Models\Service::where('user_id',Request()->user()->id)->paginate(10));
    }


    public function update_supplier_data(UpdateStoreInfoRequest $request)
    {
        $user = Request()->user();
        $user->name           = Request()->supplier_name ? Request()->supplier_name : $user->name;
        $user->email          = Request()->email ? Request()->email : $user->email;
        $user->mobile         = Request()->mobile ? Request()->mobile : $user->mobile;
        $user->hot_number     = Request()->hot_number ? Request()->hot_number : $user->hot_number;
        $user->country_id     = Request()->country_id ? Request()->country_id : $user->country_id;
        $user->state_id       = Request()->state_id ? Request()->state_id : $user->state_id;
        $user->city_id        = Request()->city_id ? Request()->city_id : $user->city_id;
        $user->street_nom     = Request()->street_nom ? Request()->street_nom : $user->street_nom;
        $user->address        = Request()->address ? Request()->address : $user->address;
        $user->postal_code    = Request()->postal_code ? Request()->postal_code : $user->postal_code;
        $user->lat            = Request()->lat ? Request()->lat : $user->lat;
        $user->lang           = Request()->lang ? Request()->lang : $user->lang;
        $user->zip_code       = Request()->zip_code ? Request()->zip_code : $user->zip_code;
        $user->working_from   = Request()->working_from ? Request()->working_from : $user->working_from;
        $user->working_to     = Request()->working_to ? Request()->working_to : $user->working_to;
        $user->delivery_time  = Request()->delivery_time ? Request()->delivery_time : $user->delivery_time;
        $user->delivery_fee   = Request()->delivery_fee ? Request()->delivery_fee : $user->delivery_fee;
        $user->year_founded   = Request()->year_founded ? Request()->year_founded : $user->year_founded;
        $user->instagram_url   = Request()->instagram ? Request()->instagram : $user->instagram_url;
        $user->facebook_url   = Request()->facebook ? Request()->facebook : $user->facebook_url;
        $user->linkedin_url   = Request()->linkedin ? Request()->linkedin : $user->linkedin_url;
        $user->youtube_url   = Request()->youtube ? Request()->youtube : $user->youtube_url;
        $user->website   = Request()->website ? Request()->website : $user->website;
        $user->whatsapp_mobile   = Request()->whatsapp_mobile ? Request()->whatsapp_mobile : $user->whatsapp_mobile;

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

       $user->update();

       if ($request->category_ids)
        {
          $user->categories()->sync(Request()->category_ids);
        }

        return response()->json([
        "status" => true,
        "code" => 200,
        "data" => new SupplierIndexResource(Request()->user())
        ]);
    }



    public function update_store_password(UpdateUserPasswordRequest $request)
    {

        $user =  Request()->user();
        $user->password = bcrypt(Request()->password);
        $user->update();

        return response()->json([
            "status" => true,
            "code" => 200,
            "data" => new SupplierIndexResource(Request()->user())
        ]);

    }
}
