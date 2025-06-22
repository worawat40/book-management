<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

// เส้นทางสำหรับการลงทะเบียน (register) ผู้ใช้ใหม่
Route::post('register', [AuthController::class, 'register'])->name('register.submit');

// เส้นทางสำหรับการเข้าสู่ระบบ (login)
Route::post('login', [AuthController::class, 'login'])->name('login.submit');

// เส้นทางสำหรับการออกจากระบบ (logout)
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth:api')->group(function () {
    Route::post('books', [BookController::class, 'store'])->name('books.store');
});
