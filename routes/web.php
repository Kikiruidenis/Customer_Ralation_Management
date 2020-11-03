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
    return view('home.index');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('dashboard');

Route::get('/view_order', function () {
    return view('pages.view_order');
});

Route::get('/make_order', function () {
    return view('pages.make_order');
});

Route::get('/view_product', function () {
    return view('pages.view_product');
});

Route::get('/my_profile', function () {
    return view('pages.my_profile');
});
Route::get('/about', function () {
    return view('main.about');
});
Route::get('/service', function () {
    return view('main.service');
});
Route::get('/dropdown', function () {
    return view('main.dropdown');
});
Route::get('/index', function () {
    return view('main.home');
});
