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

use App\Http\Controllers\ArticleController;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('articles','ArticleController');

//https://github.com/thuandquang/Aptech-php-21-Thuandq/tree/master/PHP/DangQuangThuan/dangquangthuan-aptech-21
