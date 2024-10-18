<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\GuruController;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Models\Admin\Admin;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

route::middleware(['guest'])->group(function () {
    route::get('/admin/login', [AdminLoginController::class, 'login'])->name('admin.login');
    route::post('/admin/login', [AdminLoginController::class, 'auth'])->name('admin.auth');
});

route::middleware(['admin'])->group(function() {
    route::get('/admin/dashboard', [AdminController::class,'dashboard'])->name('admin.dashboard');
    route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
    route::get('/admin/guru', [GuruController::class, 'guru'])->name('admin.guru');
    route::get('/admin/guru/tambah', [GuruController::class, 'create'])->name('admin.guru.create');
    route::post('/admin/guru/tambah', [GuruController::class, 'store'])->name('admin.guru.store');
    route::get('/admin/guru/edit/{id}', [GuruController::class, 'edit'])->name('admin.guru.edit');
    route::put('/admin/guru/edit/{id}', [GuruController::class, 'update'])->name('admin.guru.update');
    route::get('/admin/guru/delete/{id}', [GuruController::class, 'delete'])->name('admin.guru.delete');

});
