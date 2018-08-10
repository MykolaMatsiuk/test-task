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

Route::get('/', function () {
    return view('dashboard');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/charts', 'ChartController@index');
Route::get('/tables', 'TableController@index');
Route::get('/components/navbar', 'ComponentController@navbar');
Route::get('/components/cards', 'ComponentController@cards');
Route::get('/map', 'MapController@index');
