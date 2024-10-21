<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RouteController;

<<<<<<< HEAD
Route::get('/', function () {
    return view('splash-screen');
});
Route::get('/table', function () {
    return view('table');
});
Route::get('/detail-deposit', function () {
    return view('detail-deposit');
});

Route::get('/daftar-user', function() {
    return view('daftar-user');
});
Route::get('/detail-user1', function() {
    return view('detail-user1');
});
Route::get('/sidebar', function () {
    return view('template.sidebar');
});

Route::get('/test', function () {
    return view('test');
});
=======
Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/detail-event', [HomeController::class, 'detail'])->name('detail-event');
Route::get('/event-arisan-baru', [RouteController::class, 'eventArisanBaru'])->name('event-arisan-baru');
Route::get('/register', [RouteController::class, 'register'])->name('register');
Route::get('/detail-user', [RouteController::class, 'detailUser'])->name('detail-user');
Route::get('/detailarisan', [RouteController::class, 'detailarisan'])->name('detailarisan');
<<<<<<< HEAD
=======

// Route::get('/arisan-detail', function () {
//     return view('\detail-arisan');
// })->name('detail');
// Route::get('/arisan-user', function () {
//     return view('\detail-user');
// });

>>>>>>> f707b62ee3f2c5fc437057f556997f4be9ca066b
>>>>>>> 317333d29bce097a51a37ab64c9aa3e3d7aa3090
>>>>>>> cc9348760f4fad0a65ea20327bffcb0b41b9fa95
