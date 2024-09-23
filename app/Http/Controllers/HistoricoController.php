<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Historico;

class HistoricoController extends Controller
{
    public function index()
    {
        // Busca todos os registros de histórico
        $historicos = Historico::all();

        // Passa os dados para a view
        return view('historico', ['historicos' => $historicos]);
    }
}