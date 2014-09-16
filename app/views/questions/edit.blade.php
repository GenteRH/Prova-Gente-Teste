@extends('default')

@section('content')

{{ Form::model($question, array('route' => array('questions.update', $question->id), 'method' => 'PUT')) }}
    
    @include('questions._form')

<button type="submit" class="btn btn-success btn-sm"><i class="fa fa-check-circle"></i> Alterar</button>
<button type="button" class="btn btn-danger btn-sm"><i class="fa fa-times-circle"></i> Cancelar</button>
{{ Form::close() }}
@stop