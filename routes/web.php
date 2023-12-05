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
    return view('index');
})->name('index');

Route::get('privacy_policy', function () {
    return view('privacy');
})->name('policy');

Route::get('terms_and_condition', function () {
    return view('terms_and_condition');
})->name('terms_and_condition');
