<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Criar Usuário</h1>
    </div>
</div>
<hr>
{{ HTML::ul($errors->all()) }}
<form class="form-horizontal" role="form">
    <div class="form-group">
        <label for="use_name" class="col-sm-2 control-label">Nome</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="use_name" placeholder="Nome">
        </div>
    </div>
    <div class="form-group">
        <label for="email" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="email" placeholder="Email">
        </div>
    </div>
    <div class="form-group">
        <label for="password" class="col-sm-2 control-label">Password</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="password3" placeholder="Password">
        </div>
    </div>
</form>