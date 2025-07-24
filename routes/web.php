<?php

use App\Http\Controllers\WarnaBotController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
})->name('auth.login');

Route::get('/register', function () {
    return view('register');
})->name('auth.register');

Route::get('/profile-form', function () {
    return view('profile-form');
})->name('auth.identity');

Route::get('/ui-recolor-assistant', function () {
    return view('ui-recolor-assistant');
})->name('ui-recolor-assistant');

Route::get('/ai-assistant-warnabot', function () {
    return view('ai-assistant-warnabot');
})->name('ai-assistant-warnabot');

Route::post('/ai-assistant-warnabot', [WarnaBotController::class, 'chat'])->name('ai-assistant-warnabot-response');

Route::get('/visual-simulator', function () {
    return view('visual-simulator');
})->name('visual-simulator');

Route::get('/tes-diagnosis-adaptif', function () {
    return view('tes-diagnosis-adaptif');
})->name('tes-diagnosis-adaptif');

Route::get('/direktori-dokter-rujukan', function () {
    return view('direktori-dokter-rujukan');
})->name('direktori-dokter-rujukan');

Route::get('/pusat-edukasi', function () {
    return view('pusat-edukasi');
})->name('pusat-edukasi');
