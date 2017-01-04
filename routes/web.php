<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['middleware' => 'auth'], function () {

    Route::get('/chat', 'ChatController@index');
    Route::post('/chat', 'ChatController@store');
    Route::get('/api/refresh', 'ChatController@ajaxPost');

//    Route::get('/chat', function() {
//
//        $users = \App\User::all();
//        $messages = \App\ChatMessage::all();
//
//        return view('chat')->with('users',$users)->with('messages',$messages);
//    });

});