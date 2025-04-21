<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OfficerController;
use App\Http\Controllers\FarmerController;

// Routes accessible without authentication
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register');

// All other routes require authentication
Route::middleware(['auth'])->group(function () {
    // Officer Routes
    Route::prefix('officer')->group(function () {
        Route::get('/home', [OfficerController::class, 'index'])->name('home.index');
        Route::get('/predictions', [OfficerController::class, 'predictions'])->name('predictions.index');
        Route::get('/reports', [OfficerController::class, 'report'])->name('reports.index');
        Route::get('/messages', [OfficerController::class, 'messages'])->name('messages.index');
        Route::get('/notifications', [OfficerController::class, 'alerts'])->name('notifications.index');
    });

    // Farmer Routes
    Route::prefix('farmer')->group(function () {
        Route::get('/home', [FarmerController::class, 'index'])->name('farmer.home');
        Route::get('/predictions', [FarmerController::class, 'predictions'])->name('farmer.predictions');
        Route::get('/reports', [FarmerController::class, 'reports'])->name('farmer.reports');
        Route::get('/messages', [FarmerController::class, 'messages'])->name('farmer.messages');
        Route::get('/tips', [FarmerController::class, 'tips'])->name('farmer.tips');
    });
});