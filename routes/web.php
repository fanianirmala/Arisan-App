<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RouteController;

<<<<<<< HEAD
Route::get('/', function () {
    return view('splash-screen');
});
Route::get('/sidebar', function () {
    return view('template.sidebar');
});
Route::get('/test', function () {
    return view('test');
});
Route::get('/arisan-detail', function () {
    return view('\detail-arisan');
})->name('detail');
Route::get('/arisan-user', function () {
    return view('\detail-user');
});
=======
Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/detailevent', [HomeController::class, 'detail'])->name('detailevent');
Route::get('/event-arisan-baru', [RouteController::class, 'eventArisanBaru'])->name('event-arisan-baru');
Route::get('/register', [RouteController::class, 'register'])->name('register');
>>>>>>> 602d8ddc0f13f010d97b4178e1a0365b2eb8854e
