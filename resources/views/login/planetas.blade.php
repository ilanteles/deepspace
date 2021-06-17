@extends('layout.site')

@section('titulo', 'Admin')
<link rel="stylesheet" type="text/css" href="../../css/style.css">
<style>
    /*body,html{
        overflow: hidden;
    }*/
</style>
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
            <a>Lista de planetas</a>
        </li>
    </ol>
</nav>

<section class="body">
    <span><h2>Planetas</h2></span>
<div>
<table>
        <thead>
            <tr>
                <th>Planeta</th>
                <th>Descrição 1</th>
                <th>Descrição 2</th>
                <th>Descrição 3</th>
                <th>Descrição 4</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            @foreach($planetas as $p)
            <tr>
                <td>{{ $p ->planeta }}</td>
                <td>{{ $p ->desc1 }}</td>
                <td>{{ $p ->desc2 }}</td>
                <td>{{ $p ->desc3 }}</td>
                <td>{{ $p ->desc4 }}</td>
                <td>
                    <a href="{{route('site.planeta.editar', $p->id )}}"><img style="width: 30px;"src="../../icons/edit.png"></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</section>
<script src="../../js/script.js"></script>
@endsection

@if(Auth::guest())
@else
@endif