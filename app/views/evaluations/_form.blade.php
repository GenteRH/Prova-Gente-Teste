
<div class="form-group">
    <label for="eva_name" class="col-sm-2 control-label">Nome</label>
    <div class="col-sm-6">
        <input type="text" class="form-control" id="eva_name" placeholder="Nome" value="{{ Input::old('eva_name')}}" required>
    </div>
</div>
<div class="form-group">
    <label for="eva_duration" class="col-sm-2 control-label">Duração</label>
    <div class="col-sm-2">
        <div class="input-group">
            <input type="number" class="form-control" id="eva_duration" min="0" max="120" value="{{ Input::old('eva_duration')}}" required>
            <div class="input-group-addon">Min</div>
        </div>
    </div>
</div>
<div class="form-group">
    <label for="que_id" class="col-sm-2 control-label">Portugês</label>
    <div class="col-sm-3">
        <input type="select" class="form-control" id="que_id" value="{{ Input::old('use_email')}}" required>
    </div>
</div>
<div class="form-group">
    <label for="que_id" class="col-sm-2 control-label">Matemática</label>
    <div class="col-sm-3">
        <input type="select" class="form-control" id="que_id" value="{{ Input::old('use_email')}}" required>
    </div>
</div>
<br>