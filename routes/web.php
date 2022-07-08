<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    if (!Auth::check()) {
        return redirect('/register');
    }
});

Auth::routes();

Route::get('/main', [App\Http\Controllers\HomeController::class, 'index'])->name('main');

Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::post('/admin', [AdminController::class, 'createItem']);

// This one made just for test
Route::get('/getrole', [AdminController::class, 'getPerms'])->name('role');