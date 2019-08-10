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

Route::get('/map', function () {
    return view('geolocalization.map');
})->name('map');

Route::get('/ubicacion', function () {
    return view('geolocalization.ubicacion');
})->name('ubicacion');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
