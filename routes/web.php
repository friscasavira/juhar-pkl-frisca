<?php

use App\Http\Controllers\Auth\AdminLoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

route::get('/admin/login', [AdminLoginController::class, 'login'])->name('admin.login');
