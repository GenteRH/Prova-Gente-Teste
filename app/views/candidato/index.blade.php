@extends('candidato.default')

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
        <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">Telefone</label>
        <div class="col-sm-10">
            <input type="text" class="ls.mask.phone8_with_ddd" id="inputPassword3" placeholder="Telefone">
        </div> 
    </div>
    <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">Celular</label>
        <div class="col-sm-10">
            <input type="text" class="ls.mask.phone9_with_ddd" id="inputPassword3" placeholder="Celular">
        </div>
    </div>
    <div align=bottom>
        <a href="{{ URL::to('prova/questoes') }}"/><button type="button" class="btn btn-success" id="botao">Iniciar</button>
    </div>
</form>
@stop