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
    return view('content/homepage');
});

Route::get('faq', function () {
    return view('content/faq');
});

Route::get('kontakt', function () {
    return view('content/contact');
});

Route::post('order', 'OrderController@submitted');

Route::get('order-ic', function () {
    return view('order/order-ic');
});

Route::get('order-person', function () {
    return view('order/order-person');
});
