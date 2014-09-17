@extends('default')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Editar Avaliação {{}}</h1>
    </div>
</div>

{{ Form::model($evaluation, array('action' => array('EvaluationController@update', $evaluation->id), 'method' => 'PUT')) }}
    
    @include('evaluations._form')

{{ Form::submit('Cadastrar', array('class' => 'btn btn-success')) }}
{{ Form::button('Cancelar', array('class' => 'btn btn-danger')) }}
{{ Form::close() }}
@stop