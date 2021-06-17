@extends('layout.site')
@section('titulo', 'Admin')
@section('conteudo')

<style>
    .div-login-form2{padding-left: 50px; padding-right: 50px; height: 700px; width: 500px;}
    .login-form{padding-right: 0px; padding-left: 0px; padding-top: 0px; padding-bottom: 0px}
</style>

<align="center">

    <nav class="breadcrumb" style="margin-left: 100px">
        <ol>
            <li>
                <a href="{{route('site.admin')}}" class="active""><img style="width: 20px;"src="/deepspace/public/icons/solar-system2.png"></a>
            </li>
            <li>
                <a href="{{route('site.admin')}}" class="active">Admin</a>
            </li>
            <li>
                <a href="{{route('site.planeta.listar')}}" class="active">Lista de planetas</a>
            </li>
            <li>
                <a>Editar planeta</a> 
            </li>
        </ol>
    </nav>

    <br><br><br><br><br><br>

<div class="div-login-form2">
    <form class="login-form" action="{{route('site.planeta.atualizar', $planeta->id)}}" method="post">
        {{ csrf_field() }}
        <h1 class="branco">Editar Planeta</h1>
        <input type="hidden" name="_method" value="put">

        <div class="txtb">
            <input type="text" placeholder="Planeta" name="planeta" value="{{isset($planeta->planeta) ? $planeta->planeta : ''}}">
            <span class="branco"></span>
        </div>

        <div class="txtb">
            <textarea rows="5" cols="34" placeholder="Descrição 1" name="desc1">
                {{isset($planeta->desc1) ? $planeta->desc1 : ''}}
            </textarea>
            <span class="branco"></span>
        </div>

        <div class="txtb">
            <textarea rows="5" cols="34" placeholder="Descrição 2" name="desc2">
                {{isset($planeta->desc2) ? $planeta->desc2 : ''}}
            </textarea>
            <span class="branco"></span>
        </div>

        <div class="txtb">
            <textarea rows="5" cols="34" placeholder="Descrição 3" name="desc3">
                {{isset($planeta->desc3) ? $planeta->desc3 : ''}}
            </textarea>
            <span class="branco"></span>
        </div>

        <div class="txtb">
            <textarea rows="5" cols="34" placeholder="Descrição 4" name="desc4">
                {{isset($planeta->desc4) ? $planeta->desc4 : ''}}
            </textarea>
            <span class="branco"></span>
        </div>

        <align="center">
            <button class="button">Salvar</button>
        </align>
    </form>
</div>
</align>

@endsection

@if(Auth::guest())
@else


@endif