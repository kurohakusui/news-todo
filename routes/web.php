<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/a1', [ArticleController::class, 'index'])->name('a1.index');
Route::get('/a1/create', [ArticleController::class, 'create'])->name('a1.create');
Route::post('/a1', [ArticleController::class, 'store'])->name('a1.store');
Route::get('/a1/{article}', [ArticleController::class, 'show'])->name('a1.show');
Route::get('/a1/{article}/edit', [ArticleController::class, 'edit'])->name('a1.edit');
Route::patch('/a1/{article}', [ArticleController::class, 'update'])->name('a1.update');
Route::delete('/a1/{article}', [ArticleController::class, 'destroy'])->name('a1.destroy');