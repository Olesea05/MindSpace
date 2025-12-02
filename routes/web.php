<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ReviewController;

// Главная
Route::get('/', function () {
    return view('home');
})->name('home');

// Обо мне
Route::get('/about', function () {
    return view('about');
})->name('about');

// Запись на консультацию
Route::get('/appointment', [AppointmentController::class, 'showForm'])->name('appointment.form');
Route::post('/appointment', [AppointmentController::class, 'submit'])->name('appointment.submit');

// Политика конфиденциальности
Route::get('/privacy', function () {
    return view('privacy');
})->name('privacy');

// Отзывы
Route::get('/reviews', [ReviewController::class, 'index'])->name('reviews.index');
Route::post('/reviews', [ReviewController::class, 'submit'])
        ->middleware('throttle:3,1')
        ->name('reviews.submit');