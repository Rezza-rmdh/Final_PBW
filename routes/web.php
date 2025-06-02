<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookmarkController;
use App\Http\Controllers\SearchHistoryController;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ProfileController;

// Halaman Utama
Route::get('/', function () {
    return view('index');
})->name('index');

// Autentikasi (Login, Register, Logout)
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

// Home
Route::get('/home', [HomeController::class, 'index'])->name('home');

// searching
Route::get('/search', [SearchController::class, 'search'])->name('search');

// tampilkan detail obat
Route::get('/medicines/{id}', [MedicineController::class, 'show'])->name('medicine.detail');

// bookmarks
Route::post('/bookmark/{medicine_id}', [BookmarkController::class, 'store'])->name('medicine.bookmark');
Route::get('/bookmarks', [BookmarkController::class, 'index'])->name('medicine.bookmarks');
Route::delete('/bookmark/{medicine_id}', [BookmarkController::class, 'delete'])->name('medicine.bookmark.remove');

// tampilan halaman riwayat
Route::get('/riwayat', [SearchHistoryController::class, 'index'])->name('riwayat');

// profile
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::put('/profile/update-password', [ProfileController::class, 'updatePassword'])->name('profile.updatePassword');
