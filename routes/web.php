<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\TreinoController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\DietaController;

Route::get('/', function () {
    return view('welcome');
});
/*
//routes/web.php
Route::get('/aluno', [AlunoController::class, "index"]);
//carrega o formulário
Route::get('/aluno/create', [AlunoController::class, "create"]);
//recebe os dados do formulario para ser salvo na função store
Route::post('/aluno', [AlunoController::class, "store"])->name('aluno.store');
//Route::get('/aluno/destroy/{$id}', [AlunoController::class, "destroy"])->name('aluno.destroy');
Route::delete('/aluno/{$aluno}',
 [AlunoController::class, "destroy"])->name('aluno.destroy');

 Route::get('/aluno/edit/{id}', [AlunoController::class, "edit"])
    ->name('aluno.edit');
 Route::post('/aluno',
  [AlunoController::class, "update"])->name('aluno.update');
*/

Route::resource('treino', TreinoController::class);
Route::post('/treino/search', [TreinoController::class, "search"])->name('treino.search');

Route::resource('dieta', DietaController::class);
Route::post('/dieta/search', [DietaController::class, "search"])->name('dieta.search');

Route::resource('produto', ProdutoController::class);
Route::post('/produto/search', [ProdutoController::class, "search"])->name('produto.search');
