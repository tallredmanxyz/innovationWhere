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
    return view('home');
});

Route::get('/index', 'IPGOD101Controller@index');
Route::get('/IPGOD201', 'IPGOD201Controller@index');

Route::get('/search', 'SearchController@getSearch');
Route::post('/formdata', 'SearchController@getSearch');

Route::get('/map', function () {
    return view('json');
});