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


Route::get('/','frontend\allpage@index' );
Route::get('/cms','backend\wpcms@index');
Route::get('/email','backend\email@index');
Route::post('/email/send','backend\email@send');




//service route
Route::get('service','backend\service@index');
Route::get('service/show/{id}','backend\service@show');
Route::get('service/edit/{id}','backend\service@edit');
Route::post('service/update/{id}','backend\service@update');
Route::get('service/status/{id}/{post}','backend\service@status');


//aboutmeme route
Route::get('aboutme/{id}','backend\aboutme@edit');
Route::post('aboutme/update/{id}','backend\aboutme@update');

//login route
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

//register route
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
