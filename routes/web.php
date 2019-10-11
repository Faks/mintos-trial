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

Auth::routes(['verify' => true]);

Route::get('/home', 'RSSArticlesController@index')->name('home');
Route::get('/rss', 'RSSArticlesController@collect')->name('rss');
Route::get('/rss/store', 'RSSArticlesController@store')->name('rss-store');
Route::post('/register/validate/email', 'Auth\RegisterController@validateEmail');
