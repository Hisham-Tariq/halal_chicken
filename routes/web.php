<?php

use Illuminate\Support\Facades\Route;

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
    return view('client.views.home');
});


Route::get('/menu', function () {
    return view('client.views.menu');
});


Route::get('/contact-us', function () {
    return view('client.views.contact_us');
});


Route::get('/shop', function () {
    return view('client.views.shop');
});

Route::get('/shop-detail', function () {
    return view('client.views.shop_detail');
});


Route::get('/about-us', function () {
    return view('client.views.about_us');
});


Route::get('/cart', function () {
    return view('client.views.cart');
});

Route::get('/check-out', function () {
    return view('client.views.check_out');
});

Route::get('/error', function () {
    return view('client.views.error');
});

Route::get('/wishlist', function () {
    return view('client.views.wishlist');
});



