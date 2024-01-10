<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\GameController;
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

// Dashboard
Route::get('/', [GameController::class, 'index']);
// Menampilkan halaman dashboard.

Route::get('/game/{id}', [GameController::class, 'detail']);
// Menampilkan detail game berdasarkan ID.

// CRUD Movie
Route::get('/games/data', [GameController::class, 'data'])->middleware('auth');
// Memerlukan otentikasi untuk membaca data game.

Route::get('/games/create', [GameController::class, 'create'])->middleware('auth');
// Memerlukan otentikasi untuk menampilkan halaman pembuatan game.

Route::post('/game/store', [GameController::class, 'store'])->middleware('auth');
// Memerlukan otentikasi untuk menyimpan data game baru.

Route::get('/game/{id}/edit', [GameController::class, 'edit'])->middleware('auth');
// Memerlukan otentikasi untuk menampilkan halaman pengeditan game berdasarkan ID.

Route::post('/game/{id}/edit', [GameController::class, 'update'])->middleware('auth');
// Memerlukan otentikasi untuk menyimpan perubahan pada data game berdasarkan ID.

Route::get('/game/delete/{id}', [GameController::class, 'delete'])->middleware('auth');
// Memerlukan otentikasi untuk menghapus data game berdasarkan ID.

// Login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login')->middleware('guest');
// Menampilkan formulir login, hanya dapat diakses oleh tamu.
// Memberikan nama 'login' pada rute untuk referensi lebih mudah.
// Memerlukan pengguna untuk menjadi tamu (belum login).

Route::post('/login', [LoginController::class, 'authenticate']);
// Memproses permintaan login.

Route::post('/logout', [LoginController::class, 'logout']);
// Memproses permintaan logout.
