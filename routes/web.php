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

// Route::get('/', function () {
//     return view('home');
// });

Route::view('/', 'pages.home')->name('home');
// Route::get('/', fn() => view('pages.home'))->name('home');

Route::view('about-us', 'pages.about')->name('about');

Route::view('help', 'pages.help')->name('help');







