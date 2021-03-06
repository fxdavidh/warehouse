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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('home/create', 'WarehouseController@create')->name('create');
Route::post('/home', 'WarehouseController@store')->name('store');
Route::get('/home', 'WarehouseController@index');
Route::get('/home/{item}/edit', 'WarehouseController@edit');
Route::post('/home/{item}', 'WarehouseController@update');
Route::delete('home/{item}', 'WarehouseController@destroy');
Route::post('/logout', function(){
    Auth::logout();
    return Redirect("/login");
});

Route::post('/upload', 'WarehouseController@image');