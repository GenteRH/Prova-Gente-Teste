@extends('default')

@selection('content')
<div class="row">
    <div class="col-lg-12">
        <br>
        <h1 class="page-header">Usuários</h1>
    </div>
</div>
@if (Session::has('message'))
<div class="alert alert-info">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    {{ Session::get('message') }}
</div>
@endif
<table class="table table-striper table-bordered">
    <thred>
        <tr>
            <td>ID</td>
            <td>Nome</td>
            <td>E-mail</td>
        <tr>
    </thred>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <td><a href="{{ URL::to('users/' . $user->id . '/edit') }}"/> {{ $user -> ID}}</td>
            <td><a href="{{ URL::to('users/' . $user->id . '/edit') }}"/> {{ $user -> Nome}}</td>
        </tr>
        @endforeach
    </tbody>
</table>        

@stop