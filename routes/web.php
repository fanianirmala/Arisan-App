<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RouteController;

Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/detailevent', [HomeController::class, 'detail'])->name('detailevent');
Route::get('/event-arisan-baru', [RouteController::class, 'eventArisanBaru'])->name('event-arisan-baru');
Route::get('/register', [RouteController::class, 'register'])->name('register');
Route::get('/detailarisan', [RouteController::class, 'detailarisan'])->name('detailarisan');

// Route::get('/arisan-detail', function () {
//     return view('\detail-arisan');
// })->name('detail');
// Route::get('/arisan-user', function () {
//     return view('\detail-user');
// });

