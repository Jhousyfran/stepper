<div class="row">
    <div class="col-md-7">
    <div class="form-group">
        @component('components.input',
        [
          "label" => "Nome Completo",
          "name" => "str_nome",
          "required" => true,
          "value" => $cadastro->str_nome
        ])
        @endcomponent
    </div>
</div>
<div class="col-md-5">
    @component('components.input', 
        [ "label" => 'Data de Nascimento',
          "name" => 'dta_nascimento',
          "type" => 'date',
          "required" => true,
          "value" => $cadastro->dta_nascimento
         ])
    @endcomponent
</div>
</div>