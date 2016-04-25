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

Route::get('/', 'FrontController@index');
Route::get('host/{slug}', 'FrontController@show');
Route::get('domain/{slug}', 'FrontController@domain');
Route::get('company/privacy-sla-tos', 'FrontController@company');

Route::auth();
Route::get('/dashboard', 'HomeController@index');
Route::resource('hosting', 'HostingController');
Route::resource('domain', 'DomainController');
