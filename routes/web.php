<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/register','AuthController@register');
Route::post('/register','AuthController@postregister')->name('register');
Route::get('/login','AuthController@login')->name('login');
Route::post('/postlogin','AuthController@postlogin');
Route::get('/logout', 'AuthController@logout');

//Route::group(['middleware' => 'auth'], function(){

    Route::get('/', 'ContactController@index');
    Route::get('/contact/create', 'ContactController@create');
    Route::post('/contact', 'ContactController@store');
    Route::get('/contact/{id}/edit','ContactController@edit');
    Route::patch('/contact/{id}','ContactController@update'); 
    Route::delete('/contact/{id}','ContactController@destroy'); 

// upload

    Route::get('/upload','UploadController@uploadForm');
    Route::post('/upload','UploadController@uploadFile')->name('uploadFile');
//});