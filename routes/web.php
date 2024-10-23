<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DudiController;
use App\Http\Controllers\Admin\GuruController;
use App\Http\Controllers\Admin\PembimbingController;
use App\Http\Controllers\Admin\SiswaController;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\Auth\GuruLoginController;
use App\Models\Admin\Admin;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

route::middleware(['guest'])->group(function () {
    route::get('/admin/login', [AdminLoginController::class, 'login'])->name('admin.login');
    route::post('/admin/login', [AdminLoginController::class, 'auth'])->name('admin.auth');
    route::get('/guru/login', [GuruLoginController::class, 'login'])->name('guru.login');
    route::post('/guru/login', [GuruLoginController::class, 'auth'])->name('guru.auth');
});

route::middleware(['admin'])->group(function() {
    route::get('/admin/dashboard', [AdminController::class,'dashboard'])->name('admin.dashboard');
    route::get('/admin/profile', [AdminController::class, 'profile'])->name('admin.profile');
    route::put('/admin/profile/update', [AdminController::class, 'update'])->name('admin.profile.update');
    route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
    route::get('/admin/guru', [GuruController::class, 'guru'])->name('admin.guru');
    route::get('/admin/guru/tambah', [GuruController::class, 'create'])->name('admin.guru.create');
    route::post('/admin/guru/tambah', [GuruController::class, 'store'])->name('admin.guru.store');
    route::get('/admin/guru/edit/{id}', [GuruController::class, 'edit'])->name('admin.guru.edit');
    route::put('/admin/guru/edit/{id}', [GuruController::class, 'update'])->name('admin.guru.update');
    route::get('/admin/guru/delete/{id}', [GuruController::class, 'delete'])->name('admin.guru.delete');

    route::get('/admin/dudi', [DudiController::class, 'dudi'])->name('admin.dudi');
    route::get('/admin/dudi/tambah', [DudiController::class, 'create'])->name('admin.dudi.create');
    route::post('/admin/dudi/tambah', [DudiController::class, 'store'])->name('admin.dudi.store');
    route::get('/admin/dudi/edit/{id}', [DudiController::class, 'edit'])->name('admin.dudi.edit');
    route::put('/admin/dudi/edit/{id}', [DudiController::class, 'update'])->name('admin.dudi.update');
    route::get('/admin/dudi/delete/{id}', [DudiController::class, 'delete'])->name('admin.dudi.delete');

    route::get('/admin/pembimbing', [PembimbingController::class, 'pembimbing'])->name('admin.pembimbing');
    route::get('/admin/pembimbing/tambah', [PembimbingController::class, 'create'])->name('admin.pembimbing.create');
    route::post('/admin/pembimbing/tambah', [PembimbingController::class, 'store'])->name('admin.pembimbing.store');
    route::get('/admin/pembimbing/edit/{id}', [PembimbingController::class, 'edit'])->name('admin.pembimbing.edit');
    route::put('/admin/pembimbing/edit/{id}', [PembimbingController::class, 'update'])->name('admin.pembimbing.update');
    route::get('/admin/pembimbing/delete/{id}', [PembimbingController::class, 'delete'])->name('admin.pembimbing.delete');

    route::get('/admin/pembimbing/{id}/siswa', [SiswaController::class, 'siswa'])->name('admin.pembimbing.siswa');
    route::get('/admin/pembimbing/{id}/siswa/tambah', [SiswaController::class, 'create'])->name('admin.pembimbing.siswa.create');
    route::post('/admin/pembimbing/{id}/siswa/tambah', [SiswaController::class, 'store'])->name('admin.pembimbing.siswa.store');
    route::get('/admin/pembimbing/{id}/siswa/edit/{id_siswa}', [SiswaController::class, 'edit'])->name('admin.pembimbing.siswa.edit');
    route::put('/admin/pembimbing/{id}/siswa/edit/{id_siswa}', [SiswaController::class, 'update'])->name('admin.pembimbing.siswa.update');
    route::get('/admin/pembimbing/{id}/siswa/delete/{id_siswa}', [SiswaController::class, 'delete'])->name('admin.pembimbing.siswa.delete');


});


    route::get('/guru/dashboard', [GuruController::class,'dashboard'])->name('guru.dashboard');
