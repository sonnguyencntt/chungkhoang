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
Route::get('/','HomeController@index')->name('home.index');
Route::get('/gioi-thieu','IntroduceController@index')->name('introduce.index');
Route::get('/lien-he','ContactController@index')->name('contact.index');
Route::get('/dich-vu','ServiceController@index')->name('serveice.index');



Route::group(['prefix' => 'manage'], function(){

    Route::get('/','Manage\DashboardController@index')->name('manage.dashboard.index');

    Auth::routes(['register' => false]);

    Route::group(['prefix'=> 'auth'], function(){
        Route::get('/','Manage\AuthController@index')->name('manage.auth.index');
      
    });

    Route::group(['prefix'=> 'contact'], function(){
        Route::get('/','Manage\ContactController@index')->name('manage.contact.index');
        Route::delete('/{contact}','Manage\ContactController@destroy')->name('manage.contact.destroy');
    });

    Route::group(['prefix'=> 'profile'], function(){
        Route::get('/','Manage\ProfileController@index')->name('manage.profile.index');
        Route::put('/{profile}','Manage\ProfileController@update')->name('manage.profile.update');
    });

    Route::group(['prefix'=> 'blog'], function(){
        Route::get('/','Manage\BlogController@index')->name('manage.blog.index');
        Route::post('/','Manage\BlogController@store')->name('manage.blog.store');
        Route::get('/create','Manage\BlogController@create')->name('manage.blog.create');
        Route::get('/{blog}/edit','Manage\BlogController@edit')->name('manage.blog.edit');
        Route::put('/{blog}','Manage\BlogController@update')->name('manage.blog.update');
        Route::delete('/{blog}','Manage\BlogController@destroy')->name('manage.blog.destroy');
    });

    Route::group(['prefix'=> 'category'], function(){
        Route::get('/','Manage\CategoryController@index')->name('manage.category.index');
        Route::post('/','Manage\CategoryController@store')->name('manage.category.store');
        Route::get('/create','Manage\CategoryController@create')->name('manage.category.create');
        Route::get('/{category}/edit','Manage\CategoryController@edit')->name('manage.category.edit');
        Route::put('/{category}','Manage\CategoryController@update')->name('manage.category.update');
        Route::delete('/{category}','Manage\CategoryController@destroy')->name('manage.category.destroy');
    });
   
});

