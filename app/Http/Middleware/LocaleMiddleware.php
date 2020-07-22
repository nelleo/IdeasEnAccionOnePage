<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use App;
use Config;
use Carbon\Carbon;

class LocaleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
                /*
         * If esta a true el valor de la variable status que tenemos en locale.php
         
        if (config('locale.status')) {
            if (session()->has('locale') &&
                in_array(session()->get('locale'), array_keys(config('locale.languages')))) {

                /*
                 * Establece el locale de Laravel
                 
                app()->setLocale(session()->get('locale'));

                setlocale(LC_TIME, config('locale.languages')[session()->get('locale')][1]);

                Carbon::setLocale(config('locale.languages')[session()->get('locale')][0]);

                
                if (config('locale.languages')[session()->get('locale')][2]) {
                    session(['lang-rtl' => true]);
                } else {
                    session()->forget('lang-rtl');
                }
            }
        }*/

        // if (Session::has("lang")) {
        //     $lang = Session::get("lang");
        // } else {
        //     // check browser lang - https://learninglaravel.net/detect-and-change-language-on-the-fly-with-laravel
        //     $lang = substr($request->server('HTTP_ACCEPT_LANGUAGE'), 0, 2);
 
        //     if ($lang != 'es' && $lang != 'en') {
        //         $lang = 'en';
        //     }
        // }
 
        // App::setLocale($lang);
        // return $next($request);
        if (!empty(session('lang'))) {
            App::setLocale(session('lang'));
        }
        return $next($request);
    }
}
