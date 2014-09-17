@extends('default')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Criar Usuário</h1>
    </div>
</div>

{{ HTML::ul($errors->all() )}}

{{ Form::open(array('url' => 'users')) }}

@include('users._form')
<br>

{{ Form::submit('Cadastrar', array('class' => 'btn btn-success')) }}
{{ Form::button('Cancelar', array('class' => 'btn btn-danger')) }}
{{ Form::close() }}
@stop
