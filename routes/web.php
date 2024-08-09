<?php

use App\Livewire\Chat\Chat;
use App\Livewire\Chat\Index;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('/chat', Index::class)->name('chat.index');
Route::get('/chat/{query}', Chat::class)->name('chat');

require __DIR__ . '/auth.php';
