<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/bmi', function() {
    return view('bmi');
})->name('bmi');

Route::get('/gym', function() {
    return view('gym');
})->name('gym');

Route::get('/dietary', function() {
    return view('dietary');
})->name('dietary');