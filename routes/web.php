<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\ContactController;

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

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/', function () {
    return view('pages.main');
});

Route::get('/menu', function () {
    return view('pages.menu');
});

Route::get('/detail', function () {
    return view('pages.detail_menu');
});

Route::get('/contact', function () {
    return view('pages.contact');
});




