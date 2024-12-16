<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AdminLoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

route::middleware(['guest'])->group(function () {
    route::get('/admin/login', [AdminLoginController::class, 'login'])->name('admin.login');
    route::post('/admin/login', [AdminLoginController::class, 'auth'])->name('admin.auth');
});

route::middleware(['admin'])->group(function () {
    route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    route::get('/admin/profile', [AdminController::class, 'profile'])->name('admin.profile');
    route::put('/admin/profile/update', [AdminController::class, 'update'])->name('admin.profile.update');
    route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
});
