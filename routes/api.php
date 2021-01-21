<?php

Route::group(['prefix' => 'v1', 'as' => 'api.v1.', 'namespace' => 'Api\\V1\\'], function () {
    Route::post('/dependent-dropdown', ['uses' => 'DependentDropdownController@index', 'as' => 'dropdown']);
});
Route::get('categories/list', 'api\CategoryController@list_categories');
Route::get('deals', 'api\ProductController@offers');
Route::get('used-categories', 'api\ProductController@used');
Route::get('category/info/{id}', 'api\ProductController@category_info');
Route::get('countries', 'api\AuthUsersController@countries');
Route::get('state/{country_id}', 'api\AuthUsersController@state');
Route::get('city/{state_id}', 'api\AuthUsersController@city');

Route::get('supplier/{supplier_id}/tags', 'api\ProductController@factory_tags');
Route::get('supplier/{supplier_id}/tags/{tag_id}', 'api\ProductController@factory_tag');
Route::get('supplier/{supplier_id}/used-products', 'api\ProductController@factory_used');
Route::get('supplier/{supplier_id}/sub-sub-categories', 'api\ProductController@factory_categories');
Route::get('supplier/{supplier_id}/sub-sub-categories/{sub_sub_category_id}', 'api\ProductController@factory_categories_products');

Route::post('search', 'api\HomeController@filter');
Route::get('curency', function ($amount = 44, $from = 'usd', $to = 'egp') {
    $url = "http://www.google.com/finance/converter?a=$amount&from=$from&to=$to";

    $request = curl_init();
    $timeOut = 0;
    curl_setopt ($request, CURLOPT_URL, $url);
    curl_setopt ($request, CURLOPT_RETURNTRANSFER, 1);

    curl_setopt ($request, CURLOPT_USERAGENT,"Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1)");
    curl_setopt ($request, CURLOPT_CONNECTTIMEOUT, $timeOut);
    $response = curl_exec($request);
    curl_close($request);

    return $response;
   }

   if(isset($_POST['convert_currency']))
   {
    $amount=$_POST['amount'];
    $from=$_POST['convert_from'];
    $to=$_POST['convert_to'];

    $rawData = currency_converter($from,$to,$amount);
    $regex = '#\<span class=bld\>(.+?)\<\/span\>#s';
    preg_match($regex, $rawData, $converted);
    $result = $converted[0];
    echo $result;
});


Route::get('home/all-industrial-areas', 'api\ZoneController@index');
Route::get('home/industrial-areas/{state_id}', 'api\ZoneController@show');
Route::get('home/industrial-areas-slider', 'api\ZoneController@slider');

Route::get('industrial-areas/{industrial_areas_id}/products', 'api\ZoneController@zone_products');
Route::get('industrial-areas/{industrial_areas_id}/suppliers', 'api\ZoneController@zone_factories');


Route::get('apphome-with-slider', 'api\HomeController@home');
Route::get('home/tags/{tag_id}', 'api\HomeController@tag');

Route::get('avalible/lang', 'api\ProductController@available_languages');

Route::get('home/deals-suppliers', 'api\HomeController@hot_offers_suppliers');
Route::get('home/deals-products', 'api\HomeController@hot_offers_products');


Route::get('product/{id}', 'api\ProductController@show');
Route::get('products/{id}/suggested/supplier', 'api\ProductController@suggested_supplier');
Route::get('products/{id}/suggested/category', 'api\ProductController@suggested_category');


Route::get('home/suggested-suppliers', 'api\HomeController@suggested_suppliers');
Route::get('home/suggested-products', 'api\HomeController@suggested_products');
Route::get('home/suggested-services', 'api\HomeController@suggested_services');





Route::get('attributes', 'api\ProductController@attributes');
Route::get('category/{id}/attributes', 'api\ProductController@attributes_by_category');
Route::get('attribute/{id}/values', 'api\ProductController@attribute_values');


Route::get('home/suppliers-directory', 'api\HomeController@suppliers');


Route::get('home/services-directory', 'api\HomeController@services');
Route::get('home/services-categories', 'api\HomeController@services_categories');
Route::get('services-by-category/{category_id}', 'api\HomeController@services_categories_show');




Route::get('sub/sub/category/{sub_sub_category_id}/products', 'api\CategoryController@category_products');
Route::get('sub/sub/category/{sub_sub_category_id}/products/used', 'api\CategoryController@category_used_products');
Route::get('sub/sub/category/{sub_sub_category_id}/suppliers', 'api\CategoryController@category_stores');
Route::get('sub/sub/category/{sub_sub_category_id}/companies', 'api\CategoryController@category_companies');



// Auth Routes Sign Up || Log in || Log out || Resset Password

Route::group(['prefix' => 'auth'], function () {

    Route::post('social', 'api\AuthUsersController@social');
    Route::post('login', 'api\AuthUsersController@login');
    Route::post('register/user', 'api\AuthUsersController@register_users');
    Route::post('register/supplier', 'api\AuthStoresController@register');
    Route::post('ValidateSupplierFirstStep', 'api\AuthStoresController@auth_check_data');
    Route::post('register/supplier', 'api\AuthStoresController@register');
    Route::post('register/supplier/firststep', 'api\AuthStoresController@register');


    Route::group(['middleware' => 'auth:api'], function () {
        Route::get('logout', 'api\AuthUsersController@logout_users');
        Route::post('activate', 'api\AuthUsersController@activate_users');
    });
});




Route::post('test', function () {
    return Request()->all();
});


Route::get('request/{request_id}/details', 'api\RequestsController@show');


Route::get('{review_type}/{id}/reviews', 'api\ReviewController@reviews');
//   Route::get('{type}/{id}/reviews' , 'api\ReviewController@product_reviews');
//   Route::get('{type}/{supplier_id}/reviews' , 'api\ReviewController@store_reviews');
//   Route::get('{type}/{service_id}/reviews' , 'api\ReviewController@service_reviews');


Route::get('all-requests', 'api\RequestsController@index');



Route::get('supplier/{supplier_id}/services', 'api\StoresController@store_services');
Route::get('supplier/{supplier_id}/jobs', 'api\StoresController@store_jobs');
Route::get('supplier/{supplier_id}/clients', 'api\ClientController@supplier_Clients');


//   App information
Route::post('customer/service', 'api\SettingsController@customer_service');
Route::get('about', 'api\SettingsController@about');
Route::get('terms/conditions', 'api\SettingsController@terms_conditions');
Route::get('privacy/policy', 'api\SettingsController@privacy_policy');
Route::get('social/links', 'api\SettingsController@social_links');

Route::get('service/{service_id}/details', 'api\ServiceController@service_Show');
Route::get('supplier/{supplier_id}/followers/count', 'api\FollowController@followers_count');


Route::get('user/{user_id}/contact', 'api\UsersController@contact_consumer');
Route::get('supplier/{user_id}/contact', 'api\UsersController@contact_store');
Route::get('service/{id}/contact', 'api\UsersController@contact_service');
Route::get('supplier/{supplier_id}/details', 'api\StoresController@show_factory');



Route::get('supplier/{user_id}/branches', 'api\BranchesController@store_branches');
Route::get('job/{job_id}/details', 'api\JobController@show');

Route::get('product/{product_id}/update/get', 'api\ProductController@update_product_get');
Route::get('branch/{id}/details', 'api\BranchesController@show');
Route::get('client/{client_id}/details', 'api\ClientController@show');

// Auth Routes Sign Up || Log in || Log out || Resset Password
Route::group(['middleware' => 'auth:api'], function () {


    Route::post('notifications', 'api\NotificationsController@index');


    Route::post('{review_type}/{id}/makereview', 'api\ReviewController@review');
    Route::post('review/{review_id}/delete', 'api\ReviewController@destroy');
    Route::get('my-reviews', 'api\ReviewController@supplier_reviews');
    Route::get('my-jobs', 'api\StoresController@my_jobs');
    Route::get('my-branches', 'api\BranchesController@my_branches');
    Route::get('my-services', 'api\ServiceController@my_services');


    Route::post('product/{product_id}/update', 'api\ProductController@update_product');

    //   Service Routes
    Route::get('supplier/services', 'api\StoresController@suppliers_services');
    Route::post('service/new', 'api\ServiceController@store_service');
    Route::post('service/{service_id}/update', 'api\ServiceController@update_service');
    Route::post('service/{service_id}/delete', 'api\ServiceController@destroy');
    Route::post('service/{service_id}/favorite', 'api\FavoritesController@request_service');


    Route::get('my-favorite/services', 'api\FavoritesController@get_favorite_services');
    Route::get('my-favorite/requests', 'api\FavoritesController@get_favorite_requests');
    Route::get('my-favorite/products', 'api\FavoritesController@get_favorite_products');

    Route::post('branch/new', 'api\BranchesController@post');
    Route::post('branch/{id}/update', 'api\BranchesController@update');
    Route::post('branch/{id}/delete', 'api\BranchesController@destroy');



    // Jobs


    Route::post('job/new', 'api\JobController@post');
    // Route::get('supplier/{user_id}/jobs'   , 'api\JobController@supplier_jobs');
    Route::post('job/{job_id}/update', 'api\JobController@update');
    Route::post('job/{job_id}/delete', 'api\JobController@destroy');

    Route::post('client/new', 'api\ClientController@post');
    // Route::get('supplier/{user_id}/jobs'   , 'api\JobController@supplier_jobs');
    Route::get('my/clients', 'api\ClientController@my_clients');
    Route::post('client/{client_id}/update', 'api\ClientController@update');
    Route::post('client/{client_id}/delete', 'api\ClientController@destroy');



    //  Add  Review For   Requests

    Route::post('requests/new', 'api\RequestsController@store');
    Route::post('request/{request_id}/update', 'api\RequestsController@update');
    Route::post('request/{request_id}/delete', 'api\RequestsController@destroy');
    Route::post('request/{request_id}/favorite', 'api\FavoritesController@request_favorite');
    Route::get('my-requests', 'api\RequestsController@my_requests');

    //  Add  Review For   Product  && Request && Store && Service
    Route::post('{supplier_id}/follow', 'api\FollowController@follow');
    Route::get('my-follow', 'api\FollowController@following');
    Route::get('supplier/following', 'api\FollowController@following');
    Route::get('user/following/count', 'api\FollowController@following_count');




    Route::get('supplier/products', 'api\ProductController@store_products');
    Route::post('product/{product_id}/favorite', 'api\FavoritesController@product_favorite');
    Route::post('supplier/{supplier_id}/favorite', 'api\FavoritesController@store_favorite');
    Route::post('service/{service_id}/favorite', 'api\FavoritesController@service_favorite');




    Route::post('user-profile/update-info', 'api\UsersController@update_user_data');
    Route::post('user-profile/update-password', 'api\UsersController@update_user_password');
    Route::get('user-profile', 'api\UsersController@profile');



    Route::get('suplier-profile', 'api\StoresController@profile');
    Route::post('suplier-profile/update-info', 'api\StoresController@update_supplier_data');
    Route::post('suplier-profile/update-password', 'api\StoresController@update_store_password');
    Route::post('product/new', 'api\ProductController@store');
    Route::post('product/new/images', 'api\ProductController@store_images');
    Route::post('product/{product_id}/images/update', 'api\ProductController@update_images');
    Route::post('product/{id}/delete', 'api\ProductController@destroy');
});
Route::get('auth/categories', 'api\CategoryController@auth_categories');
Route::get('brands/list', 'api\CategoryController@brands_list');
Route::get('tags/list', 'api\CategoryController@tags_list');

Route::get('main/categories', 'api\CategoryController@auth_categories');
Route::get('sub/categories/{id}', 'api\CategoryController@sub_add_categories');
Route::get('sub/sub/categories/{id}', 'api\CategoryController@sub_sub_add_categories');



Route::post('send-resset-email', 'api\AuthUsersController@send_resset_email');

Route::post('resset-password',  'api\AuthUsersController@resset_password');

// Route::post('search' , 'api\SearchController@search');



Route::get('send-notf', function () {
    $title = "Soma Ha7beby";
    $body = "خود قلبى ";
    $token = "";
    return sendGCM($token, $title, $body);
});

Route::get('faresponse', function () {
    $merchantCode    = 'MPW3sIOoZt77K//+SCWImw==';
    $merchantRefNumber  = '155856';
    $merchant_sec_key =  '5238a5e389bb40139783de0a68b3acb5';

    return $signature = hash('sha256', $merchantCode . $merchantRefNumber . $merchant_sec_key);
    $httpClient = new \GuzzleHttp\Client(); // guzzle 6.3
    $response = $httpClient->request('GET', 'https://atfawry.com/ECommerceWeb/Fawry/payments/status', [
        'query' => [
            'merchantCode' => 'MPW3sIOoZt77K//+SCWImw==',
            'merchantRefNumber' => '456213723',
            'signature' => 'dbc7f366551c4d4b25ba69d894a975819eb017905cef85f83e65575ba55793c7'
        ]
    ]);
    $response = json_decode($response->getBody()->getContents(), true);

    return $response;
});







// function sendGCM( $token ,$title ,$body) {

// $url = "https://fcm.googleapis.com/fcm/send";
//   $token = $token;
//   $serverKey = 'AAAAEDQmyAo:APA91bHDwyxoppYQw2lrbJARJ3QlZpYSJKmqzZoO2-s2cYaipWzZuW80l6f7brjDHNTajcPgH90rvc_s05x8oteqriY_ONyfYs7Df6Z0fOF-LjVVt0m5SttRWg9E9I8TZOX8AcPaddxG';
//   $title =$title;
//   $body = $body;
//   $notification = array('title' =>$title , 'body' => $body, 'sound' => 'default', 'badge' => '1');
//   $arrayToSend = array('to' => $token, 'notification' => $notification,'priority'=>'high');
//   $json = json_encode($arrayToSend);
//   $headers = array();
//   $headers[] = 'Content-Type: application/json';
//   $headers[] = 'Authorization: key='. $serverKey;
//   $ch = curl_init();
//   curl_setopt($ch, CURLOPT_URL, $url);
//   curl_setopt($ch, CURLOPT_CUSTOMREQUEST,"POST");
//   curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
//   curl_setopt($ch, CURLOPT_HTTPHEADER,$headers);
//   //Send the request
//   $response = curl_exec($ch);
//   //Close request
//   if ($response === FALSE) {
//   die('FCM Send Error: ' . curl_error($ch));
//   }
//   curl_close($ch);
// }
