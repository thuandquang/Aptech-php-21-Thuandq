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

Route::get('/aha', function () {
    return 'thuan';
});
// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/', function () {
//     return view('greeting', ['name'=>'Thuận']);
// });

Route::get('/t', function () {
    return '<h1 style="color:blue">hello</h1>';
});
Route::get('/php01', function () {
    return view('Aptech-php-21-Thuandq\PHP\05-20191021\USERDEMO\usersdemo');
});
Route::get('/php02', function () {
    return view('Aptech-php-21-Thuandq\PHP\01-20191011\index');
});
Route::get('/php03', function () {
    return view('Aptech-php-21-Thuandq\PHP\02-20191014\btap\index');
});
Route::get('/php04', function () {
    return view('Aptech-php-21-Thuandq\PHP\04-20191018\login');
});

