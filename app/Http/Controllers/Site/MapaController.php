<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Planeta;
use Illuminate\Http\Request;
use Auth;

class MapaController extends Controller
{
    public function mapa()
    {   
        $planetas = Planeta::all();
        return view('/mapa', compact('planetas'));
    }

    public function listar()
    {
        $planetas = Planeta::all();
        return view('login/planetas', compact('planetas'));
    }

    public function editar($id){
        $planeta = Planeta::find($id);
        //dd($planeta);
        return view('login/peditar', compact('planeta'));
    }

    public function atualizar(Request $request, $id)
    {
        $dados = $request->all();
        Planeta::find($id)->update($dados);
        return redirect()->route('site.planeta.listar');
    }
}