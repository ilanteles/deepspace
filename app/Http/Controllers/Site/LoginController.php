<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function admin()
    {
        return view('login/admin');
    }

    public function index()
    {
        return view('site.mapa');
    }

    public function entrar(Request $request)
    {

        $dados = $request->all();
        if(Auth::attempt(['email'=>$dados['email'],'password'=>$dados['senha']]))
        {
            return redirect()->route('site.admin');
        }
        return redirect()->route('site.mapa');
    }

    public function sair(Request $request)
    {
        Auth::logout();
        return redirect()->route('site.mapa');
    }
}
