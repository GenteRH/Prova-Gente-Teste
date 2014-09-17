@extends('candidato.default')

<script>
    function formatar(mascara, documento){
      var i = documento.value.length;
      var saida = mascara.substring(0,1);
      var texto = mascara.substring(i)

      if (texto.substring(0,1) != saida){
        documento.value += texto.substring(0,1);
    }
}
</script>

@section('content')
<h1 class="text-center"><img src="{{ asset('assets/candidate/img/logo-mini.png') }}" alt="logo-mini" class="img-circle" width="40px">  Gente RH</h1>

<h5>PROVA PROVA PROVA PROVA PROVA PROVA PROVA PROVA PROVA PROVA PROVA PROVA PR</h5>
<h5>PROVA PROVA PROVA PROVA PROVA PROVA PROVA PROVA PROVA PROVA PROVA PROVA PR</h5>
<h5>PROVA PROVA PROVA PROVA PROVA PROVA PROVA PROVA PROVA PROVA PROVA PROVA PR</h5>
<h5>PROVA PROVA PROVA PROVA PROVA PROVA PROVA PROVA PROVA PROVA PROVA PROVA PR</h5>
<h5>PROVA PROVA PROVA PROVA PROVA PROVA PROVA PROVA PROVA PROVA PROVA PROVA PR</h5>
<h5>PROVA PROVA PROVA PROVA PROVA PROVA PROVA PROVA PROVA PROVA PROVA PROVA PR</h5>
<h3><i class="fa fa-user" colo="#000"></i> Dados</h3>
<hr class="forte">
<form class="form-horizontal" role="form">
    <div class="form-group">
    <label for="use_email" class="col-sm-2 control-label">E-mail</label>
        <div class="col-sm-6">
            <input type="email" class="form-control" id="use_email" placeholder="E-mail"  value="{{ Input::old('use_email')}}" required>
        </div>
    </div>
    <div class="form-group">
        <label for="use_phone" class="col-sm-2 control-label">Telefone</label>
        <div class="col-sm-3">
            <input type="tel" class="form-control" id="use_phone" placeholder="Telefone" value="{{ Input::old('use_phone')}}" required maxlength="12" OnKeyPress="formatar('##-####-####', this)">
        </div>
    </div>
    <div class="form-group">
        <label for="use_cell_phone" class="col-sm-2 control-label">Celular</label>
        <div class="col-sm-3">
            <input type="tel" class="form-control" id="use_cell_phone" placeholder="Celular" value="{{ Input::old('use_cell_phone')}}" required maxlength="13" OnKeyPress="formatar('##-#####-####', this)">
        </div>
    </div>
    <div align=bottom>
        <a href="{{ URL::to('prova/questoes') }}"/><button type="button" class="btn btn-success btn-lg" id="botao">Iniciar <i class="fa fa-arrow-circle-right"></i></button>
    </div> 
    <br>
</form>
<br>
@stop