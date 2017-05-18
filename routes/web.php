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
    return view('pages.etusivu');
});

Route::get('/tasoituksen-muodostuminen', function () {
    return view('pages.tasoituksen-muodostuminen');
});

Route::get('/yleisurheilun-harrastaminen', function () {
    return view('pages.yleisurheilun-harrastaminen');
});

Route::get('/taso', 'ResultsController@index');

Route::get('/syota-kilpailutulokset', 'ResultsController@create');

Route::resource('results', 'ResultsController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
