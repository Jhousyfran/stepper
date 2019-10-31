@extends('index')

@section('content')

{{-- <div class="row">
    <div class="col-md-12 offset-5">
        <h2>Bem Vindo</h2>
    </div>
</div> --}}

<div class="">
    <form class="form-inline" method="POST" action="{{ url('cadastro') }}">
        {{ csrf_field() }}
        <div class="form-group mx-sm-3 mb-2">
            <label for="inputCpf" class="sr-only">CPF</label>
            <input type="text" name="str_cpf" class="form-control" id="inputCpf" placeholder="CPF">
        </div>
        <button type="submit" class="btn btn-primary mb-2">
            <i class="fa fa-arrow-right" aria-hidden="true"></i>
        </button>
    </form>
</div>
    
</div>

@endsection