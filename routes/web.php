<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RouteController;


Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/detail-event', [HomeController::class, 'detail'])->name('detail-event');
Route::get('/event-arisan-baru', [RouteController::class, 'eventArisanBaru'])->name('event-arisan-baru');
Route::get('/register', [RouteController::class, 'register'])->name('register');
Route::get('/daftar-user', [RouteController::class, 'daftarUser'])->name('daftar-user');
Route::get('/detail-user', [RouteController::class, 'detailUser'])->name('detail-user');
Route::get('/detailarisan', [RouteController::class, 'detailarisan'])->name('detailarisan');
Route::get('/daftar-user', [RouteController::class, 'daftarUser'])->name('daftar-user');
Route::get('/data-personal', [RouteController::class, 'dataPersonal'])->name('data-personal');
Route::get('/data-transaksi', [RouteController::class, 'dataTransaksi'])->name('data-transaksi');
Route::get('/view-profile', [RouteController::class, 'viewProfile'])->name('view-profile');
