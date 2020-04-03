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
Route::get('/my-account', function () {
    return view('myAccount');
});
Route::get('/favorites', function () {
    return view('favorites');
});
Route::get('/shopping-trips', function () {
    return view('shoppingTrips');
});
Route::get('/pending-cashback', function () {
    return view('pendingCashback');
});
Route::get('/big-fat', function () {
    return view('bigFat');
});
Route::get('/account-settings', function () {
    return view('accountSettings');
});
Route::get('/my-wallet', function () {
    return view('myWallet');
});
Route::get('/reservations', function () {
    return view('reservations');
});
Route::get('/subscriptions', function () {
    return view('emailSubscriptions');
});

/*qvc_166x166.png*/

