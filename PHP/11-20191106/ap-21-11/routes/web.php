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
// Route::get('/users', 'UserController@index')->name('user.index');
// Route::get('/users/create', 'UserController@create');
// Route::get('/users/{id}', 'UserController@show');
// Route::post('/users', 'UserController@store');
// Route::delete('/users/{id}', 'UserController@destroy');
// Route::get('/users/{id}/edit','UserController@edit');
// Route::put('/user/{id}', 'UserController@update')->name('user.update');

route::resource('users','UserController');