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
//
//App\User::create([
//    'name' => 'Samus',
//    'email'=> 'raulsamuel@gmail.com',
//    'password'=> bcrypt('hola12345'),
//    'role'=>'estudiante'
//]);

use App\Http\Controllers\UsersController;
use function foo\func;

Route::view('/','home')->name('home');

//Prueba
Route::get('roles',function(){
    return \App\Role::with('user')->get();
});

Route::view('/about','about')->name('about');
Route::view('/contact','contact')->name('contact');

Route::resource('projects','ProjectController');

Route::post('contact', 'MessagesCtrl@store');

Route::resource('usuarios','UsersController');

Auth::routes(['register'=>false]);
