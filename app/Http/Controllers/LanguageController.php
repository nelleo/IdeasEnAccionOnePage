<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class LanguageController extends Controller
{
       /**
    * @param $lang
    *
    *  @return \Illuminate\Http\RedirectResponse
    */
    public function idiomaInicial(Request $request)
    {
        //dd($request);
        // Almacenar el lenguaje en la session
        session()->put('lang', $lang);
        return view('home');
        
    }
    public function swap($lang)
    {
        // Almacenar el lenguaje en la session
        session()->put('lang', $lang);
        return redirect()->back();
        
    }

    public function setLanguage($lang) {
        $supportedLocales = ['en', 'es'];

        if (in_array($lang, $supportedLocales)) {
            session(['lang'=>$lang]);
            // \Cookie::queue(\Cookie::make('lang', $lang, '20160'));
            
            \App::setLocale($lang);
            
    
        } else {
            \App::setLocale('es');
        }
    
        return back();

      }
}
