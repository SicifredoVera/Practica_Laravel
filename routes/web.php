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
    return view('welcome');
});



Route::get ('/ingresar', 'Control_Persona@ingresar');
Route::get ('/mostrar', 'Control_Persona@mostrar');
Route::post('mostrar','Control_Persona@ingresar2' );