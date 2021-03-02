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

class UsersController extends Controller
{
    public function profile()
    {
        $suppliers = User::where('type', 'supplier')->paginate(10);
        return view('users.index', compact('suppliers'));
    }
}