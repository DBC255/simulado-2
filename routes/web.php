<?php

use App\Livewire\Auth\Login;
use App\Livewire\Dashboard;
use App\Livewire\Produto\Index;
use App\Livewire\Produto\Produtoedit;
use Illuminate\Support\Facades\Route;

Route::get('/', Login::class)->name('login');
Route::get('/dashboard', Dashboard::class)->name('dashboard');
Route::get('/produto', Index::class)->name('produto.index');
Route::get('users/edit/{id}', Produtoedit::class)->name('produto.edit');
