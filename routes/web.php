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
})->name('home');

Route::get('about', function () {
    return view('about');
})->name('about');

Route::get('service', function () {
    return view('service');
})->name('service');

Route::get('protfolio', function () {
    return view('protfolio');
})->name('protfolio');

Route::get('blog', function () {
    return view('blog');
})->name('blog');

Route::get('message', function () {
    return view('message');
})->name('message');

Route::get('contact', function () {
    return view('contact');
})->name('contact');