@extends('default')

@section('content')
{{ Form::open(array('url' => 'evaluations' )) }}
  
  @include('evaluations._form')

{{ Form::submit('Cadastrar', array('class' => 'btn btn-success')) }}
{{ Form::button('Cancelar', array('class' => 'btn btn-danger')) }}
{{ Form::close() }}
@stop
