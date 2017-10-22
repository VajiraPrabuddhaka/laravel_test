<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/addoffer', function () {
    return view('addoffer');
});

Route::get('/viewall', function () {
    return view('viewall');
});

Route::post('/submitOffer' ,'MessagesController@submitOffer');

Route::get('/home', function () {
    return view('home');
});

Route::get('/editoffer', function () {
    return @redirect('/addoffer');
});

Route::get('offer/editoffer/{id}/{offer_name}', function ($id, $name) {
    return $id.$name;
});