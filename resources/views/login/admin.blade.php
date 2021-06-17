@extends('layout.site')

@section('titulo', 'Admin')
<style>

    /*body,html{
        overflow: hidden;
    }*/
    
    </style>
@section('conteudo')

<nav class="breadcrumb">
    <ol>
        <li>
            <a href="{{route('site.mapa')}}" class="active""><img style="width: 20px;"src="icons/solar-system2.png"></a>
        </li>
        <li>
            <a>Admin</a>
        </li>
    </ol>
</nav>

    <div class="cards">
        <h2 class="header">Administração</h2>
        <div class="services">

        <div class="content">
            <div class="fab">
            </div>
            <h2>Mapa</h2>
            <p>Editar as informações presente no mapa do sistema solar</p>
            <a href="{{route('site.planeta.listar')}}" class="content-button">Entrar</a>
        </div>

        <div class="content">
            <div class="fab">
            </div>
            <h2>Perguntas</h2>
            <p>Adcionar, Remover e Editar as perguntas</p>
            <a href="{{route('site.questionario.listar')}}" class="content-button">Entrar</a>
        </div>

        <div class="content" style="height: 325.938">
            <div class="fab">
            </div>
            <h2>Mensagens</h2>
            <p>Mensagens enviadas por usuários</p>
            <a href="{{route('site.contato.listar')}}" class="content-button">Entrar</a>
        </div>

        </div>
    </div>

@endsection

@if(Auth::guest())
@else

@endif