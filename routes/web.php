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


Route::get('/form', 'HomeController@create')->name('get');

Route::post('/post', 'HomeController@store')->name('post');

Route::put('/put', 'HomeController@update')->name('put');

Route::patch('/patch', 'HomeController@patch')->name('patch');

Route::delete('/delete', 'HomeController@destroy')->name('delete');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
