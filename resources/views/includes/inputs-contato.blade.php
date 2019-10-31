<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            @component('components.input',
            [
            "label" => "Telefone Fixo",
            "name" => "str_telefone_fixo",
            "required" => false,
            "value" => $cadastro->str_telefone_fixo
            ])
            @endcomponent
        </div>
    </div>
    <div class="col-md-6">
        @component('components.input', 
            [ "label" => 'Celular',
            "name" => 'str_telefone_celular',
            "required" => false,
            "value" => $cadastro->str_telefone_celular
            ])
        @endcomponent
    </div>
</div>