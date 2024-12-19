<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ServisController;
use Illuminate\Support\Facades\Route;

route::get('/', [HomeController::class, 'home'])->name('home');

route::middleware(['guest'])->group(function () {
    route::get('/admin/login', [AdminLoginController::class, 'login'])->name('admin.login');
    route::post('/admin/login', [AdminLoginController::class, 'auth'])->name('admin.auth');
});

route::middleware(['admin'])->group(function () {
    route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    route::get('/admin/profile', [AdminController::class, 'profile'])->name('admin.profile');
    route::put('/admin/profile/update', [AdminController::class, 'update'])->name('admin.profile.update');
    route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

    route::get('/admin/portfolio', [PortfolioController::class, 'portfolio'])->name('admin.portfolio');
    route::get('/admin/portfolio/tambah', [PortfolioController::class, 'create'])->name('admin.portfolio.create');
    route::post('/admin/portfolio/tambah', [PortfolioController::class, 'store'])->name('admin.portfolio.store');
    route::get('/admin/portfolio/edit/{id}', [PortfolioController::class, 'edit'])->name('admin.portfolio.edit');
    route::put('/admin/portfolio/edit/{id}', [PortfolioController::class, 'update'])->name('admin.portfolio.update');
    route::get('/admin/portfolio/delete/{id}', [PortfolioController::class, 'delete'])->name('admin.portfolio.delete');

    route::get('/admin/team', [TeamController::class, 'team'])->name('admin.team');
    route::get('/admin/team/tambah', [TeamController::class, 'create'])->name('admin.team.create');
    route::post('/admin/team/tambah', [TeamController::class, 'store'])->name('admin.team.store');
    route::get('/admin/team/edit/{id}', [TeamController::class, 'edit'])->name('admin.team.edit');
    route::put('/admin/team/edit/{id}', [TeamController::class, 'update'])->name('admin.team.update');
    route::get('/admin/team/delete/{id}', [TeamController::class, 'delete'])->name('admin.team.delete');

    route::get('/admin/contact', [ContactController::class, 'contact'])->name('admin.contact');
    route::get('/admin/contact/tambah', [ContactController::class, 'create'])->name('admin.contact.create');
    route::post('/admin/contact/tambah', [ContactController::class, 'store'])->name('admin.contact.store');
    route::get('/admin/contact/edit/{id}', [ContactController::class, 'edit'])->name('admin.contact.edit');
    route::put('/admin/contact/edit/{id}', [ContactController::class, 'update'])->name('admin.contact.update');
    route::get('/admin/contact/delete/{id}', [ContactController::class, 'delete'])->name('admin.contact.delete');


    route::get('/admin/company', [CompanyController::class, 'company'])->name('admin.company');
    route::get('/admin/company/tambah', [CompanyController::class, 'create'])->name('admin.company.create');
    route::post('/admin/company/tambah', [CompanyController::class, 'store'])->name('admin.company.store');
    route::get('/admin/company/edit/{id}', [CompanyController::class, 'edit'])->name('admin.company.edit');
    route::put('/admin/company/edit/{id}', [CompanyController::class, 'update'])->name('admin.company.update');
    route::get('/admin/company/delete/{id}', [CompanyController::class, 'delete'])->name('admin.company.delete');


    route::get('/admin/about', [AboutController::class, 'about'])->name('admin.about');
    route::get('/admin/about/tambah', [AboutController::class, 'create'])->name('admin.about.create');
    route::post('/admin/about/tambah', [AboutController::class, 'store'])->name('admin.about.store');
    route::get('/admin/about/edit/{id}', [AboutController::class, 'edit'])->name('admin.about.edit');
    route::put('/admin/about/edit/{id}', [AboutController::class, 'update'])->name('admin.about.update');
    route::get('/admin/about/delete/{id}', [AboutController::class, 'delete'])->name('admin.about.delete');

    route::get('/admin/kategori', [KategoriController::class, 'kategori'])->name('admin.kategori');
    route::get('/admin/kategori/tambah', [KategoriController::class, 'create'])->name('admin.kategori.create');
    route::post('/admin/kategori/tambah', [KategoriController::class, 'store'])->name('admin.kategori.store');
    route::get('/admin/kategori/edit/{id}', [KategoriController::class, 'edit'])->name('admin.kategori.edit');
    route::put('/admin/kategori/edit/{id}', [KategoriController::class, 'update'])->name('admin.kategori.update');
    route::get('/admin/kategori/delete/{id}', [KategoriController::class, 'delete'])->name('admin.kategori.delete');


    route::get('/admin/servis', [ServisController::class, 'servis'])->name('admin.servis');
    route::get('/admin/servis/tambah', [ServisController::class, 'create'])->name('admin.servis.create');
    route::post('/admin/servis/tambah', [ServisController::class, 'store'])->name('admin.servis.store');
    route::get('/admin/servis/edit/{id}', [ServisController::class, 'edit'])->name('admin.servis.edit');
    route::put('/admin/servis/edit/{id}', [ServisController::class, 'update'])->name('admin.servis.update');
    route::get('/admin/servis/delete/{id}', [ServisController::class, 'delete'])->name('admin.servis.delete');
});
