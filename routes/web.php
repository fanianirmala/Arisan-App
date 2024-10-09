<?php

use Illuminate\Support\Facades\Route;

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