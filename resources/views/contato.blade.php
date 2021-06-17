@extends('layout.site')

@section('titulo', 'Contato')
<style>

</style>
    
@section('conteudo')

<div class="div-login-form" align="center">
    <form class="contato-form" action="{{route('site.contato.salvar')}}" method="post">
        {{ csrf_field() }}
        <h1 class="branco">Contato</h1>

        <div class="txtb">
            <input type="text" placeholder="Nome" name="nome" value="{{isset($contato->nome) ? $contato->nome : ''}}">
            <span class="branco"></span>
        </div>

        <div class="txtb">
            <input type="text" placeholder="E-mail" name="email" value="{{isset($contato->email) ? $contato->email : ''}}">
            <span class="branco"></span>
        </div>

        <div class="txtb">
            <input type="text" placeholder="Assunto" name="assunto" value="{{isset($contato->assunto) ? $contato->assunto : ''}}">
            <span class="branco"></span>
        </div>

        <div class="txtb">
            <textarea rows="5" cols="34" maxlength="250" placeholder="Mensagem" name="mensagem" value="{{isset($contato->mensagem) ? $contato->mensagen : ''}}"></textarea>
            <span class="branco"></span>
        </div>

        <div align="center">
            <button class="button">Enviar</button>
        </div>

        
    </form>
</div>

@endsection