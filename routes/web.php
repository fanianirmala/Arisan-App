<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RouteController;

Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
Route::get('/register', [RouteController::class, 'register'])->name('register');
Route::get('/list-arisan', [HomeController::class, 'listArisan'])->name('list-arisan');
Route::get('/detail-event', [HomeController::class, 'detailEvent'])->name('detail-event');
Route::get('/daftar-user', [RouteController::class, 'daftarUser'])->name('daftar-user');
Route::get('/detail-user', [RouteController::class, 'detailUser'])->name('detail-user');
Route::get('/event-arisan-baru', [RouteController::class, 'eventArisanBaru'])->name('event-arisan-baru');
Route::get('/data-detail-user', [RouteController::class, 'dataDetailUser'])->name('data-detail-user');
Route::get('/view-profile', [RouteController::class, 'viewProfile'])->name('view-profile');
