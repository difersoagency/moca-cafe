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


Route::get('/contact', function () {
    return view('pages.contact');
});


Route::group(['prefix' => '/menu'], function () {
    Route::get('/', [App\Http\Controllers\RestoController::class, 'show_menu'])->name('menu.show');
    Route::get('/data', [App\Http\Controllers\RestoController::class, 'menu_data'])->name('menu.data');
    Route::get('/detail/{id}', [App\Http\Controllers\RestoController::class, 'menu_detail'])->name('menu.detail');
});



