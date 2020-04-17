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
    return view('welcome');
});

Route::get('Home/','HomeController@index');
Route::get('Home/add','HomeController@add');
Route::post('Home/add','HomeController@create');
Route::get('Home/edit','HomeController@edit');
Route::post('Home/edit','HomeController@update');
Route::get('Home/delete','HomeController@delete');
Route::post('Home/delete','HomeController@remove');
Route::get('Home/show','HomeController@show');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
