@extends('default')

@section('content')

{{ Form::model($user, array('action' => array('UserController@update', $user->id), 'method' => 'PUT')) }}

    @include('users._form')

<button type="submit" class="btn btn-success btn-sm"><i class="fa fa-check-circle"></i> Alterar</button>
<button type="button" class="btn btn-danger btn-sm"><i class="fa fa-times-circle"></i> Cancelar</button>
{{ Form::close() }}

@stop