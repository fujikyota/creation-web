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
Route::get('/index', function () {
    return view('HP.index');
});
Route::get('/recruit', function () {
    return view('HP.recruit');
});
Route::get('/entry', function () {
    return view('HP.entry');
});
Route::get('/message', function () {
    return view('HP.message');
});
Route::get('/mission', function () {
    return view('HP.mission');
});
Route::get('/work', function () {
    return view('HP.work');
});
Route::get('/common', function () {
    return view('layout.common');
});
