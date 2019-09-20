<?php

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
Route::get('contactame', function (){
    return "Seccion de contactos";
})->name('contacto');

Route::get('/', function () {
    echo "<a href='" . route('contacto') . "'>Contactos 1</a><br>";
});
//

