<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

// Optional POST route (if you have a login controller)
// Route::post('/login', [YourLoginController::class, 'login'])->name('login.submit');

Route::get('/predictions', function () {
    return view('officer.predictions'); // Create a predictions.blade.php view
})->name('predictions.index');

Route::get('/messages', function () {
    return view('officer.messages'); // Create a user/profile.blade.php view
})->name('messages.index');

Route::get('/home', function () {
    return view('officer.home'); // Create a data.blade.php view
})->name('home.index');

Route::get('/report', function () {
    return view('officer.damage-report'); // Create a reports.blade.php view
})->name('reports.index');

Route::get('/settings', function () {
    return view('settings'); // Create a settings.blade.php view
})->name('settings.index');