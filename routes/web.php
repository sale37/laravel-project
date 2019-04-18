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


Route::get('/', function () {
    return view('welcome');
});

Route::get('/form', function () {
    return view('page')->with('first_name', 'Sale');
})->name('get');

Route::post('/post', function () {
    return 'neki string za post';
})->name('post')->middleware('check.age');

Route::put('/put', function () {
    return 'neki string za put';
})->name('put');

Route::patch('/patch', function () {
    return 'neki string za patch';
})->name('patch');

Route::delete('/delete', function () {
    return 'neki string za post';
})->name('delete')->middleware('auth');


