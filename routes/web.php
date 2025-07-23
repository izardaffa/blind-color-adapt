<?php

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

Route::get('/visual-simulator', function () {
    return view('visual-simulator');
})->name('visual-simulator');
