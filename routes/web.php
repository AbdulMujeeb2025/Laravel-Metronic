<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

// Temporary route to test layout
Route::get('/test', function () {
    return view('dashboard');
});