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
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/languages', function () {
    return view('languages');
});

Route::get('/tchat', function () {
    return view('tchat');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/abonnement', function () {
    return view('abonnement');
});

Route::get('/payments', function () {
    return view('payments');
});