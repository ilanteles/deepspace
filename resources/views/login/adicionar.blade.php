@extends('layout.site')

@section('titulo', 'Admin')
<link rel="stylesheet" type="text/css" href="../css/style.css">
<style>
    /*body,html{
        overflow: hidden;
    }*/
</style>
@section('conteudo')

<align="center">

    <nav class="breadcrumb">
        <ol>
            <li>
                <a href="{{route('site.admin')}}" class="active""><img style="width: 20px;"src="../../icons/solar-system2.png"></a>
            </li>
            <li>
                <a href="{{route('site.admin')}}" class="active">Admin</a>
            </li>
            <li>
                <a>Lista de perguntas</a> 
            </li>
        </ol>
    </nav>
    
<div class="div-login-form2">
    <form class="login-form" action="{{route('site.questionario.salvar')}}" method="post">
        {{ csrf_field() }}
        <h1 class="branco">Adicionar Pergunta</h1>

        <div class="txtb">
            <input type="text" placeholder="Pergunta" name="desc_pergunta" value="{{isset($pergunta->desc_pergunta) ? $pergunta->desc_pergunta : ''}}">
            <span class="branco"></span>
        </div>

        <div class="txtb">
            <input type="text" placeholder="Resposta 1" name="resposta1" value="{{isset($pergunta->resposta1) ? $pergunta->resposta1 : ''}}">
            <span class="branco"></span>
        </div>

        <div class="txtb">
            <input type="text" placeholder="Resposta 2" name="resposta2" value="{{isset($pergunta->resposta2) ? $pergunta->resposta2 : ''}}">
            <span class="branco"></span>
        </div>

        <div class="txtb">
            <input type="text" placeholder="Resposta 3" name="resposta3" value="{{isset($pergunta->resposta3) ? $pergunta->resposta3 : ''}}">
            <span class="branco"></span>
        </div>

        <div class="txtb">
            <label for="resposta4"></label>
            <input type="text" placeholder="Resposta 4" name="resposta4" value="{{isset($pergunta->resposta4) ? $pergunta->resposta4 : ''}}">
            <span class="branco"></span>
        </div>

        <align="center">
            <button class="button">Salvar</button>
        </align>
    </form>
</div>
</align>

<script src="../js/script.js"></script>
@endsection

@if(Auth::guest())
@else


@endif