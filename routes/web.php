<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DietaryController;
use App\Http\Controllers\GymController;


Route::prefix('')->group(function(){
    Route::get('/', [UserController::class, 'home'])->name('home');
    Route::get('/dietary', [UserController::class, 'dietary'])->name('dietary');
    Route::get('/gym', [UserController::class, 'gym'])->name('gym');
    Route::get('/bmi', [UserController::class, 'bmi'])->name('bmi');
});

Route::prefix('dietary')->group(function(){
    Route::get('/bulking', [UserController::class, 'bulking'])->name('dietary.bulking');
    Route::get('/cutting', [UserController::class, 'cutting'])->name('dietary.cutting');
    Route::get('/diet', [UserController::class, 'diet'])->name('dietary.diet');
    Route::get('/maintenance', [UserController::class, 'maintenance'])->name('dietary.maintenance');
    Route::get('/view/{id}', [UserController::class, 'dview'])->name('dietary.view');
});


//Admin Page

Route::get('/auth', [AuthController::class, 'index'])->name('login');
Route::post('/auth', [AuthController::class, 'login'])->name('login.validate');
Route::middleware('auth')->get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::prefix('admin')->middleware(['web', 'auth'])->group(function() {
    Route::get('/dietary', [AdminController::class, 'dietary'])->name('admin.dietary');
    Route::get('/gym', [AdminController::class, 'gym'])->name('admin.gym');
});

Route::prefix('admin/dietary')->middleware(['web', 'auth'])->group(function() {
    Route::get('/create', [DietaryController::class, 'create'])->name('admin.dietary.create');
    Route::post('/create', [DietaryController::class, 'insert'])->name('admin.dietary.insert');

    Route::get('/view/{id}', [DietaryController::class, 'read'])->name('admin.dietary.view');
    Route::post('/view/{id}', [DietaryController::class, 'update'])->name('admin.dietary.update');

    Route::get('/delete/{id}', [DietaryController::class, 'conf'])->name('admin.dietary.delete.conf');
    Route::delete('delete/{id}',[DietaryController::class, 'deletef'])->name('admin.dietary.delete');

    Route::get('/{sort}', [DietaryController::class, 'sort'])->name('admin.dietary.sort');
});

Route::prefix('admin/gym')->middleware(['web', 'auth'])->group(function() {
    Route::get('/create', [GymController::class, 'create'])->name('admin.gym.create');
    Route::post('/create', [GymController::class, 'insert'])->name('admin.gym.insert');

    Route::get('/view/{id}', [GymController::class, 'read'])->name('admin.gym.view');
    Route::post('/view/{id}', [GymController::class, 'update'])->name('admin.gym.update');

    Route::get('/delete/{id}', [GymController::class, 'conf'])->name('admin.gym.delete.conf');
    Route::delete('/delete/{id}', [GymController::class, 'deletef'])->name('admin.gym.delete');

    Route::get('/{sort}', [GymController::class, 'sort'])->name('admin.gym.sort');
});