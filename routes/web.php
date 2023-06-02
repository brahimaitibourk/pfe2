<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\Maincontroller;
use App\Http\Controllers\ProfileController;
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
    return view('themes/javascript');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('booking', BookingController::class);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__.'/auth.php';

Route::post('auth/login', [Maincontroller::class, 'login'])->name('auth.login');
Route::post('auth/register', [Maincontroller::class, 'register'])->name('auth.register');
Route::get('themes/Homme', [Maincontroller::class, 'Homme'])->name('themes.Homme');
Route::get('themes/service', [Maincontroller::class, 'service'])->name('themes.service');
Route::get('themes/typeservice', [Maincontroller::class, 'typeservice'])->name('themes.typeservice');
