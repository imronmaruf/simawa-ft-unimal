<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Frontend\BeritaController;
use App\Http\Controllers\Frontend\GaleriController;
use App\Http\Controllers\Frontend\LandingController;
use App\Http\Controllers\Frontend\InstansiController;



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

// Route::get('/', function () {
//     return view('welcome');
// });


// User access
Route::get('/', [LandingController::class, 'index']);
Route::get('/instansi/ft', [InstansiController::class,  'fakultas'])->name('landing.ft');
Route::get('/instansi/hmp', [InstansiController::class,  'hmp'])->name('landing.hmp');
Route::get('/berita', [BeritaController::class,  'index'])->name('berita');
Route::get('/galeri', [GaleriController::class,  'index'])->name('galeri');


// Authentication
Route::get('/login', [LoginController::class, 'index']);
