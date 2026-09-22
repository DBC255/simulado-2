<?php

use App\Livewire\Auth\Login;
use App\Livewire\Categoria\CategoriaCreate;
use App\Livewire\Categoria\CategoriaEdit;
use App\Livewire\Categoria\CategoriaIndex;
use App\Livewire\Dashboard;
use App\Livewire\Movimentacao\MovimentacaoCreate;
use App\Livewire\Movimentacao\MovimentacaoIndex;
use App\Livewire\Produto\Index;
use App\Livewire\Produto\ProdutoCreate;
use App\Livewire\Produto\Produtoedit;
use Illuminate\Support\Facades\Route;

Route::get('/', Login::class)->name('login');
Route::get('/dashboard', Dashboard::class)->name('dashboard');

Route::get('/produto', Index::class)->name('produto.index');
Route::get('/produto/create', ProdutoCreate::class)->name('produto.create');
Route::get('/produto/edit/{id}', Produtoedit::class)->name('produto.edit');

Route::get('/movimentacao', MovimentacaoIndex::class)->name('movimentacao.index');
Route::get('/movimentacao/create', MovimentacaoCreate::class)->name('movimentacao.create');

Route::get('/categorias', CategoriaIndex::class)->name('categoria.index');
Route::get('/categorias/create', CategoriaCreate::class)->name('categoria.create');
Route::get('/categorias/edit/{id}', CategoriaEdit::class)->name('categoria.edit');
