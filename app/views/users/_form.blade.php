 <script>
    $(document).ready(function() {
        $("#use_profile").select2({
            placeholder:"Perfil",
            allowClear:true
        });
    });
    function formatar(mascara, documento){
      var i = documento.value.length;
      var saida = mascara.substring(0,1);
      var texto = mascara.substring(i)

      if (texto.substring(0,1) != saida){
        documento.value += texto.substring(0,1);
    }
}
</script>

<div class="form-group">
    <label for="use_name" class="col-sm-1 control-label">Nome</label>
    <div class="col-sm-5">
        <input type="text" class="form-control" id="use_name" placeholder="Nome" value="{{ Input::old('use_name')}}" required>
    </div>
</div>
<div class="form-group">
    <label for="use_cpf" class="col-sm-1 control-label">CPF</label>
    <div class="col-sm-3">
        <input type="text" class="form-control" id="use_cpf" placeholder="CPF" value="{{ Input::old('use_cpf')}}" required maxlength="14" OnKeyPress="formatar('###.###.###-##', this)">
    </div>
</div>
<div class="form-group">
    <label for="use_email" class="col-sm-1 control-label">E-mail</label>
    <div class="col-sm-5">
        <input type="email" class="form-control" id="use_email" placeholder="E-mail"  value="{{ Input::old('use_email')}}" required>
    </div>
</div>
<div class="form-group">
    <label for="use_password" class="col-sm-1 control-label">Senha</label>
    <div class="col-sm-2">
        <input type="password" class="form-control" id="use_password" placeholder="Senha" maxlength="20" value="{{ Input::old('use_password')}}" required>
    </div>
</div>
<div class="form-group">
    <label for="use_phone" class="col-sm-1 control-label">Telefone</label>
    <div class="col-sm-3">
        <input type="tel" class="form-control" id="use_phone" placeholder="Telefone" value="{{ Input::old('use_phone')}}" required maxlength="12" OnKeyPress="formatar('##-####-####', this)">
    </div>
</div>
<div class="form-group">
    <label for="use_cell_phone" class="col-sm-1 control-label">Celular</label>
    <div class="col-sm-3">
        <input type="tel" class="form-control" id="use_cell_phone" placeholder="Celular" value="{{ Input::old('use_cell_phone')}}" required maxlength="13" OnKeyPress="formatar('##-#####-####', this)">
    </div>
</div>
<div class="form-group">
    <label for="use_profile" class="col-sm-1 control-label">Perfil</label>
    <div class="col-sm-3">
        <select class="form-control" id="use_profile">
            <option value="Administrador">Administrador</option>
            <option value="Candidato">Candidato</option>
        </select>
    </div>
</div>
<br>