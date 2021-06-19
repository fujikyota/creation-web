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
    return view('index');
});
Route::get('/recruit', function () {
    return view('recruit');
});
Route::get('/entry', function () {
    return view('entry');
});
Route::get('/message', function () {
    return view('message');
});
Route::get('/mission', function () {
    return view('mission');
});
Route::get('/work', function () {
    return view('work');
});
