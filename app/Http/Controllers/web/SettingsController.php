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

class SettingsController extends Controller
{

    public function privacy()
    {
        return view('settings.privacy');
    }

    public function about()
    {
        return view('settings.about');
    }
    public function terms()
    {
        return view('settings.terms');
    }
    public function contact()
    {
        return view('settings.contact');
    }

    public function add_subscriber()
    {
        $subscriber = \DB::table('subscribers')->where('email', request()->email)->first();
        if (!$subscriber)
            Alert::toast(trans('general.already_subscribed'), 'success');

        $subscriber = \DB::table('subscribers')->insertOrIgnore([
            ['email' => request()->email]
        ]);

        Alert::toast(trans('general.subscription_has_been_successful'), 'success');

        return redirect()->back();
    }
}