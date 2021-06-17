@extends('layout.site')
@section('titulo', 'Questionario')
@section('conteudo')

<h2 style="margin-bottom: 0px;">Quiz</h2>

@foreach($perguntas as $p)
<div class="quiz-container">
    <ol>
      <li><h2>{{ $p ->desc_pergunta }}</h2></li>
      <li>
        <label>
          <input type="radio" id="1" name="resp" class="resp">
        <span class="radio">
          {{ $p ->resposta1 }}
        </span>
        </label>
      </li>
      <li>
        <label>
          <input type="radio" id="2" name="resp" class="resp">
          <span class="radio">
            {{ $p ->resposta2 }}
          </span>
        </label>
      </li>
      <li>
        <label>
          <input type="radio" id="3" name="resp" class="resp">
          <span class="radio">
            {{ $p ->resposta3 }}
          </span>
        </label>
      </li>
      <li>
        <label>
          <input type="radio" id="4" name="resp" class="resp">
          <span class="radio">
            {{ $p ->resposta4 }}
          </span>
        </label>
      </li>
    </ol>
    <br>
    <div align="center">  
      {{ $perguntas->links('pagination') }} 
  </div>
</div>
@endforeach

@endsection