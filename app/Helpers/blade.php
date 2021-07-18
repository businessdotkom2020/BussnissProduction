<?php
 
 
if (!function_exists('current_currency')) {
    /**
     * Get the authenticated user.
     *
     * @return \App\Models\Auth\User
    */
    function current_currency()
    {
        return Session::get('currency') ? \Session::get('currency')  : currency()->config('default') ; 
    }
    
}
if (!function_exists('current_locale')) {
    /**
     * Get the authenticated user.
     *
     * @return \App\Models\Auth\User
    */
    function current_locale()
    {
        return Session::get('locale') ? \Session::get('locale')  : Config::get('app.locale'); 
    }
    
}


 