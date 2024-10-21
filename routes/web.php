<?php

use Illuminate\Support\Facades\Route;

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
