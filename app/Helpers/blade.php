<?php

 
if (!function_exists('current_locale')) {
    /**
     * Get the authenticated user.
     *
     * @return \App\Models\Auth\User
    */
    function current_locale()
    {
        return Session::get('currency') ? \Session::get('currency')  : currency()->config('default') ; 
    }
    
}


 