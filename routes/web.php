<?php

use App\Http\Controllers\DirektoriDokterRujukanController;
use App\Http\Controllers\PusatEdukasiController;
use App\Http\Controllers\TestDiagnosisAdaptifController;
use App\Http\Controllers\UIRecolorAssistantController;
use App\Http\Controllers\VisualSimulatorController;
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
Route::prefix('ui-recolor-assistant')->controller(UIRecolorAssistantController::class)->group(function () {
    Route::get('/', 'index')->name('ui-recolor-assistant.index');
});

// AI Chatbot
Route::prefix('ai-assistant-warnabot')->controller(WarnaBotController::class)->group(function () {
    Route::get('/', 'index')->name('ai-assistant-warnabot.index');
    Route::post('/', 'chat')->name('ai-assistant-warnabot.chat');
});


// Visual Simulator
Route::prefix('visual-simulator')->controller(VisualSimulatorController::class)->group(function () {
    Route::get('/', 'index')->name('visual-simulator.index');
});

// Ishihara Test
Route::prefix('tes-diagnosis-adaptif')->controller(TestDiagnosisAdaptifController::class)->group(function () {
    Route::get('/', 'index')->name('tes-diagnosis-adaptif.index');
    Route::get('/test', 'test')->name('tes-diagnosis-adaptif.test');
    Route::post('/validate', 'validate')->name('tes-diagnosis-adaptif.validate');
});

// Doctor List
Route::prefix('direktori-dokter-rujukan')->controller(DirektoriDokterRujukanController::class)->group(function () {
    Route::get('/', 'index')->name('direktori-dokter-rujukan.index');
});

// Blog & Article
Route::prefix('pusat-edukasi')->controller(PusatEdukasiController::class)->group(function () {
    Route::get('/', 'index')->name('pusat-edukasi.index');
});
