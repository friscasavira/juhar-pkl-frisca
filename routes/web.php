<?php

use App\Http\Controllers\Admin\AdminController;
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
    route::get('/admin/guru', [AdminController::class, 'guru'])->name('admin.guru');
});
