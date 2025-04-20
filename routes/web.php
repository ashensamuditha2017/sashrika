<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/officer/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

// Optional POST route (if you have a login controller)
// Route::post('/login', [YourLoginController::class, 'login'])->name('login.submit');

Route::get('/officer/predictions', function () {
    return view('officer.predictions'); // Create a predictions.blade.php view
})->name('predictions.index');

Route::get('/officer/messages', function () {
    return view('officer.messages'); // Create a user/profile.blade.php view
})->name('messages.index');

Route::get('/officer/home', function () {
    return view('officer.home'); // Create a data.blade.php view
})->name('home.index');

Route::get('/officer/report', function () {
    return view('officer.damage-report'); // Create a reports.blade.php view
})->name('reports.index');

Route::get('/officer/notifications', function () {
    return view('officer.notifications'); // Create a settings.blade.php view
})->name('notifications.index');