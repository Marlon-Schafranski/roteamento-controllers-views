<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AlunoController;

use App\Http\Controllers\BibliotecaController;

use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/aluno', [AlunoController::class, 'index']);

Route::get('/biblioteca', [BibliotecaController::class, 'index']);

Route::get('/post', [PostController::class, 'index']);