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

Route::view('/','home')->name('home');
Route::view('/about','about')->name('about');
Route::view('/contact','contact')->name('contact');
Route::get('/portfolio','PortfolioController')->name('portfolio');
//Route::view('/','home');

//Route::get('/', function () {
//    $nombre = "Sam";
//    return view('home', compact('nombre'));
//})->name('home');
//

