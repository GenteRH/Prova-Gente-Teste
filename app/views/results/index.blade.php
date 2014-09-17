@extends('default')

@section('content')
<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header">Resultado</h1>
  </div>
</div>

<table class="table table-striped table-hover" id="index" align="center" >
  <thead>
    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>E-mail</th>
      <th>Ações</th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $key => $value)
    <tr>
      <td>{{ $value->id }}</td>
      <td>{{ $value->use_name }}</td>
      <td>{{ $value->use_email }}</td>

      <!-- we will also add show, edit, and delete buttons -->
      <td>
      <a href="{{ URL::to('nerds/' . $value->id) }}">
      <button type="submit"  class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" title="Deletar"><i class="fa fa-eye"></i></button></a>

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