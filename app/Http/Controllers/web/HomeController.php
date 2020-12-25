<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $latest_products = \App\Models\Product::latest()->limit(12)->get();
        $latest_products_ids = $latest_products->pluck('id');
        
        $common_products = \App\Models\Product::limit(12)->orderBy('name','asc')->get();
        $common_products_ids = $common_products->pluck('id');
        
        $latest_requests = \App\Models\Request::latest()->limit(12)->get();
        $latest_requests_ids = $latest_requests->pluck('id');
        
        $home_suppliers = \App\Models\User::where('type','supplier')->get();
 
        $home_services = \App\Models\Service::latest()->limit(12)->get();
        $home_services_id = $home_services->pluck('id');

  
    $result = array_merge($home_services_id, $latest_requests_ids ,$common_products_ids ,$latest_products_ids);

    return $result;
    
        return view('home',compact(
            'latest_products',
            'common_products',
            'latest_requests',
            'home_suppliers',
            'home_services',
        ));
    }
}
