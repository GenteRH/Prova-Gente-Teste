@extends('default')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Avaliação</h1>
    </div>
</div>

@if (Session::has('message'))
<div class="alert alert-info">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    {{ Session::get('message') }}
</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>Name</td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($authors as $author)
        <tr>
            <td><a href="{{URL::to('evaluations/' . $evaluation->id. '/edit')}}"/> {{ $evaluation -> name}}</td>
            <td><a href="{{ URL::to('evaluations/delete/' . $evaluation->id . '/')  }}" class="btn btn-danger">x</a></td>
        </tr>
        @endforeach
        ''
    </tbody>
</table>

@stop