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
// メソッド定義の前に@をつける
Route::get('/', 'Postcontroller@index');
Route::get('/posts/{post}', 'Postcontroller@show');
