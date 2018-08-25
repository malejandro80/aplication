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

Route::get('/',['as' => 'inicio','uses' => 'PagesController@start']);
Route::get('contacto',['as' => 'contacto','uses' => 'PagesController@contact']);
Route::get('especialidades',['as' => 'especialidades','uses' => 'PagesController@specialties']);

Auth::routes();

