<?php

Route::group(['prefix' => 'v1', 'as' => 'api.v1.', 'namespace' => 'Api\\V1\\'], function() {
    Route::post('/dependent-dropdown', ['uses' => 'DependentDropdownController@index', 'as' => 'dropdown']);
 });
Route::get('categories/list' , 'api\CategoryController@list_categories');
Route::get('hot-offers' , 'api\ProductController@offers');
Route::get('used' , 'api\ProductController@used');
Route::get('category/info/{id}' , 'api\ProductController@category_info');
Route::get('countries' , 'api\AuthUsersController@countries');
Route::get('state/{id}' , 'api\AuthUsersController@state');
Route::get('city/{id}' , 'api\AuthUsersController@city');

Route::get('factory/{id}/tags' , 'api\ProductController@factory_tags');
Route::get('factory/{id}/tags/{tag_name}' , 'api\ProductController@factory_tag');
Route::get('factory/{id}/used' , 'api\ProductController@factory_used');
Route::get('factory/{id}/categories' , 'api\ProductController@factory_categories');
Route::get('factory/{id}/categories/{category_id}' , 'api\ProductController@factory_categories_products');



Route::get('state/{id}/zones' , 'api\ZoneController@index');
Route::get('zones/{id}/products' , 'api\ZoneController@zone_products');
Route::get('zones/{id}/factories' , 'api\ZoneController@zone_factories');
Route::get('zones/{id}/companies' , 'api\ZoneController@zone_companies');


Route::get('home' , 'api\HomeController@home');
Route::get('avalible/lang' , 'api\ProductController@available_languages');

Route::get('deals/factories' , 'api\HomeController@hot_offers_suppliers');
Route::get('deals/products' , 'api\HomeController@hot_offers_products');
Route::get('deals/companies' , 'api\HomeController@hot_offers_companies');


Route::get('latest/slider' , 'api\HomeController@latest_slider');
Route::get('latest/products' , 'api\HomeController@latest_products');

Route::get('product/{id}' , 'api\ProductController@show');
Route::get('products/{id}/suggested/supplier' , 'api\ProductController@suggested_supplier');
Route::get('products/{id}/suggested/category' , 'api\ProductController@suggested_category');


Route::get('suggested/suppliers' , 'api\HomeController@suggested_suppliers');
Route::get('suggested/products' , 'api\HomeController@suggested_products');
Route::get('suggested/services' , 'api\HomeController@suggested_services');


Route::get('attributes'   , 'api\ProductController@attributes');
Route::get('category/{id}/attributes'   , 'api\ProductController@attributes_by_category');
Route::get('attribute/{id}/values'   , 'api\ProductController@attribute_values');


Route::get('suppliers' , 'api\HomeController@suppliers');


Route::get('services' , 'api\HomeController@services');
Route::get('services/categories' , 'api\HomeController@services_categories');
Route::get('services/categories/{id}' , 'api\HomeController@services_categories_show');

Route::get('categories/{id}/products' , 'api\CategoryController@category_products');
Route::get('categories/{id}/products/used' , 'api\CategoryController@category_used_products');
Route::get('categories/{id}/stores' , 'api\CategoryController@category_stores');
Route::get('categories/{id}/companies' , 'api\CategoryController@category_companies');



// Auth Routes Sign Up || Log in || Log out || Resset Password
Route::group(['prefix' => 'auth'], function () {

        Route::post('social' , 'api\AuthUsersController@social');
        Route::post('register/user' , 'api\AuthUsersController@register_users');
        Route::post('login/user'    , 'api\AuthUsersController@login_users');


        Route::post('register/spplier' , 'api\AuthStoresController@register');
        Route::post('login/spplier'    , 'api\AuthStoresController@login');


    Route::group(['middleware' => 'auth:api'], function() {
        Route::get('logout'     , 'api\AuthUsersController@logout_users');
        Route::post('activate'  , 'api\AuthUsersController@activate_users');
  

    });

});




    Route::get('requests'   , 'api\RequestsController@index');
    Route::get('requests/{id}'   , 'api\RequestsController@show');


        Route::post('customer/service'   , 'api\SettingsController@customer_service');

        Route::get('about'   , 'api\SettingsController@about');
        Route::get('terms/conditions'   , 'api\SettingsController@terms_conditions');
        Route::get('privacy/policy'   , 'api\SettingsController@privacy_policy');
        Route::get('social/links'   , 'api\SettingsController@social_links');

    Route::get('request/{id}/reviews' , 'api\ReviewController@request_reviews');
    Route::get('product/{id}/reviews' , 'api\ReviewController@product_reviews');
    Route::get('store/{id}/reviews' , 'api\ReviewController@store_reviews');
    Route::get('company/{id}/reviews' , 'api\ReviewController@service_reviews');
    Route::get('service/{id}' , 'api\ServiceController@service_Show');
    Route::get('services/{id}/details' , 'api\ServiceController@service_details');


        Route::get('consumer/{id}/contact'   , 'api\UsersController@contact_consumer');
        Route::get('store/{id}/contact'   , 'api\UsersController@contact_store');
        Route::get('service/{id}/contact'   , 'api\UsersController@contact_service');
    Route::get('factory/{id}' , 'api\StoresController@show_factory');


// Auth Routes Sign Up || Log in || Log out || Resset Password
Route::group(['middleware' => 'auth:api'], function() {
       
        Route::post('branch/new'   , 'api\BranchesController@post');
        Route::get('store/{id}/branches'   , 'api\BranchesController@store_branches');
        Route::get('branches/{id}'   , 'api\BranchesController@show');
        Route::post('branches/{id}/update'   , 'api\BranchesController@update');
        Route::get('branches/{id}/delete'   , 'api\BranchesController@destroy');

        Route::post('service/new'   , 'api\ServiceController@store_service');
        Route::post('service/{id}/update'   , 'api\ServiceController@update_service');
        Route::post('service/{id}/delete'   , 'api\ServiceController@destroy');

       
        Route::post('consumer/requests/{id}/update'   , 'api\RequestsController@update');
        Route::post('consumer/requests/{id}/delete'   , 'api\RequestsController@destroy');
        Route::post('store/requests/{id}/update'   , 'api\RequestsController@update');
        Route::post('store/requests/{id}/delete'   , 'api\RequestsController@destroy');

       //  Add  Review For   Product  && Request && Store && Service
        Route::post('follow/{id}' , 'api\FollowController@follow');
        Route::get('store/{id}/followers/count' , 'api\FollowController@followers_count');
        Route::get('user/following' , 'api\FollowController@following');
        Route::get('store/following' , 'api\FollowController@following');
        Route::get('user/following/count' , 'api\FollowController@following_count');


        Route::get('user/requests' , 'api\RequestsController@user_requests');
        Route::get('store/requests' , 'api\RequestsController@user_requests');

        Route::get('user/favorite/requests' , 'api\FavoritesController@get_favorite_requests');
        Route::get('store/favorite/requests' , 'api\FavoritesController@get_favorite_requests');
        Route::get('user/favorite/products' , 'api\FavoritesController@get_favorite_products');
        Route::get('store/favorite/products' , 'api\FavoritesController@get_favorite_products');


Route::get('store/products' , 'api\ProductController@store_products');
Route::post('product/{id}/favorite' , 'api\FavoritesController@product_favorite');
Route::post('request/{id}/favorite' , 'api\FavoritesController@request_favorite');
Route::post('store/{id}/favorite' , 'api\FavoritesController@store_favorite');
Route::post('service/{id}/favorite' , 'api\FavoritesController@service_favorite');

   
    Route::post('product/{id}/add/review' , 'api\ReviewController@review_product');
    Route::post('request/{id}/add/review' , 'api\ReviewController@review_request');
    Route::post('store/{id}/add/review' , 'api\ReviewController@review_store');
    Route::post('company/{id}/add/review' , 'api\ReviewController@review_service');

    Route::post('user/update/info' , 'api\UsersController@update_user_data');
    Route::post('user/update/password' , 'api\UsersController@update_user_password');
    Route::get('user' , 'api\UsersController@profile');

    Route::get('store' , 'api\StoresController@profile');
    Route::post('store/update/info' , 'api\StoresController@update_supplier_data');
    Route::post('store/update/password' , 'api\StoresController@update_store_password');
    Route::post('product/new'   , 'api\ProductController@store');
    Route::post('product/{id}/delete'   , 'api\ProductController@destroy');
    Route::post('requests/new'   , 'api\RequestsController@store');

});
Route::get('auth/categories' , 'api\CategoryController@auth_categories');
Route::get('main/categories' , 'api\CategoryController@auth_categories');
Route::get('sub/categories/{id}' , 'api\CategoryController@sub_add_categories');
Route::get('sub/sub/categories/{id}' , 'api\CategoryController@sub_sub_add_categories');



  Route::post('send-resset-email' ,'api\AuthUsersController@send_resset_email');

    Route::post('resset-password' ,  'api\AuthUsersController@resset_password');
    
    Route::post('search' , 'api\SearchController@search');

