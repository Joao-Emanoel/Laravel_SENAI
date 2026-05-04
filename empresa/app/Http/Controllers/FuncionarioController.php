<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Funcionario;

class FuncionarioController extends Controller
{
    public function index()
    {
        $funcionarios = Funcionario::all();
        return view('listarFuncionario', compact('funcionarios'));
    }

    public function create()
    {
        return view('cadastroFuncionario');
    }

    public function store(Request $request)
    {
        Funcionario::create([
            'nome' => $request->nome,
            'email' => $request->email,
            'cargo' => $request->cargo
        ]);

        return redirect()->route('funcionario.listar')
            ->with('success', 'Funcionário cadastrado!');
    }

    public function edit($id)
    {
        $funcionario = Funcionario::findOrFail($id);
        return view('atualizarFuncionario', compact('funcionario'));
    }

    public function update(Request $request, $id)
    {
        $funcionario = Funcionario::findOrFail($id);

        $funcionario->update([
            'nome' => $request->nome,
            'email' => $request->email,
            'cargo' => $request->cargo
        ]);

        return redirect()->route('funcionario.listar')
            ->with('success', 'Funcionário atualizado!');
    }

    public function destroy($id)
    {
        $funcionario = Funcionario::findOrFail($id);
        $funcionario->delete();

        return redirect()->route('funcionario.listar')
            ->with('success', 'Funcionário deletado!');
    }
}