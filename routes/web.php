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
    return view('layout');
});

Route::get('home', 'companycontroller@home');
Route::get('about', 'companycontroller@about');
Route::get('product', 'companycontroller@product');
Route::get('teams', 'companycontroller@teams');
Route::get('contact', 'companycontroller@contact');

Route::get('product', 'companycontroller@show');

