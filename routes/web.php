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

Route::get('/test','MyAuth\ConnexionController@test');
Route::get('/login','MyAuth\ConnexionController@formulaire')->name('login');
Route::post('/login','MyAuth\ConnexionController@traitement')->name('traitement');
Route::get('/log-out','MyAuth\ConnexionController@deconnexion')->name('log-out');
