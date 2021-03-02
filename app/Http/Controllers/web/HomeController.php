<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    public function home()
    {
        $latest_products = \App\Models\Product::latest()->limit(12)->get();
        $recommended_products = \App\Models\Product::oldest()->limit(12)->get();
        $latest_products_ids = $latest_products->pluck('user_id')->toArray();

        $common_products = \App\Models\Product::limit(12)->orderBy('name', 'asc')->get();
        $common_products_ids = $common_products->pluck('user_id')->toArray();

        $latest_requests = \App\Models\Request::latest()->limit(12)->get();
        $latest_requests_ids = $latest_requests->pluck('user_id')->toArray();

        $home_suppliers = \App\Models\User::where('type', 'supplier')->limit(18)->get();

        $home_services = \App\Models\Service::latest()->limit(12)->get();
        $home_services_id = $home_services->pluck('user_id')->toArray();


        $result = array_merge($home_services_id, $latest_requests_ids, $common_products_ids, $latest_products_ids);

        $owners = User::whereIn('id', array_unique($result))->get();

        return view('home', compact(
            'latest_products',
            'common_products',
            'latest_requests',
            'recommended_products',
            'home_suppliers',
            'home_services',
            'owners',
        ));
    }
}
