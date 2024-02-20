<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Frontend\BeritaController;
use App\Http\Controllers\Frontend\GaleriController;
use App\Http\Controllers\Frontend\LandingController;
use App\Http\Controllers\Frontend\InstansiController;
use App\Http\Controllers\Backend\AdminDashboardController;
use App\Http\Controllers\Backend\SuperAdminDashboardController;



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

// Route::get('/dashboard', function () {
//     return view('backend.index');
// });


// User access
Route::get('/', [LandingController::class, 'index']);
Route::get('/instansi/ft', [InstansiController::class,  'fakultas'])->name('landing.ft');
Route::get('/instansi/hmp', [InstansiController::class,  'hmp'])->name('landing.hmp');
Route::get('/berita', [BeritaController::class,  'index'])->name('berita');
Route::get('/galeri', [GaleriController::class,  'index'])->name('galeri');


// Authentication
Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate']);
});


Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


// SuperAdmin access
Route::middleware(['auth', 'userAkses:1'])->group(function () {
    Route::get('/dashboard', [SuperAdminDashboardController::class, 'index'])->name('dashboard.superadmin');
});

// Admin access
Route::middleware(['auth', 'userAkses:2'])->group(function () {
    Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard.admin');
});
