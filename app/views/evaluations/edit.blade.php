@extends('default')

@section('content')

{{ Form::model($evaluation, array('route' => array('evaluations.update', $evaluations->id), 'method' => 'PUT')) }}
    
    @include('evaluations._form')

{{ Form::submit('Cadastrar', array('class' => 'btn btn-success') ('class' => 'fa fa-check'))}}
{{ Form::button('Cancelar', array('class' => 'btn btn-danger') ('class' => 'fa fa-times'))}}
{{ Form::close() }}
@stop