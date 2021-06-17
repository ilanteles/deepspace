@extends('layout.site')

@section('titulo', 'Mensagens')

<style>
    /*body,html{
        overflow: hidden;
    }*/
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
            <a>Mensagens</a> 
        </li>
    </ol>
</nav> 

<section class="body">
    <span><h2>Mensagens</h2></span>
<div>
<table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Assunto</th>
                <th>Mensagem</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contatos as $p)
            <tr>
                <td>{{ $p ->nome }}</td>
                <td>{{ $p ->email }}</td>
                <td>{{ $p ->assunto }}</td>
                <td>{{ $p ->mensagem }}</td>
                <td>
                    <img id="myBtn" class="img_modal" style="width: 30px;"src="../../icons/zoom.png">
                    <a href="{{route('site.contato.deletar', $p->id)}}"><img style="width: 30px;" src="../../icons/delete.png"></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div align="center">
        {{ $contatos->links('pagination') }}
    </div>
    <br>
</div>

    @foreach($contatos as $p)
    <div id="myModal" class="modal" style="display: none">
        <div class="modal-content">
            <span class="close">&times;</span>
            <p class="p-content">Nome: {{ $p ->nome }}</p>
            <p class="p-content">Email: {{ $p ->email }}</p>
            <p class="p-content">Assunto: {{ $p ->assunto }}</p>
            <p>Mensagem:<br><br>{{ $p ->mensagem }}</p>
        </div>
    </div>
    @endforeach

</section>
<script src="../../js/script.js"></script>
@endsection

