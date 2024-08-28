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
