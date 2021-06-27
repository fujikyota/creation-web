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
    $message = '';
    return view('HP.index', compact('message'));
});
Route::get('/recruit', function () {
    return view('HP.recruit');
});
Route::get('/entry', function () {
    $message = '';
    return view('HP.entry', compact('message'));
});
Route::get('/message', function () {
    return view('HP.message');
});
Route::get('/human', function () {
    return view('HP.human');
});
Route::get('/work', function () {
    return view('HP.work');
});
Route::get('/common', function () {
    return view('layout.common');
});
