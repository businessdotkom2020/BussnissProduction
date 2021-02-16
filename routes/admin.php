<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();
/*******************************************************/
View::creator('backend.layout.navbar', function ($view) {
//    $view->with('eventcount' , \App\Models\Event::count());
});
View::creator('backend.layout.header', function ($view) {
});
/*************** backend routes *************/
Route::get('admin/login', 'Admin\AdminauthController@showLoginFrom')->name('backendLogin');
Route::post('admin/login', 'Admin\AdminauthController@login');
Route::get('admin', 'Admin\AdminauthController@showLoginFrom');
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'auth:moderator'], function () {
    /****************** auth routes ****************/
    Route::get('/', 'AdminController@index')->name('backend-home');
    /***********  normal-users route ***********/
    Route::resource('users', 'UserController');
    Route::post('delete_users', 'UserController@delete_users')->name('delete_users');
    Route::get('delete_user/{id}', 'UserController@delete_user')->name('delete_user');
    /***********  sellers route ***********/
    Route::resource('sellerss', 'SellerController');
    Route::post('delete_sellerss', 'SellerController@delete_sellerss')->name('delete_sellerss');
    Route::get('delete_seller/{id}', 'SellerController@delete_seller')->name('delete_seller');
    /***********  clients route ***********/
    Route::resource('clients', 'ClientController', ['except' => ['show']]);
    Route::post('delete_clients', 'ClientController@delete_clients')->name('delete_clients');
    /***********  branches route ***********/
    Route::resource('branches', 'BranchController');
    Route::post('delete_branches', 'BranchController@delete_branches')->name('delete_branches');
    Route::get('delete_branch/{id}', 'BranchController@delete_branch')->name('delete_branch');
    /***********  products route ***********/
    Route::resource('productss', 'ProductController');
    Route::post('delete_prodectss', 'ProductController@delete_prodectss')->name('delete_prodectss');
    Route::get('delete_prodect/{id}', 'ProductController@delete_prodect')->name('delete_prodect');
    /***********  service route ***********/
    Route::resource('servicess', 'ServiceController');
    Route::post('delete_servicess', 'ServiceController@delete_servicess')->name('delete_servicess');
    Route::get('delete_service/{id}', 'ServiceController@delete_service')->name('delete_service');
    /***********  request route ***********/
    Route::resource('requestss', 'RequestController');
    Route::post('delete_requestss', 'RequestController@delete_requestss')->name('delete_requestss');
    Route::get('delete_request/{id}', 'RequestController@delete_request')->name('delete_request');
    /***********  job route ***********/
    Route::resource('jobss', 'JobController');
    Route::post('delete_jobss', 'JobController@delete_jobss')->name('delete_jobss');
    Route::get('delete_job/{id}', 'JobController@delete_job')->name('delete_job');
    /***********  categry route ***********/
    Route::resource('categories', 'CategoryController', ['except' => ['show']]);
    Route::get('category_info/{id}', 'CategoryController@category_info')->name('category_info');
    Route::get('category_tree', 'CategoryController@tree')->name('tree');
    Route::post('delete_categories', 'CategoryController@delete_categories')->name('delete_categories');
    /***********  subcategry route ***********/
    Route::resource('subcategories', 'SubcategoryController', ['except' => ['show']]);
    Route::post('delete_subcategories', 'SubcategoryController@delete_categories')->name('delete_subcategories');
    /***********  subsubcategry route ***********/
    Route::resource('subsubcategories', 'SubsubcategoryController', ['except' => ['show']]);
    Route::post('delete_subsubcategories', 'SubsubcategoryController@delete_categories')->name('delete_subsubcategories');
    /***********  brands route ***********/
    Route::resource('brands', 'BrandController');
    Route::post('delete_brands', 'BrandController@delete_brands')->name('delete_brands');
    Route::get('delete_brand/{id}', 'BrandController@delete_brand')->name('delete_brand');
    /***********  brands route ***********/
    Route::resource('tags', 'TagController');
    Route::post('delete_tags', 'TagController@delete_tags')->name('delete_tags');
    Route::get('delete_tag/{id}', 'TagController@delete_tag')->name('delete_tag');
    /***********  countries route ***********/
    Route::resource('countries', 'CountryController', ['except' => ['show']]);
    Route::post('delete_countries', 'CountryController@delete_countries')->name('delete_countries');
    /***********  states route ***********/
    Route::resource('states', 'StateController', ['except' => ['show']]);
    Route::post('delete_states', 'StateController@delete_states')->name('delete_states');
    /***********  states route ***********/
    Route::resource('cities', 'CityController', ['except' => ['show']]);
    Route::post('delete_cities', 'CityController@delete_cities')->name('delete_cities');
    /***********  sliders route ***********/
    Route::resource('sliders', 'SliderController', ['except' => ['show']]);
    Route::post('delete_sliders', 'SliderController@delete_sliders')->name('delete_sliders');
    /***********  zones route ***********/
    Route::resource('zones', 'IndustrialController');
    Route::post('delete_zones', 'IndustrialController@delete_zones')->name('delete_zones');
    Route::get('delete_zone/{id}', 'IndustrialController@delete_zone')->name('delete_zone');
    /***********  attributes route ***********/
    Route::resource('attributes', 'AttributeController', ['except' => ['show']]);
    Route::post('delete_attributes', 'AttributeController@delete_attributes')->name('delete_attributes');
    /***********  attributes route ***********/
    Route::resource('attr_values', 'AttributeValueController', ['except' => ['show']]);
    Route::post('delete_attr_values', 'AttributeValueController@delete_attr_values')->name('delete_attr_values');
    /********** app settings / options ***********/
    Route::get('settings', 'OptionController@edit')->name('settings_page');
    Route::patch('settings_edit', 'OptionController@update')->name('settings_form');
    /********** amoderators***********/
    Route::resource('moderators', 'ModeratorController', ['except' => ['show']]);
    Route::resource('roles','RoleController');
    /***********  reviews route ***********/
    Route::resource('reviews', 'ReviewController', ['only' => ['index','show','destroy']]);
    Route::get('delete_review/{id}', 'ReviewController@delete_review')->name('delete_review');
});
/************* ajax select routes ******************/
Route::get('/ajax-states', 'Admin\AdminController@getStates');
Route::get('/ajax-cities', 'Admin\AdminController@getCities');
Route::get('/ajax-subcats', 'Admin\AdminController@getSubcats');
Route::get('/ajax-subsubcats', 'Admin\AdminController@getSubSubcats');
Route::get('/ajax-attributevalues', 'Admin\AdminController@attributevalues');
Route::post('read', 'Admin\AdminController@readNotification');


//Clear route cache:
Route::get('/route-cache', function() {
    $exitCode = Artisan::call('route:cache');
    return 'Routes cache cleared';
});

//Clear config cache:
Route::get('/config-cache', function() {
    $exitCode = Artisan::call('config:cache');
    return 'Config cache cleared';
});

// Clear application cache:
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    return 'Application cache cleared';
});

// Clear view cache:
Route::get('/view-clear', function() {
    $exitCode = Artisan::call('view:clear');
    return 'View cache cleared';
});


