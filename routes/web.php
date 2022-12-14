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

Route::get('/vue-learning', function () {
    return view('vue-learning');
});

Route::get('/vue-attribute-binding', function () {
    return view('vue-attribute-binding');
});

Route::get('/vue-lists-and-computed-properties', function () {
    return view('vue-lists-and-computed-properties');
});

Route::get('/vue-custom-component', function () {
    return view('vue-custom-component');
});
