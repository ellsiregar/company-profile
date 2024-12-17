<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AdminLoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('user.layouts.app');
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

    route::get('/admin/menu', [AdminController::class, 'menu'])->name('admin.menu');
    route::get('/admin/menu/tambah', [AdminController::class, 'create'])->name('admin.menu.create');
    route::post('/admin/menu/tambah', [AdminController::class, 'store'])->name('admin.menu.store');
    route::get('/admin/menu/edit', [AdminController::class, 'edit'])->name('admin.menu.edit');
    route::put('/admin/menu/edit', [AdminController::class, 'update'])->name('admin.menu.update');
    route::get('/admin/menu/delete', [AdminController::class, 'delete'])->name('admin.menu.delete');

    route::get('/admin/team', [AdminController::class, 'team'])->name('admin.team');
    route::get('/admin/team/tambah', [AdminController::class, 'create'])->name('admin.team.create');
    route::post('/admin/team/tambah', [AdminController::class, 'store'])->name('admin.team.store');
    route::get('/admin/team/edit', [AdminController::class, 'edit'])->name('admin.team.edit');
    route::put('/admin/team/edit', [AdminController::class, 'update'])->name('admin.team.update');
    route::get('/admin/team/delete', [AdminController::class, 'delete'])->name('admin.team.delete');

    route::get('/admin/contact', [AdminController::class, 'contact'])->name('admin.contact');
    route::get('/admin/contact/tambah', [AdminController::class, 'create'])->name('admin.contact.create');
    route::post('/admin/contact/tambah', [AdminController::class, 'store'])->name('admin.contact.store');
    route::get('/admin/contact/edit', [AdminController::class, 'edit'])->name('admin.contact.edit');
    route::put('/admin/contact/edit', [AdminController::class, 'update'])->name('admin.contact.update');
    route::get('/admin/contact/delete', [AdminController::class, 'delete'])->name('admin.contact.delete');
});
