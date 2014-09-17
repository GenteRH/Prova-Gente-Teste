 <script>
    $(document).ready(function() {
        $("#que_alt_correct").select2({
            allowClear:true
        })
    });
    $(document).ready(function() {
        $("#que_category").select2({
            allowClear:true
        })
    });
</script>
<div class="form-group">
    <label for="que_category" class="col-sm-2 control-label">Categoria</label>
    <div class="col-sm-3">
        <select class="form-control" id="que_category">
            <option value="Portugues">Português</option>
            <option value="Matematica">Matemática</option>
        </select>
    </div>
</div>
<div class="form-group">
    <label text-align:right for="que_name" class="col-sm-2 control-label">Pergunta</label>
    <div class="col-sm-10">
        <textarea class="form-control" id="que_alt_1" placeholder="Pergunta" rows="2" alue="{{ Input::old('que_name')}}" required></textarea>
    </div>
</div>
<br>
<div class="form-group">
    <label for="que_alt_1" class="col-sm-2 control-label">1) Alternativa</label>
    <div class="col-sm-10">
        <textarea class="form-control" id="que_alt_1" placeholder="1) Alternativa" rows="2" alue="{{ Input::old('que_alt_1')}}" required></textarea>
    </div>
</div>
<div class="form-group">
    <label for="que_alt_2" class="col-sm-2 control-label">2) Alternativa</label>
    <div class="col-sm-10">
        <textarea class="form-control" id="que_alt_2" placeholder="2) Alternativa" rows="2" alue="{{ Input::old('que_alt_2')}}" required></textarea>
    </div>
</div>
<div class="form-group">
    <label for="que_alt_3" class="col-sm-2 control-label">3) Alternativa</label>
    <div class="col-sm-10">
        <textarea class="form-control" id="que_alt_3" placeholder="3) Alternativa" rows="2" alue="{{ Input::old('que_alt_3')}}" required></textarea>
    </div>
</div>
<div class="form-group">
    <label for="que_alt_4" class="col-sm-2 control-label">4) Alternativa</label>
    <div class="col-sm-10">
        <textarea class="form-control" id="que_alt_4" placeholder="4) Alternativa" rows="2" alue="{{ Input::old('que_alt_4')}}" required></textarea>
    </div>
</div>
<div class="form-group">
    <label for="que_alt_5" class="col-sm-2 control-label">5) Alternativa</label>
    <div class="col-sm-10">
        <textarea class="form-control" id="que_alt_5" placeholder="5) Alternativa" rows="2" alue="{{ Input::old('que_alt_5')}}" required></textarea>
    </div>
</div>
<div class="form-group">
    <label for="que_alt_correct" class="col-sm-2 control-label">Correta</label>
    <div class="col-sm-3">
        <select class="form-control" id="que_alt_correct">
            <option value="que_alt_1">1) Alternativa</option>
            <option value="que_alt_2">2) Alternativa</option>
            <option value="que_alt_3">3) Alternativa</option>
            <option value="que_alt_4">4) Alternativa</option>
            <option value="que_alt_5">5) Alternativa</option>
        </select>
    </div>
</div>
<br>

