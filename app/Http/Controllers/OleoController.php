<?php
namespace App\Http\Controllers;

use App\Models\Oleo;
use Illuminate\Http\Request;

class OleoController extends Controller
{
    // Lista todos os óleos (caso precise de uma interface para gestão de óleos)
    public function index()
    {
        $oleos = Oleo::all();
        return view('oleos.index', compact('oleos'));
    }

    // Adiciona um novo óleo (opcional, se necessário)
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nome' => 'required|string|max:255',
            'tipo' => 'required|string|max:255',
        ]);

        Oleo::create($validatedData);

        return redirect()->route('oleos.index')->with('success', 'Óleo adicionado com sucesso!');
    }
}