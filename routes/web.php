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
Route::get('/', 'DeclarationsController@index');

Auth::routes();

Route::get('/home','HomeController@index')->name('home');

Route::get('/create/declaracion','DeclarationsController@create');

Route::post('/create/declaracion','DeclarationsController@store');

Route::get('/declaracion','DeclarationsController@index');