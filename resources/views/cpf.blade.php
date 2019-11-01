@extends('index')

@section('content')

<div style="margin-top:100px;">
    <form class="" method="POST" action="{{ url('cadastro') }}">
        {{ csrf_field() }}
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <h2 class="text-center">Olá!</h2>
                    <p class="text-center">
                        Espero que tudo ocorra bem por aqui, ok? <br>
                        Vamos começar, informe um CPF válido no campo abaixo. <br><br>
                        Ele será usado como referência caso você não preencha todo o cadastro e queira voltar mais tarde para terminar.
                    </p>
                    <br>
                </div>
                    <div class="col-md-3 offset-md-4">
                        <input type="text" name="str_cpf" class="form-control" id="inputCpf" placeholder="Ex: 123.456.789-00" onchange="validarCPF(this);">
                        <div class="invalid-feedback" id="cpfInvalido" style="display:none;">
                            CPF inválido.
                        </div>
                    </div>
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-primary mb-2" id="buttonEnviar">
                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
    
</div>

@endsection