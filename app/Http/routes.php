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


Route::auth();

Route::get('/', 'HomeController@index');


Route::group(['prefix' => 'admin', 'middleware' => 'web'], function () {
    /*
     * dashboard
     */
    Route::get('/', 'Admin\AdminController@index');
    Route::get('/dashboard', 'Admin\AdminController@index');
    /*
     * Şiir
     */
    Route::get('/siir/siir-ekle', 'Admin\AdminController@siir_ekle');
    Route::post('/ckeditor/upload', ['as' => 'ckeditor.upload', 'uses' => 'Admin\AdminController@ckeupload']);

});

