<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class LanguageController extends Controller
{
       /**
 * @param $lang
 *
 * @return \Illuminate\Http\RedirectResponse
 */
public function idiomaInicial(Request $request)
    {
        //dd($request);
        // Almacenar el lenguaje en la session
        //session()->put('locale', $lang);
        return view('home');
        
    }
    public function swap($lang)
    {
        // Almacenar el lenguaje en la session
        session()->put('locale', $lang);
        return redirect()->back();
        
    }
}
