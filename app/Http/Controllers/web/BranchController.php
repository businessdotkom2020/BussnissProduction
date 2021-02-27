<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Models\User;
use App\Models\Review;
use App\Models\Category;
use App\Models\Product;
use App\Models\Service;
use App\Models\Request;
use App\Models\Branch;

use App\Http\Resources\ParentCategoryResource;
use App\Http\Resources\MainCategoryResource;
use App\Http\Resources\CategoryProductsResource;
use App\Http\Resources\ProductIndexResource;
use App\Http\Resources\ReviewsRecource;
use App\Http\Resources\StoreResource;
use App\Http\Requests\AddBranshRequest;

use RealRashid\SweetAlert\Facades\Alert;
use Lang;

class BranchController extends Controller
{

    public function create_branch()
    {
        return view('Suppliers.branches.create');
    }

    public function show($category_id)
    {

        $suppliers = User::whereHas('categories', function ($query) use ($category_id) {
            $query->where('id', $category_id);
        })->get();

        $products = Product::get();

        $category = Category::find($category_id);
        $keyword = '';
        return view('categories.show', compact('products', 'suppliers', 'category', 'keyword'));
    }


    public function store(AddBranshRequest $request)
    {
        $branch = new Branch();
        $branch->name       = $request->name;
        $branch->user_id       = $request->user_id;
        $branch->email      = $request->email;
        $branch->mobile     = $request->mobile;
        $branch->land_line = $request->hotline;
        $branch->address    = $request->address;
        $branch->lat        = $request->lat;
        $branch->lang       = $request->lng;
        /********** optional ********/
        $branch->work_from    = $request->working_from;
        $branch->work_to    = $request->working_to;
        $branch->delivery_from    = $request->delivery_from;
        $branch->delivery_to    = $request->delivery_to;
        $branch->delivery_fee    = $request->delivery_fee;
        /**********************************/
        $branch->save();

        return redirect()->route('edit_profile')->with('done', 'Added Successfully ....');
    }
}