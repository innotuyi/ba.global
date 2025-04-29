<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\EquipmentController;
use App\Http\Controllers\Admin\ProductController;;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CategoryController; // Add this import

// Public Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
// Authentication
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Products (for public browsing)
Route::get('/physiotherapy-equipment', [ProductController::class, 'equipment'])->name('products.equipment');
Route::get('/physiotherapy-consumables', [ProductController::class, 'consumables'])->name('products.consumables');


// Product routes
Route::get('/products/{slug}', [ProductController::class, 'show'])
    ->name('product.show');


    Route::get('/dashboard', [EquipmentController::class, 'index'])->name('dashboard');


// Admin Routes
Route::prefix('admin')->name('admin.')->group(function () {
    // Dashboard
    // Route::get('/dashboard', [EquipmentController::class, 'index'])->name('dashboard');

    // Categories
    Route::resource('categories', CategoryController::class)->except(['show']);

    // Products
    Route::resource('products', ProductController::class)->except(['show']);

    // Services & Equipment
    Route::resource('equipment', EquipmentController::class)->except(['show']);
    // Route::resource('consumables', ConsumableController::class)->except(['show']);

    // Navigation

    // Pages

    // Users
    Route::resource('users', UserController::class);

    // // Profile
    // Route::get('/profile', [ProfileController::class, 'show'])->name('profile');

    // // Settings
    // Route::match(['get', 'post'], '/settings', [SettingController::class, 'index'])->name('settings');
});