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
<button type="button" id="botao" class="btn btn-primary"><i class="fa fa-plus"></i> Criar</button>
<table class="table table-striped table-hover" id="index" align="center" >
    <thead align="center">
        <tr align="center">
            <th align="center">ID</th>
            <th>Nome</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <tr align="center" >
            <td>01</td>
            <td>Lucas de Souza</td>
            <td>
                <button type="button"  class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fa fa-wrench"></i></button>
                <button type="button"  class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Deletar"><i class="fa fa-times-circle"></i></button>
            </td>
        </tr>
        <tr align="center" >
            <td>01</td>
            <td>Lucas de Souza</td>
            <td>
                <button type="button"  class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fa fa-wrench"></i></button>
                <button type="button"  class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Deletar"><i class="fa fa-times-circle"></i></button>
            </td>
        </tr>
        <tr align="center" >
            <td>01</td>
            <td>Lucas de Souza</td>
            <td>
                <button type="button"  class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fa fa-wrench"></i></button>
                <button type="button"  class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Deletar"><i class="fa fa-times-circle"></i></button>
            </td>
        </tr>
        <tr align="center" >
            <td>01</td>
            <td>Lucas de Souza</td>
            <td>
                <button type="button"  class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fa fa-wrench"></i></button>
                <button type="button"  class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Deletar"><i class="fa fa-times-circle"></i></button>
            </td>
        </tr>
    </tbody>
</table>
@stop