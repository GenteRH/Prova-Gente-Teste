@extends('default')

@section('content')
{{ Form::open(array('url' => 'questions')) }}

  @include('questions._form')

<button type="submit" class="btn btn-success btn-sm"><i class="fa fa-check-circle"></i> Cadastrar</button>
<button type="button" class="btn btn-danger btn-sm"><i class="fa fa-times-circle"></i> Cancelar</button>
{{ Form::close() }}
@stop