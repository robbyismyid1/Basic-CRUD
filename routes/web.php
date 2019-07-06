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

    Auth::routes();

    Route::get('/home', 'HomeController@index')->name('home');
    Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
        Route::resource('/artikel', 'ArtikelController');
        Route::resource('/kategori', 'KategoriController');
        Route::resource('/tag', 'TagController');
    }); 