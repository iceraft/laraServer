<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('Welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::post('/users', 'UserController@create');

Route::post('/login','UserController@login');

Route::get('/users', 'UserController@index');
