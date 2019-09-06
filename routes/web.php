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

Route::get('/', 'RecepiesController@index');
Route::resource('/recepies', 'RecepiesController');
Route::resource('/ingridients', 'IngridientsController');


Route::group(['middleware'	=>	'auth'], function(){
    Route::get('/profile', 'ProfileController@index');
    Route::post('/profile', 'ProfileController@store');
    Route::get('/logout', 'AuthController@logout');
    Route::post('/comment', 'CommentsController@store');
});

Route::group(['middleware'	=>	'guest'], function(){
    Route::get('/register', 'AuthController@registerForm');
    Route::post('/register', 'AuthController@register');
    Route::get('/login','AuthController@loginForm')->name('login');;
    Route::post('/login', 'AuthController@login');
});
