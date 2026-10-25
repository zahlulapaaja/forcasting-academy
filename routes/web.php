<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OnlineCoursesController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', fn() => redirect('/paket'));
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/dashboard/online-courses', [OnlineCoursesController::class, 'index'])->name('dashboard.online-courses');
Route::get('/dashboard/online-courses/list', [OnlineCoursesController::class, 'list'])->name('dashboard.online-courses.list');

Route::get('/paket', [OnlineCoursesController::class, 'index'])->name('paket');
