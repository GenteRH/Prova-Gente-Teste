<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Criar Usuário</h1>
    </div>
</div>

<form class="form-horizontal" role="form">
    <div class="form-group">
        <label for="use_name" class="col-sm-2 control-label">Nome</label>
        <div class="col-sm-5">
            {{ Form::text('use_name', Input::old('use_name'), array('class' => 'form-control')) }}
        </div>
    </div>
    <div class="form-group">
        <label for="use_email" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-5">
            {{ Form::text('use_email', Input::old('use_email'), array('class' => 'form-control')) }}
        </div>
    </div>
    <div class="form-group">
        <label for="use_passoword" class="col-sm-2 control-label">Senha</label>
        <div class="col-sm-3">
            {{ Form::text('use_passoword', Input::old('use_passoword'), array('class' => 'form-control')) }}
        </div>
    </div>
</form>
<br>
<br>