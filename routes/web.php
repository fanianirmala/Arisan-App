<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
})->name('login');
Route::get('/event-arisan-baru', function () {
    return view('event-arisan-baru');
})->name('event-arisan-baru');
Route::get('/register', function () {
    return view('register');
})->name('register');
Route::get('/sidebar', function () {
    return view('template.sidebar');
})->name('sidebar');
