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
    return view('welcome');
});

Route::get('/lp', function () {
    return view('landing-page');
});

Route::get('/submit-property', function () {
    return view('submit-property');
});

Route::get('/home-quest', function () {
    return view('home-quest');
});