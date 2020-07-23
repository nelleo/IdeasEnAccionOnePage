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

Route::get('/', function () {
    return view('ideas');
});

Route::get('lang/{lang}', function ($lang) {
    session(['locale' => $lang]);
    return Redirect::back();
})->where([
    'lang' => 'en|es'
]);

Route::group(['middleware' => ['web']], function () {
 
    Route::get('/', function () {
        return view('home');
    });
});

Route::get('/ideas', function () {
    return view('ideas');
});

Route::post('/envioMail', "mailController@send");


Route::get('/download',function(){
    $file= public_path(). "/downloads/Terminos y Condiciones IxA 2020 - Categoría Excelencia Innovadora Empresarial_ESP_ENG_PORT.pdf";

    $headers = array(
              'Content-Type: application/pdf',
            );

    return response()->download($file, 'Terminos-y-Condiciones-IxA-2020-Categoría-Excelencia-Innovadora-Empresarial_ESP_ENG_PORT.pdf', $headers);
});


// Route::get('lang/{lang}', 'LanguageController@swap')->name('lang.swap');

// Route::get('lang/{lang}', function($lang) {
//   Session::put('lang', $lang);
//   return Redirect::back();
// })->middleware('web')->name('change_lang');
