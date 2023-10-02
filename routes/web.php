<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.home');
})->name('home');
Route::view('/trailers','pages.trailers')->name('trailers');
Route::view('/foodtrucks','pages.foodtrucks')->name('foodtrucks');
Route::view('/about-us','pages.about-us')->name('about-us');
