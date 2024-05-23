<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;

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

Route::get('/auth', [AuthController::class, 'index'])->name('login');

Route::post('/auth', [AuthController::class, 'login'])->name('login.validate');

Route::middleware('auth')->get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::prefix('admin')->middleware('auth')->group(function() {
    Route::get('/', function() {
        return view('admin/home');
    })->name('admin.home');
});