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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
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