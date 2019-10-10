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


Route::get('/mail', function () {
    $result = Mail::send('email.c', [], function($message){
        $message->from('noreply@mydomain.com', 'My Website');
        $message->to('sia_dev@inbox.lv')->subject('My Subject');
    });

// Laravel tells us exactly what email addresses failed, let's send back the first
    $fail = Mail::failures();
    
    if(!empty($fail)) throw new \Exception('Could not send message to '.$fail[0]);
    
    if(empty($result)) throw new \Exception('Email could not be sent.');
    
});
