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

<a href="{{ URL::to('evaluations/create') }}"><button type="button"  id="botao" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Criar</button></a>
<table class="table table-striped table-hover" id="index" align="center" >
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($evaluations as $key => $value)
        <tr>
          <td>{{ $value->id }}</td>
          <td>{{ $value->eva_name }}</td>

          <!-- we will also add show, edit, and delete buttons -->
          <td>
            <a href="{{ URL::to('evaluations/delete/' . $value->id . '/') }}">
             <button type="submit"  class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Deletar"><i class="fa fa-times-circle"></i></button></a>
             <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
             <a href="{{ URL::to('evaluations/' . $value->id . '/edit') }}">
              <button type="button"  class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fa fa-wrench"></i></button></a>

          </td>
      </tr>
      @endforeach
  </tbody>
</table>
<div class="pagina">
    <ul class="pagination">
      <li><a href="#">&laquo;</a></li>
      <li><a href="#">1</a></li>
      <li><a href="#">2</a></li>
      <li><a href="#">3</a></li>
      <li><a href="#">4</a></li>
      <li><a href="#">5</a></li>
      <li><a href="#">&raquo;</a></li>
  </ul>
</div>
@stop