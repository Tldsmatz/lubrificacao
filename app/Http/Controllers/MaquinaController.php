<?php

namespace App\Http\Controllers;

use App\Models\Maquina;
use App\Models\Oleo;
use App\Models\AcaoManutencao;
use Illuminate\Http\Request;

class MaquinaController extends Controller
{
    // Exibe a página inicial com todas as máquinas (hub)
    public function index()
    {
        $maquinas = Maquina::all();
        return view('maquinas.index', compact('maquinas'));
    }

    // Exibe a página de detalhes da máquina
    public function show($id)
{
    $maquina = Maquina::findOrFail($id); // Recupera a máquina pelo ID
    return view('maquina', compact('maquina')); // Verifique se o nome do arquivo de view está correto
}
}
