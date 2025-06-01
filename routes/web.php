<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\ForgotPasswordController;

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

// searching
Route::get('/search', [SearchController::class, 'search'])->name('search');

// tampilkan detail obat
Route::get('/medicines/{id}', [MedicineController::class, 'show'])->name('medicine.detail');

// bookmarks
Route::post('/bookmark/{medicine_id}', [BookmarkController::class, 'store'])->name('medicine.bookmark');
Route::get('/bookmarks', [BookmarkController::class, 'index'])->name('medicine.bookmarks');
Route::delete('/bookmark/{medicine_id}', [BookmarkController::class, 'delete'])->name('medicine.bookmark.remove');
