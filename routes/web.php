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
$portfolio = [
    ['title' => 'Proyecto #1'],
    ['title' => 'Proyecto #2'],
    ['title' => 'Proyecto #3'],
    ['title' => 'Proyecto #4']
];

Route::view('/','home')->name('home');
Route::view('/about','about')->name('about');
Route::view('/portfolio','portfolio', compact('portfolio'))->name('portfolio');
Route::view('/contact','contact')->name('contact');

//Route::view('/','home');

//Route::get('/', function () {
//    $nombre = "Sam";
//    return view('home', compact('nombre'));
//})->name('home');
//

