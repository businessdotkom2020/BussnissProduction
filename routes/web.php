<?php

// if (App::environment('production')) {
//URL::forceScheme('https');
// }
if (app()->isLocal()) {
    URL::forceScheme('http');
} else {
    URL::forceScheme('https');
}
URL::forceScheme('https');
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
Route::get('/', 'web\HomeController@home');


Route::get('/test_image_1', function () {
    return \App\Models\Product::find(1123);

    return view('home');
});
Route::get('/test_image_2', function () {
    return \App\Models\Product::find(1126);

    return view('home');
});





//////////////////// dashboard ///////////////////////////
Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::get('/dashboard/products', function () {
    return view('dashboard.products');
});

Route::get('/dashboard/requests', function () {
    return view('dashboard.requests');
});

Route::get('/dashboard/services', function () {
    return view('dashboard.services');
});

Route::get('/dashboard/jobs', function () {
    return view('dashboard.jobs');
});

Route::get('/dashboard/following', function () {
    return view('dashboard.following');
});

Route::get('/dashboard/favourites', function () {
    return view('dashboard.favourites');
});

Route::get('/dashboard/clients', function () {
    return view('dashboard.clients');
});

//////////////////// Search && Category ///////////////
Route::get('/search', 'web\CategoriesController@search');
Route::get('category/{category_id}', 'web\CategoriesController@show');



//////////////////// Service ///////////////
Route::get('service/new', 'web\ServiceController@create')->middleware('auth');
Route::post('service/new', 'web\ServiceController@post')->name('ServiceSave')->middleware('auth');
Route::get('/service/{service_id}', 'web\ServiceController@show');
Route::post('/service_favorite', 'web\ServiceController@favorite')->name('service.favorite');
Route::get('services', 'web\ServiceController@index');

//////////////////// Job ///////////////
Route::get('job/new', 'web\JobsController@create')->middleware('auth');
Route::post('job/new', 'web\JobsController@post')->name('JobSave')->middleware('auth');
Route::get('job/{job_id}', 'web\JobsController@show');

//////////////////// Client ///////////////
Route::get('client/new', 'web\ClientsController@create')->middleware('auth');
Route::post('client/new', 'web\ClientsController@post')->name('ClientSave')->middleware('auth');
Route::get('client/{job_id}', 'web\ClientsController@show');





// Show Register Page & Login Page Resset Password
Route::middleware('guest')->group(function () {
    // Login User Or Supplier
    Route::get('/login', 'web\AuthController@show_login_form')->name('login');
    Route::post('/login', 'web\AuthController@do_login')->name('do_login');
    // Register Customers
    Route::get('/register', 'web\AuthController@show_register_form')->name('register.users');
    Route::post('register', 'web\AuthController@register_user')->name('do.user.register');
    // Register Suppliers
    Route::get('register/supplier', 'web\AuthController@show_register_supplier_form');
    Route::post('register/supplier', 'web\AuthController@do_register_supplier')->name('do.supplier.register');
    // Register Suppliers
    Route::get('forget/password', 'web\AuthController@show_forget_password_form');
    Route::post('forget/password', 'web\AuthController@do_forget_password_supplier')->name('do.forget_password');
    // Register Suppliers
    Route::get('resset/password/{user_id}', 'web\AuthController@show_resset_password_form')->name('form.resset_password');
    Route::post('resset/password', 'web\AuthController@do_resset_password_supplier')->name('do.resset_password');
});

Route::post('/user_follow', 'web\SuppliersController@togglefollow')->name('user_follow');
Route::post('review/{type}/{id}/addReview', 'web\ReviewsController@add_Review')->name('add_product_review');

Route::get('log', function () {
    \Auth::loginUsingId(216);
});

Route::get('/getStates/{id}', 'web\AuthController@getStates')->name('findstate');
Route::get('/getCities/{id}', 'web\AuthController@getCities')->name('findcity');




Route::get('logout', 'web\AuthController@logout')->name('logout')->middleware('auth');

Route::get('review/{review_id}/delete', 'web\ReviewsController@destroy');

///////////////// Suppliers ////////////////////

Route::get('/supplier/{supplier_id}', 'web\SuppliersController@show');
Route::get('/supplier/{supplier_id}/info', 'web\SuppliersController@info');
Route::get('/suppliers', 'web\SuppliersController@index');


///////////////// Users ////////////////////

Route::get('/user/{supplier_id}', 'web\SuppliersController@show');
Route::get('/supplier/{supplier_id}/info', 'web\SuppliersController@info');
Route::get('/suppliers', 'web\SuppliersController@index');



/////////////////////       Requests ////////////////////
Route::get('requests', 'web\RequestController@index');
Route::get('request/new', 'web\RequestController@create')->middleware('auth');
Route::post('request/new', 'web\RequestController@post')->name('RequestSave')->middleware('auth');
Route::post('/request_favorite', 'web\RequestController@favorite')->name('request.favorite');
Route::get('request/{request_id}', 'web\RequestController@show');
Route::get('request/{request_id}/edit', 'web\RequestController@edit');
Route::post('request/{request_id}/update', 'web\RequestController@update')->name('RequestUpdate')->middleware('auth');


/////////////////////       Products ////////////////////
Route::get('product/{product_id}/delete', 'web\ProductsController@delete');
Route::get('product/{product_id}/edit', 'web\ProductsController@edit');
Route::get('/products/new', 'web\ProductsController@create')->middleware('auth');
Route::post('/products/save', 'web\ProductsController@store')->name('ProductSave')->middleware('auth');
Route::post('/product/{product_id}/update', 'web\ProductsController@update_product')->name('ProductUpdate')->middleware('auth');
Route::get('/getValues/{id}', 'web\ProductsController@getValues');
Route::get('/getSub/{id}', 'web\ProductsController@getSubCategory')->name('findstate');
Route::get('/getSubSub/{id}', 'web\ProductsController@getSubSubCategory')->name('findcity');
Route::get('/products/latest', 'web\ProductsController@latest_products');
Route::get('/products/most-common', 'web\ProductsController@most_common');
Route::get('/products/best-selling', 'web\ProductsController@best_selling');
Route::get('/product/{product_id}', 'web\ProductsController@show');
Route::post('/product_favorite', 'web\ProductsController@favorite')->name('product.favorite');





///////////// Website Settings ////////////////
Route::get('about', 'web\SettingsController@about');
Route::get('terms', 'web\SettingsController@terms');
Route::get('privacy', 'web\SettingsController@privacy');
Route::get('contact', 'web\SettingsController@contact');
Route::post('contact', 'web\SettingsController@do_contact');






Route::group(['prefix' => 'admin'], function () {
    Route::get('categories/sub', 'VoyagerCategoriesController@sub_categories');
    Route::get('categories/sub/sub', 'VoyagerCategoriesController@sub_sub_categories');
});
Route::get('/config-cache', function () {
    $exitCode = Artisan::call('config:cache');
    return '<h1>Clear Config cleared</h1>';
});


Route::get('cat/{id}', function ($id) {


    $cat = \App\Models\Category::find($id);
    return [
        'parent_id' => (string) $cat->parent->id,
        'category' => (string) $cat->parent->parent->id,
    ];
});


Route::get('locale/{locale}', function ($locale) {
    Session::put('locale', $locale);
    return redirect()->back();
});


///////////// Supplier  Settings ////////////////
Route::get('/profile/update', 'web\SuppliersController@edit')->name('edit_profile');
Route::post('/update/supplier/profile', 'web\SuppliersController@update')->name('update_supplier');
Route::post('/update/password', 'web\SuppliersController@update_password')->name('update_password');
Route::get('/add/branch', 'web\BranchController@create_branch')->name('create_branch');
Route::get('/branch/{branch_id}/edit', 'web\BranchController@edit_branch')->name('edit_branch');
Route::post('/store/branch', 'web\BranchController@store')->name('store_branch');


//////////////// Categories /////////////////////////
Route::get('/categories', 'web\CategoriesController@index')->name('index');