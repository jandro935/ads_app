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

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::get('/', [
    'as' => 'ads.index',
    'uses' => 'AdsController@index',
]);

Route::get('/ad/{id}', [
    'as' => 'ads.show',
    'uses' => 'AdsController@show',
]);

Route::group(['middleware' => 'auth'], function () {
    Route::get('/new', [
        'as' => 'ads.create',
        'uses' => 'AdsController@create',
    ]);

    Route::post('/new', [
        'as' => 'ads.store',
        'uses' => 'AdsController@store',
    ]);

    Route::get('/profile', [
        'as' => 'user.profile',
        'uses' => 'UserController@index'
    ]);

    Route::get('/profile/update/{id}', [
        'as' => 'user.edit',
        'uses' => 'UserController@edit'
    ]);

    Route::put('/profile/update/{id}', [
        'as' => 'user.update',
        'uses' => 'UserController@update'
    ]);
});
