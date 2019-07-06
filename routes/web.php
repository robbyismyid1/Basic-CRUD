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

Route::get('/about', function () {
    return view('front-end.about');
});

Route::get('/contact', function () {
    return view('front-end.contact');
});

Route::get('/joinus', function () {
    return view('front-end.joinus');
});

Route::get('/review', function () {
    return view('front-end.review');
});

Route::get('/single', function () {
    return view('front-end.single');
});

Route::get('/artikel', function () {
    return view('artikel.create');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('artikel', 'ArtikelController');
Route::resource('tag', 'TagController');
Route::resource('kategori', 'KategoriController');