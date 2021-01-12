<?php

namespace App\Providers;

use App\Models\Moderator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\URL;
use TCG\Voyager\Facades\Voyager;
use Illuminate\Support\Facades\Hash;

use App\FormFields\SelectDependentDropdown;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        Voyager::addFormField(SelectDependentDropdown::class);

//        if(\Schema::hasTable('moderators')){
//            $admin = Moderator::find(1);
//            if(!isset($admin)){
//                $admin = new Moderator();
//                $admin->id = 1;
//                $admin->name = 'Admin';
//                $admin->email = 'admin@gmail.com';
//                $admin->password = Hash::make('123456789');
//                $admin->status = 1;
//                $admin->save();
//            }
//        }
    }
}
