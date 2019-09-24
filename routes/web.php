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
//Route::get('/portfolio','projectController@index')->name('portfolio.index');
//Route::get('/portfolio/create','projectController@create')->name('portfolio.create');
//Route::get('/portfolio/{project}/editar','projectController@edit')->name('projects.edit');
//Route::get('/portfolio/{project}','projectController@show')->name('portfolio.show');
//
//Route::patch('/portfolio/{project}','projectController@update')->name('projects.update');
//
//Route::delete('/portfolio/{project}','projectController@destroy')->name('projects.destroy');
//
//Route::post('/portfolio','projectController@store')->name('projects.store');

Route::post('contact', 'MessagesCtrl@store');

