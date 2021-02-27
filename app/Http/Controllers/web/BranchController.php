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

use App\Http\Resources\ParentCategoryResource;
use App\Http\Resources\MainCategoryResource;
use App\Http\Resources\CategoryProductsResource;
use App\Http\Resources\ProductIndexResource;
use App\Http\Resources\ReviewsRecource;
use App\Http\Resources\StoreResource;
use App\Http\Requests\AddReviewRequest;

use RealRashid\SweetAlert\Facades\Alert;
use Lang;

class BranchController extends Controller
{

    public function create_branch()
    {
        return view('Supplier.branches.create');
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
}