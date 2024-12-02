<?php

use App\Http\Controllers\ProdutosController;
use Illuminate\Support\Facades\Route;

// // Exibir
// Route::get('/produtos/{produto}', [ProdutosController::class, 'show'])->name('produtos.show');
// Route::get('/produtos', [ProdutosController::class, 'index'])->name('produtos.index');
// // Adicionar
// Route::get('/produtos/create', [ProdutosController::class, 'create'])->name('produtos.create');
// Route::post('/produtos', [ProdutosController::class, 'store'])->name('produtos.store');
// // Editar
// Route::get('/produtos/{produto}/edit', [ProdutosController::class, 'edit'])->name('produtos.edit');
// Route::put('/produtos/{produto}', [ProdutosController::class, 'update'])->name('produtos.update');
// // Apagar
// Route::delete('/produtos/{produto}', [ProdutosController::class, 'destroy'])->name('produtos.destroy');

Route::resource('produtos', ProdutosController::class);