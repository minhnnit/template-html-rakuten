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
    return view('v2-welcome');
});
Route::get('/storeDetail', function () {
    return view('storeDetail');
});
Route::get('/categoriesDetail', function () {
    return view('categoriesDetail');
});
Route::get('/AllStores', function () {
    return view('AllStores');
});

/*qvc_166x166.png*/

