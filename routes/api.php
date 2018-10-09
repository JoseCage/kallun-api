<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::group(['prefix' => 'v1', 'namespace' => 'API'], function() {

    // Authentication Routes
    Route::group(['prefix' => 'auth', 'namespace' => 'Auth'], function($auth) {
        $auth->post('/login', 'AuthenticateController@login')->name('login');
        $auth->post('/register', 'AuthenticateController@register')->name('register');
    });

    // Slangs
    Route::group(['prefix' => 'slangs'], function($slang) {
        $slang->post('/', 'SlangsController@createSlang');
        $slang->get('/', 'SlangsController@getAllSlangs');
        $slang->get('/{slang}', 'SlangsController@slangDetails');
    });

});

Route::prefix('v1')->group(function () {

    Route::prefix('auth')->group(function () {
        Route::post('register', 'UserController@register');
        Route::post('login', 'UserController@login');
    });

    /**
     * Need to create the SlangController to 
     * replace the function hardcoded to controller function
     */

    Route::prefix('slang')->group(function () {
        Route::get('/{name?}', function ($name = "") {
            return "retun slang! ".$name;
        });
        Route::post('/', function () {
            return "add new slang";
        });
    });

});