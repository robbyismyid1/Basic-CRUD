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
    return view('front-end.index');
});

Route::get('/archive', function () {
    return view('front-end.archive');
});

Route::get('/category', function () {
    return view('front-end.category');
});

Route::get('/elements', function () {
    return view('front-end.elements');
});

Route::get('/generic', function () {
    return view('front-end.generic');
});

Route::get('/search', function () {
    return view('front-end.search');
});

Route::get('/single', function () {
    return view('front-end.single');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
