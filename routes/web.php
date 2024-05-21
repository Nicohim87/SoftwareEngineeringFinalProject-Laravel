<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('user/home');
})->name('home');

Route::get('/bmi', function() {
    return view('user/bmi');
})->name('bmi');

Route::get('/gym', function() {
    return view('user/gym');
})->name('gym');

Route::get('/dietary', function() {
    return view('user/dietary');
})->name('dietary');




//Admin Page

Route::get('/auth', function(){
    return view('admin/auth');
})->name('auth');

Route::prefix('admin')->group(function() {
    Route::get('/', function() {
        return view('admin/home');
    })->name('admin.home');
});