<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TamuController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\AdminKamarController;
use App\Http\Controllers\AdminFasKamarController;
use App\Http\Controllers\AdminFasHotelCrontroller;
use App\Http\Controllers\ResepsionisController;



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

// Admin Route
Route::middleware(['auth', 'admin'])->group(function (){
    Route::resource('/admin', AdminKamarController::class);
Route::get('/admin-kamar', [AdminKamarController::class, 'index']);



Route::resource('/fas-kamar', AdminFasKamarController::class);
Route::get('/admin-fas-kamar', [AdminFasKamarController::class, 'index']);


Route::resource('/fas-hotel', AdminFasHotelCrontroller::class);
Route::get('/admin-fas-hotel', [AdminFasHotelCrontroller::class, 'index']);
});

// Resepsionis Route
Route::middleware(['auth', 'resepsionis'])->group(function (){
    Route::resource('/resepsionis', ResepsionisController::class);
Route::get('/admin-resepsionis', [ResepsionisController::class, 'index']);

});
Route::resource('/', TamuController::class);
Route::get('/', [TamuController::class, 'index']);
Route::get('/invoice', [TamuController::class, 'invoice']);


Route::resource('/hotel', HotelController::class);
Route::get('/hotel', [HotelController::class, 'index']);

Route::resource('/kamar', KamarController::class);
Route::get('/kamar', [KamarController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
