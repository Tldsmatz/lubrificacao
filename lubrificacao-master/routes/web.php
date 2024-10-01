<?php

use App\Http\Controllers\controladorController;
use App\Http\Controllers\MaquinaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\HistoricoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagController;

// Route::get('/maquinas/{id}', [MaquinaController::class, 'show'])->name('maquinas.show');
// Route::post('/maquina/{id}/registro', [RegistroController::class, 'registrarManutencao'])->name('maquina.registro');
// Route::get('/', [HomeController::class, 'index'])->name('home');
// Route::get('/maquinas/{id}', [MaquinaController::class, 'show'])->name('maquina.show');
// Route::post('/maquina/{id}/registrar', [MaquinaController::class, 'registrar'])->name('maquina.registrar');
// Route::get('/maquinas/{id}', [MaquinaController::class, 'show'])->name('maquinas.show');

//Página home
Route::get('/', [controladorController::class, 'home'])->name('home');

Route::get('maquinas', [controladorController::class, 'maquinas'])->name('maquinas');

Route::get('torno', [controladorController::class, 'torno'])->name('torno');

Route::get('historico', [controladorController::class, 'historico'])->name('historico');

// // Página inicial com todas as máquinas
// Route::get('/', [MaquinaController::class, 'index'])->name('home');

// // Detalhes de uma máquina específica
// Route::get('/maquinas/{id}', [MaquinaController::class, 'show'])->name('maquinas.show');

// // Exibir o histórico de uma máquina específica
// Route::get('/maquinas/{id}/historico', [MaquinaController::class, 'historico'])->name('maquinas.historico');

// // Registrar o uso de uma máquina
// Route::post('/maquinas/{id}/registrar', [MaquinaController::class, 'registrarUso'])->name('maquinas.registrar');


