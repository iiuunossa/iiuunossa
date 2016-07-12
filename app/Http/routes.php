<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('Welcome');
});


Route::get('/issue', function () {
    return view('/issue/index');
});

Route::get('/issue/create', function () {
    return view('issue/create');
});

Route::get('/issue/edit', function () {
    return view('issue/edit');
});

Route::get('/issue/vote', function () {
    return view('issue/vote');
});