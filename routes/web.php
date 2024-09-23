<?php

use App\Http\Controllers\MaquinaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\HistoricoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagController;

Route::get('/', [MaquinaController::class, 'index'])->name('maquinas.index');
Route::get('/maquinas/{id}', [MaquinaController::class, 'show'])->name('maquina.show');
Route::post('/maquina/{id}/registro', [RegistroController::class, 'registrarManutencao'])->name('maquina.registro');
Route::get('/historico', [HistoricoController::class, 'index'])->name('historico');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/maquinas/{id}', [MaquinaController::class, 'show'])->name('maquina.show');
Route::post('/maquina/{id}/registrar', [MaquinaController::class, 'registrar'])->name('maquina.registrar');
Route::get('/maquinas/{id}', [MaquinaController::class, 'show'])->name('maquinas.show');


