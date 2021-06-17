<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Pergunta;

class QuestionarioController extends Controller
{
    public function questionario()
    {
        $perguntas = Pergunta::paginate(1);
        return view('/questionario', compact('perguntas'));
    }

    public function adicionar()
    {
        return view('login/adicionar');
    }

    public function listar()
    {
        $perguntas = Pergunta::paginate(10);
        return view('login.listar', compact('perguntas'));
    }

    public function salvar(Request $request)
    {
        $dados = $request->all();
        Pergunta::create($dados);
        return redirect()->route('site.questionario.listar');
    }

    public function editar($id)
    {
        $pergunta = Pergunta::find($id);
        return view('login/editar', compact('pergunta'));
    }

    public function atualizar(Request $request, $id)
    {
        $dados = $request->all();
        Pergunta::find($id)->update($dados);
        return redirect()->route('site.questionario.listar');
    }

    public function deletar($id)
    {
        Pergunta::find($id)->delete();
        return redirect()->route('site.questionario.listar');
    }
    
}