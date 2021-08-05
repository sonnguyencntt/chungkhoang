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
Route::group(['prefix' => 'manage'], function(){
    Route::group(['prefix'=> 'blog'], function(){
        Route::get('/','Api\Manage\BlogController@index');
    });

 
});
