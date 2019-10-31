@extends('index')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="wrapper-progressBar">
                <ul class="progressBar font-weight-bold">
                    <li class="active">
                        <span class="f-s-12">1º Passo</span> <br> Identificação
                    </li>
                    <li class="@if(request()->get('passo', null) >= 2) active @endif">
                        <span class="f-s-12">2º Passo</span> <br> Endereço
                    </li>
                    <li class="@if(request()->get('passo', null) == 3) active @endif" >
                        <span class="f-s-12">3º Passo</span> <br> Contato
                    </li>
                </ul>
            </div>
        </div>            
        <div class="col-md-8 offset-md-2" style="margin-top:50px;">
            <form action="{{ url('cadastro/'.$cadastro->id) }}" method="POST">
                {{ csrf_field() }}
                @method('PUT')

                @if(request()->get('passo', null) != 2 && request()->get('passo', null) != 3 )
                    
                    @include('includes.inputs-identificacao')
                
                @elseif(request()->get('passo', null) == 2)
                
                    @include('includes.inputs-endereco')
                
                @elseif(request()->get('passo', null) == 3)
                    @include('includes.inputs-contato')
                @endif

                <input type="hidden" name="int_passo" value="{{ request()->get('passo', null) ?? $cadastro->int_passo }}">
                
                @if((request()->get('passo', null) == 2) || (request()->get('passo', null) == 3) )
                    <a class="btn btn-secondary float-left" href="{{ url('cadastro').'/'.$cadastro->id.'?passo=' }}{{ intval(request()->get('passo')) - 1 }}">
                        Passo anterior
                    </a>
                @endif

                <button class="btn btn-primary float-right" type="submit">
                    @if(request()->get('passo') != 3 )
                        Próximo
                    @else
                        Finalizar
                    @endif
                </button>

            </form>
        </div>            
    </div>

    <style>
        .wrapper-progressBar {
            width: 100%;
            margin-bottom: 50px;
        }

        .progressBar {
        }

        .progressBar li {
            list-style-type: none;
            float: left;
            width: 33%;
            position: relative;
            text-align: center;
        }

        .progressBar li:before {
            content: " ";
            line-height: 30px;
            border-radius: 50%;
            width: 17px;
            height: 17px;
            border: 1px solid #ddd;
            border-left:none;
            display: block;
            text-align: center;
            margin: 8.5px auto 0px;
            background-color: #eee;
        }
        .progressBar li:after {
            content: "";
            position: absolute;
            width: 97%;
            height: 5px;
            background-color: #eee;
            border: 1px solid #ddd;
            border-right:none;
            top: 15px;
            left: -50%;
            z-index: -1;
        }

        .progressBar li:first-child:after {
            content: none;
        }

        .progressBar li.active {
            color: dodgerblue;
        }

        .progressBar li.active:before {
            border-color: dodgerblue;
            background-color: dodgerblue
        }

        .progressBar .active:after {
            background-color: dodgerblue;
        }

        .f-s-12{
            font-size: 12px;
        }
    </style>

@endsection