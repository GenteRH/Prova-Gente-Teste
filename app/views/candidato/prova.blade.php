@extends('candidato.default')

@section('content')
<h1 class="text-center"><img src="{{ asset('assets/candidate/img/logo-mini.png') }}" alt="logo-mini" class="img-circle" width="40px">  Gente RH</h1>
<h3>Raciocínio Lógico</h3>
<hr id="forte">
<div class="perguntas">
  <h4><i class="fa fa-angle-double-right"></i> 1º - Primeira Pergunta</h4>
  <div class="radio">
    <label>
      <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
      Primeira Alternativa
    </label>
  </div>
  <div class="radio">
    <label>
      <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
      Segunda Alternativa
    </label>
  </div>
  <div class="radio">
    <label>
      <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
      Terceira Alternativa
    </label>
  </div>
  <div class="radio">
    <label>
      <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
      Quarta Alternativa
    </label>
  </div>
  <div class="radio">
    <label>
      <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
      Quinta Alternativa
    </label>
  </div>
  <hr>
  <h4><i class="fa fa-angle-double-right"></i> 2º - Segunda Pergunta</h4>
  <div class="radio">
    <label>
      <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
      Primeira Alternativa
    </label>
  </div>
  <div class="radio">
    <label>
      <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
      Segunda Alternativa
    </label>
  </div>
  <div class="radio">
    <label>
      <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
      Terceira Alternativa
    </label>
  </div>
  <div class="radio">
    <label>
      <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
      Quarta Alternativa
    </label>
  </div>
  <div class="radio">
    <label>
      <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
      Quinta Alternativa
    </label>
  </div>
  <hr>
  <h4><i class="fa fa-angle-double-right"></i> 3º - Primeira Pergunta</h4>
  <div class="radio">
    <label>
      <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
      Primeira Alternativa
    </label>
  </div>
  <div class="radio">
    <label>
      <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
      Segunda Alternativa
    </label>
  </div>
  <div class="radio">
    <label>
      <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
      Terceira Alternativa
    </label>
  </div>
  <div class="radio">
    <label>
      <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
      Quarta Alternativa
    </label>
  </div>
  <div class="radio">
    <label>
      <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
      Quinta Alternativa
    </label>
  </div>
  <hr>
  <h4><i class="fa fa-angle-double-right"></i> 4º - Primeira Pergunta</h4>
  <div class="radio">
    <label>
      <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
      Primeira Alternativa
    </label>
  </div>
  <div class="radio">
    <label>
      <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
      Segunda Alternativa
    </label>
  </div>
  <div class="radio">
    <label>
      <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
      Terceira Alternativa
    </label>
  </div>
  <div class="radio">
    <label>
      <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
      Quarta Alternativa
    </label>
  </div>
  <div class="radio">
    <label>
      <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
      Quinta Alternativa
    </label>
  </div>
  <hr>
  <h4><i class="fa fa-angle-double-right"></i> 5º - Primeira Pergunta</h4>
  <div class="radio">
    <label>
      <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
      Primeira Alternativa
    </label>
  </div>
  <div class="radio">
    <label>
      <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
      Segunda Alternativa
    </label>
  </div>
  <div class="radio">
    <label>
      <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
      Terceira Alternativa
    </label>
  </div>
  <div class="radio">
    <label>
      <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
      Quarta Alternativa
    </label>
  </div>
  <div class="radio">
    <label>
      <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
      Quinta Alternativa
    </label>
  </div>
  <div align=bottom>
    <a href="{{ URL::to('prova/final') }}"/><button type="button" class="btn btn-danger btn-lg" id="botao">Finalizar <i class="fa fa-check-square"></i> </button>
  </div>
</div>
<br>
<br>
@stop
