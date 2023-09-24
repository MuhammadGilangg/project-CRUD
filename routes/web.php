<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\CustomAuthController;
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



Route::resource('barang', BarangController::class);
Route::get('/', [CustomAuthController::class, 'showLoginForm'])->name('login');
// Rute untuk menampilkan formulir login
Route::get('/login', [CustomAuthController::class, 'showLoginForm'])->name('login');

// Rute untuk menangani proses login
Route::post('/login', [CustomAuthController::class, 'login']);

// Rute untuk menampilkan formulir registrasi
Route::get('/register', [CustomAuthController::class, 'showRegistrationForm'])->name('register');

// Rute untuk menangani proses registrasi
Route::post('/register', [CustomAuthController::class, 'register']);

// Rute untuk logout
Route::get('/logout', [CustomAuthController::class, 'logout'])->name('logout');
Route::get('/barang', [BarangController::class, 'index'])->name('barang.index');
Route::get('/barang/create', [BarangController::class, 'create'])->name('barang.create');
Route::post('/barang', [BarangController::class, 'store'])->name('barang.store');
Route::get('/barang/{barang}', [BarangController::class, 'show'])->name('barang.show');
Route::get('/barang/{barang}/edit', [BarangController::class, 'edit'])->name('barang.edit');
Route::put('/barang/{barang}', [BarangController::class, 'update'])->name('barang.update');
Route::delete('/barang/{barang}', [BarangController::class, 'destroy'])->name('barang.destroy');
