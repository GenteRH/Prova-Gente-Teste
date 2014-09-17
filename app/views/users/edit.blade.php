@extends('default')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Editar Usuário {{$user->use_name}}</h1>
    </div>
</div>

{{ Form::model($user, array('action' => array('UserController@update', $user->id), 'method' => 'PUT')) }}

    @include('users._form')

{{ Form::submit('Cadastrar', array('class' => 'btn btn-success')) }}
{{ Form::button('Cancelar', array('class' => 'btn btn-danger')) }}
{{ Form::close() }}
@stop