@extends('default')

@section('content')

{{ Form::model($user, array('route' => array('users.update', $users->id), 'method' => 'PUT')) }}
    
    @include('users._form')

{{ Form::submit('Cadastrar', array('class' => 'btn btn-success') ('class' => 'fa fa-check'))}}
{{ Form::button('Cancelar', array('class' => 'btn btn-danger') ('class' => 'fa fa-times'))}}
{{ Form::close() }}

@stop