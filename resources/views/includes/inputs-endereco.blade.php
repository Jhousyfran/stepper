<div class="row">
    <div class="col-md-8">
        <div class="form-group">
            @component('components.input',
            [
            "label" => "Rua",
            "name" => "str_rua",
            "required" => true,
            "value" => $cadastro->str_rua
            ])
            maxlength="50"
            @endcomponent
        </div>
    </div>
    <div class="col-md-4">
        @component('components.input', 
            [ "label" => 'Número',
            "name" => 'str_numero',
            "required" => true,
            "value" => $cadastro->str_numero
            ])
            maxlength="10"
        @endcomponent
    </div>
    <div class="col-md-3">
        @component('components.input', 
            [ "label" => 'CEP',
            "name" => 'str_cep',
            "required" => true,
            "value" => $cadastro->str_cep
            ])
            maxlength="9"
        @endcomponent
    </div>
    <div class="col-md-7">
        @component('components.input', 
            [ "label" => 'Cidade',
            "name" => 'str_cidade',
            "required" => true,
            "value" => $cadastro->str_cidade
            ])
            maxlength="100"
        @endcomponent
    </div>
    <div class="col-md-2">
        @component('components.input', 
            [ "label" => 'UF',
            "name" => 'str_estado',
            "required" => true,
            "value" => $cadastro->str_estado
            ])
            maxlength="2"
        @endcomponent
    </div>
</div>
