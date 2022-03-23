<?php

use App\Http\Controllers\DashboardController;
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
Route::view('/appointment/book', 'front.bookAppointment')->name('bookAppointment');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/dashboard', DashboardController::class)->name('dashboard');
    Route::view('/appointments', 'admin.appointments')->name('appointments');
    Route::view('/appointments/create', 'admin.appointments-create')->name('appointments.create');
});