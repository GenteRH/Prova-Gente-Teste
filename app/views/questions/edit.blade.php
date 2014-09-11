@extends('default')

@section('content')

{{ Form::model($question, array('route' => array('questions.update', $questions->id), 'method' => 'PUT')) }}
    
    @include('questions._form')

{{ Form::submit('Cadastrar', array('class' => 'btn btn-success') ('class' => 'fa fa-check')) }}
{{ Form::button('Cancelar', array('class' => 'btn btn-danger') ('class' => 'fa fa-times')) }}
{{ Form::close() }}
@stop