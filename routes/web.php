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

Route::get('/', function(){

    return View::make('pagPrincipal');
});

Route::get('/home/show', function (){
    return View::make('/layouts/showDeclarations');
});

Route::get('/bienvenido', function (){
    return View::make('/auth/newUser');
});

Auth::routes();

Route::get('/home','HomeController@index')->name('home');

Route::get('/create/declaracion','DeclarationsController@create');

Route::post('/create/declaracion','DeclarationsController@store');

Route::get('/declaracion','DeclarationsController@index');

Route::get('show/declaracion','showDeclaration@index');

Route::post('show/declaracion','showDeclaration@store');

Route::get('update/user/{id}/{status}','UserController@update');

Route::get('descargar-pdf', 'DeclarationsController@pdf')->name('declarations.pdf');
