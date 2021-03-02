<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterUsersRequest;
use App\Models\{User, Product, Category};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use Lang;
use DB;
use Illuminate\Database\Eloquent\Builder;

class SuppliersController extends Controller
{
    public function index()
    {
        $suppliers = User::where('type', 'supplier')->paginate(10);
        return view('Suppliers.index', compact('suppliers'));
    }

    public function edit()
    {

        $user = request()->user();

        if ($user->type == 'supplier') {
            return view('Suppliers.edit', ['supplier' => $user]);
        }
        return view('users.edit', ['user' => $user]);
    }

    public function show($supplier_id)
    {
        $supplier = User::with('categories')->findOrFail($supplier_id);
        $supplier_categories_ids =  $supplier->categories->pluck('id');

        $supplier_products_categories = Category::whereHas('childs.childs.products',   function ($query)  use ($supplier) {
            $query->where('user_id', $supplier->id);
        })->whereIn('id', $supplier_categories_ids)->get();


        $supplier_services_categories = Category::whereIn('id', $supplier_categories_ids)->whereHas('services', function (Builder $query)  use ($supplier) {
            $query->where('user_id', $supplier->id);
        })->get();

        $supplier_requests_categories = Category::whereIn('id', $supplier_categories_ids)->whereHas('requests', function (Builder $query)  use ($supplier) {
            $query->where('user_id', $supplier->id);
        })->get();



        $all_products = $supplier->products;
        $all_services = $supplier->services;
        $all_requests = $supplier->requests;
        $all_branchs = $supplier->branchs;
        $all_clients = $supplier->clients;




        return view('Suppliers.show', compact(
            'supplier',
            'supplier_categories_ids',
            'supplier_products_categories',
            'supplier_services_categories',
            'supplier_requests_categories',
            'all_products',
            'all_services',
            'all_clients',
            'all_requests'

        ));
    }


    public function togglefollow(Request $request)
    {

        if (!Request()->user())
            return response()->json([
                "status" => "success",
                "message" => trans('general.login_first')

            ]);
        if (Request()->user()->id == $request->follower_id)
            return response()->json([
                "status" => "success",
                "message" =>
                '             لا يمكن عمل متابعة لحسابك الشخصى
'
            ]);
        $user = User::find($request->follower_id);

        if (!$user)
            return response()->json(["status" => "failed", "mesage" => "user not found"], 401);

        if ($request->user()->canFollow($user)) {
            $request->user()->following()->attach($user);
            return response()->json([
                "status" => "success",
                "class" => "following",
                "message" => "تم  المتابعة بنجاح",
                "but_status" => "Following ",
                "old_icon" => " fa-plus ",
                "icon" => " fa-check "
            ]);
        } elseif ($request->user()->canUnfollow($user)) {
            $request->user()->following()->detach($user);
            return response()->json([
                "status" => "success",
                "class" => "following",

                "message" => "تم إلغاء المتابعة بنجاح",
                "but_status" => "Follow ",
                "old_icon" => " fa-check ",
                "icon" => " fa-plus "
            ]);
        }
        return response()->json([
            "status" => "success"
        ]);
    }

    public function info($supllier_id)
    {
        $supplier = User::find($supllier_id);
        return view('Suppliers.info', compact('supplier'));
    }
}