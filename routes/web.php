<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DietaryController;

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

Route::prefix('admin')->middleware(['web', 'auth'])->group(function() {
    Route::get('/dietary', [AdminController::class, 'dietary'])->name('admin.dietary');
    Route::get('/gym', [AdminController::class, 'gym'])->name('admin.gym');
});

Route::prefix('admin/dietary')->middleware(['web', 'auth'])->group(function() {
    Route::get('/view', [DietaryController::class, 'read'])->name('admin.dietary.view');
    Route::get('/create', [DietaryController::class, 'create'])->name('admin.dietary.create');
    Route::post('/create', [DietaryController::class, 'insert'])->name('admin.dietary.insert');
});