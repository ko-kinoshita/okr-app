<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','HomeController@index');
Route::get('Home/add','HomeController@add');
Route::post('Home/add','HomeController@create');
Route::get('Home/{id}/add_child','HomeController@add_child');
Route::post('Home/{id}/add_child','HomeController@add_child_update');

Route::get('Home/edit','HomeController@edit');
Route::post('Home/edit','HomeController@update');
Route::get('Home/delete','HomeController@delete');
Route::post('Home/delete','HomeController@remove');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('hello','HomeController@index')->middleware('auth');
