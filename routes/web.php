<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');


//  Admin Show login form
Route::get('/admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login');

// Handle login post
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login.submit');

// Dashboard page
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

// Logout
Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

// Contact Store
Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');
