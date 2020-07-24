<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

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
    //Check for 'lang' cookie
    $session = session('lang');

   
    


    if($geo == null) {
        //Probably a localhost server, set language to english

        //set locale from cookie if exists
        if (!isset($session) && !empty($session)) {
            \App::setLocale($session);
            return;
        }

        \App::setLocale('es');
    }

    // //Get visitors country name
    $userCountry = $geo['country'];


 }
}
