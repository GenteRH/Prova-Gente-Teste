@extends('default')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Editar Questão</h1>
    </div>
</div>

{{ Form::model($question, array('action' => array('QuestionController@update', $question->id), 'method' => 'PUT')) }}

@include('questions._form')

<br>
<br>
<br>
<br>
{{ Form::submit('Cadastrar', array('class' => 'btn btn-success')) }}
{{ Form::button('Cancelar', array('class' => 'btn btn-danger')) }}
{{ Form::close() }}
<br>
<br>
@stop