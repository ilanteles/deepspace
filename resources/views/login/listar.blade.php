@extends('layout.site')

@section('titulo', 'Admin')

<style>
    /*body,html{
        overflow: hidden;
    }*/

    .w-5{
        display: none;
    }
</style>

<link rel="stylesheet" type="text/css" href="../../css/style.css">

@section('conteudo')

<nav class="breadcrumb">
    <ol>
        <li>
            <a href="{{route('site.mapa')}}" class="active""><img style="width: 20px;"src="../../icons/solar-system2.png"></a>
        </li>
        <li>
            <a href="{{route('site.admin')}}" class="active">Admin</a>
        </li>
        <li>
            <a>Lista de perguntas</a> 
        </li>
    </ol>
</nav>

<section class="body">
    <span><h2>Lista de Perguntas</h2></span>
<div>
<table>
        <thead>
            <tr>
                <th>Pergunta</th>
                <th>Resposta 1</th>
                <th>Resposta 2</th>
                <th>Resposta 3</th>
                <th>Resposta 4</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            @foreach($perguntas as $p)
            <tr>
                <td>{{ $p ->desc_pergunta }}</td>
                <td>{{ $p ->resposta1 }}</td>
                <td>{{ $p ->resposta2 }}</td>
                <td>{{ $p ->resposta3 }}</td>
                <td>{{ $p ->resposta4 }}</td>
                <td>
                    <a href="{{route('site.questionario.editar', $p->id)}}"><img style="width: 30px;"src="../../icons/edit.png"></a>
                    <a href="{{route('site.questionario.deletar', $p->id)}}"><img style="width: 30px;" src="../../icons/delete.png"></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
        <div align="center">  
            {{ $perguntas->links('pagination') }}  
        </div>
<br>
    <div align="center">
    <a href="{{route('site.questionario.adicionar')}}" style="margin: 0 0 0 40px"><button class="button">Adicionar</button></a>
    </div>
</div>
</section>
<script src="../../js/script.js"></script>
@endsection

@if(Auth::guest())
@else


@endif

