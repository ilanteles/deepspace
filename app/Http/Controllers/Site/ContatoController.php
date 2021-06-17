<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use App\Contato;

class ContatoController extends Controller
{
    public function contato()
    {
        return view('/contato');
    }

    /*public function mail(){

        Mail::send('mail.mail', ['curso' => 'Eloquent'], function($m, $assunto, $mensagem, $email){
            $m->from('deepspace826@gmail.com', 'Deepspace');
            $m->subject($mensagem);
            $m->to('deepspace826@gmail.com');
        });
    }*/

    public function listar()
    {
        $contatos = Contato::paginate(2);
        //dd($contatos);
        return view('login.clistar', compact('contatos'));
    }

    public function zoom($id)
    {
        $zoom = Contato::find($id)->all();
        //dd($zoom);
        return view('login.clistar', compact('zoom'));
    }

    public function salvar(Request $request)
    {
        $dados = $request->all();
        Contato::create($dados);
        //dd($dados);
        return redirect()->route('site.contato');
    }

    public function deletar($id)
    {
        Contato::find($id)->delete();
        return redirect()->route('site.contato.listar');
    }

}