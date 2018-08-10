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

Route::get('/dashboard', [
  'uses' => 'HomeController@index',
  'middleware' => 'roles',
  'roles' => ['admin', 'superadmin']
]);

Auth::routes();

Route::get('/charts', [
  'uses' => 'ChartController@index',
  'middleware' => 'roles',
  'roles' => ['admin', 'superadmin']
]);
Route::get('/tables', [
  'uses' => 'TableController@index',
  'middleware' => 'roles',
  'roles' => ['manager', 'superadmin']
]);
Route::get('/components/navbar', [
  'uses' => 'ComponentController@navbar',
  'middleware' => 'roles',
  'roles' => ['admin', 'superadmin', 'user']
]);
Route::get('/components/cards', [
  'uses' => 'ComponentController@cards',
  'middleware' => 'roles',
  'roles' => ['admin', 'superadmin', 'user']
]);
Route::get('/', 'MapController@index');
