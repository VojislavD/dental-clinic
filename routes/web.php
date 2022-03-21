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

Route::view('/', 'front.welcome')->name('welcome');
Route::view('/about', 'front.about')->name('about');
Route::view('/services', 'front.services')->name('services');
Route::view('/gallery', 'front.gallery')->name('gallery');
Route::view('/team', 'front.team')->name('team');
Route::view('/contact', 'front.contact')->name('contact');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard');
