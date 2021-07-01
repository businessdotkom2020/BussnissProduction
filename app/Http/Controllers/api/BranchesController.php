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
use App\Http\Requests\RessetPassword;
use App\Http\Requests\EditBranshRequest;
use App\Http\Requests\AddBranshRequest;
use App\Http\Resources\CountryResource;
use App\Http\Resources\BranshesResource;
use App\Http\Resources\collections\BranshesCollection;
use App\Http\Resources\collections\ProductIndexCollection;
use App\Models\Country;
use App\Models\City;
use App\Models\State;
use App\Models\Branch;
use App\Models\Product;

class BranchesController extends BaseController
{
    public function my_branches()
    {
        return  new BranshesCollection(Branch::where('user_id',Request()->user()->id)->paginate(10));
    }
    public function branches_list()
    {
        return response()->json(['status' => false,'code' => 422,'data' => Branch::where('user_id',Request()->user()->id)->select('id','name')->get()],422);
    }
    public function branche_products($branch_id)
    {
        return new ProductIndexCollection(Product::where('branch_id',$branch_id)->get());
    }

        public function post(AddBranshRequest $request){
            $branch = new Branch;
            $branch->name          = $request->name;
            $branch->email         = $request->email;
            $branch->mobile        = $request->mobile;
            $branch->land_line     = $request->land_line;
            $branch->work_from     = $request->work_from;
            $branch->work_to       = $request->work_to;
            $branch->user_id       = $request->user()->id;
            $branch->delivery_from = $request->delivery_from;
            $branch->delivery_to   = $request->delivery_to;
            $branch->address       = $request->address;
            $branch->delivery_fee  = $request->delivery_fee;
            $branch->lat           = $request->lat;
            $branch->lang          = $request->lang;
            $branch->save();

        return response()->json([
            'status' => true,
            'code' => 200,
             "message" => "Bransh  Created successfully"
            ]) ;
        }


public function store_branches($id){
    return new BranshesCollection(Branch::where('user_id',$id)->paginate(10));
}

public function show($id){
    return response()->json([
        'status' => true,
        'code' => 200,
         "data" => new BranshesResource(Branch::find($id))
        ]) ;
 }
public function update($id  , EditBranshRequest $request){
    $branch = Branch::find($id);
           if(!$branch)
                return response()->json(['status' => false,'code' => 422, 'message' => 'not fond'],422);
            $branch->name           = $request->name           ? $request->name           : $branch->name;
            $branch->email          = $request->email          ? $request->email          : $branch->email;
            $branch->mobile         = $request->mobile         ? $request->mobile         : $branch->mobile;
            $branch->land_line      = $request->land_line      ? $request->land_line      : $branch->land_line;
            $branch->work_from      = $request->work_from      ? $request->work_from      : $branch->work_from;
            $branch->work_to        = $request->work_to        ? $request->work_to        : $branch->work_to;
            $branch->delivery_from  = $request->delivery_from  ? $request->delivery_from  : $branch->delivery_from;
            $branch->delivery_to    = $request->delivery_to    ? $request->delivery_to    : $branch->delivery_to;
            $branch->address        = $request->address        ? $request->address        : $branch->address;
            $branch->delivery_fee   = $request->delivery_fee   ? $request->delivery_fee   : $branch->delivery_fee;
            $branch->lat            = $request->lat            ? $request->lat            : $branch->lat;
            $branch->lang           = $request->lang           ? $request->lang           : $branch->lang;

                      $branch->update();


        return response()->json([
            'status' => true,
                        'code' => 200,

             "message" => "Bransh  Updated successfully"
            ]) ;
}

public function destroy($id){
              $bransh =  Branch::find($id) ;

                 if(!$bransh)
                 return response()->json(['status' => false,'code' => 422, 'message' => 'not fond'],422);
                 $bransh->delete();

        return response()->json([
            'status' => true,
            'code' => 200,
             "message" => "Bransh Deleted successfully"

            ]) ;
}

}