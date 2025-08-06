<?php

use App\Http\Controllers\TestDiagnosisAdaptifController;
use App\Http\Controllers\WarnaBotController;
use Illuminate\Support\Facades\Route;

// Home
Route::get('/', function () {
    return view('index');
});

// Auth
Route::get('/login', function () {
    return view('login');
})->name('auth.login');

Route::get('/register', function () {
    return view('register');
})->name('auth.register');

// User
Route::get('/profile-form', function () {
    return view('profile-form');
})->name('auth.identity');

// Extension Download
Route::get('/ui-recolor-assistant', function () {
    return view('ui-recolor-assistant');
})->name('ui-recolor-assistant');

// AI Chatbot
Route::get('/ai-assistant-warnabot', function () {
    return view('ai-assistant-warnabot');
})->name('ai-assistant-warnabot');

Route::post('/ai-assistant-warnabot', [WarnaBotController::class, 'chat'])->name('ai-assistant-warnabot-response');

// Visual Simulator
Route::get('/visual-simulator', function () {
    return view('visual-simulator');
})->name('visual-simulator');

// Ishihara Test
// Route::get('/tes-diagnosis-adaptif', function () {
//     return view('tes-diagnosis-adaptif');
// })->name('tes-diagnosis-adaptif');

Route::prefix('tes-diagnosis-adaptif')->controller(TestDiagnosisAdaptifController::class)->group(function () {
    Route::get('/', 'index')->name('tes-diagnosis-adaptif/index');
    Route::get('/test', 'test')->name('tes-diagnosis-adaptif/test');
    Route::post('/validate', 'validate')->name('tes-diagnosis-adaptif/validate');
});

// Doctor List
Route::get('/direktori-dokter-rujukan', function () {
    return view('direktori-dokter-rujukan');
})->name('direktori-dokter-rujukan');

// Blog & Article
Route::get('/pusat-edukasi', function () {
    return view('pusat-edukasi');
})->name('pusat-edukasi');
