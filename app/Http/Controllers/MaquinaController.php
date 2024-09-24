<?php

namespace App\Http\Controllers;

use App\Models\Maquina;
use Illuminate\Http\Request;

class MaquinaController extends Controller
{
    // Função para exibir a página inicial com todas as máquinas
    public function index()
    {
        // Recupera todas as máquinas do banco de dados
        $maquinas = Maquina::all();

        // Retorna a view 'home' passando as máquinas para a view
        return view('home', compact('maquinas'));
    }

    // Função para exibir os detalhes de uma máquina específica
    public function show($id)
    {
        // Busca a máquina pelo id no banco de dados
        $maquina = Maquina::findOrFail($id);

        // Retorna a view 'maquinas.show' com os dados da máquina
        return view('maquinas.show', compact('maquina'));
    }
}