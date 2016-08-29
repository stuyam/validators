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
    return view('welcome');
});

Route::get('email', function(){
    return view('email');
});

Route::post('email', 'TestController@email');

Route::get('phone', function(){
    return view('phone');
});

Route::post('phone', 'TestController@phone');
