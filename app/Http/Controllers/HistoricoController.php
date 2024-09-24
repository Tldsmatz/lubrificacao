<?php

namespace App\Http\Controllers;

use App\Models\Maquina;
use App\Models\Historico;
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

    // Função para exibir o histórico de uma máquina específica
    public function historico($id)
    {
        // Busca a máquina pelo id no banco de dados
        $maquina = Maquina::findOrFail($id);

        // Busca o histórico de uso relacionado a essa máquina
        $historicos = Historico::where('maquina_id', $id)->get();

        // Retorna a view 'maquinas.historico' com os dados da máquina e seu histórico
        return view('maquinas.historico', compact('maquina', 'historicos'));
    }

    // Função para salvar um novo registro de uso da máquina
    public function registrarUso(Request $request, $id)
    {
        // Validação dos dados
        $request->validate([
            'nome' => 'required|string|max:255',
            'curso' => 'required|string|max:255',
            'data' => 'required|date',
            'horario' => 'required|date_format:H:i',
        ]);

        // Cria um novo registro de histórico
        Historico::create([
            'maquina_id' => $id,
            'nome' => $request->input('nome'),
            'curso' => $request->input('curso'),
            'data' => $request->input('data'),
            'horario' => $request->input('horario'),
            'detalhes' => $request->input('detalhes'), // Checkbox para o que foi feito
        ]);

        // Redireciona para a página da máquina com uma mensagem de sucesso
        return redirect()->route('maquinas.show', $id)->with('success', 'Uso registrado com sucesso.');
    }
}