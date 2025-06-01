<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
});;

Route::get('/home', function () {
    return view('home');
});;

Route::get('/search', function () {
    return view('search');
});;

Route::get('/riwayat', function () {
    return view('riwayat');
});;

Route::get('/profil', function () {
    return view('profil');
});;

Route::get('/bookmarks', function () {
    return view('bookmarks');
});;

Route::get('/detail', function () {
    return view('detail');
});;


Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'processRegister']);
