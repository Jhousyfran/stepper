@extends('index')

@section('content')
    <div class="row">         
        <div class="col-md-12" style="margin-top:50px;">
                <label style="font-size:30px;">
                    Cadastros
                </label>
                <a class="btn btn-success btn-sm float-right m-r-60" href="{{ url('/') }}">
                    <i class="fa fa-plus" aria-hidden="true"></i>
                </a>
            {{-- <hr> --}}
            <table class="table table-strepde">
                <thead>
                    <th class="text-center">#</th>
                    <th class="text-center">Nome</th>
                    <th class="text-center">Data de Nascimento</th>
                    <th class="text-center">Ação</th>
                </thead>
                <tbody>
                    @forelse ($cadastros as $key => $cadastro)
                        <tr>
                            <td class="text-center">{{ ++$key }}</td>
                            <td class="text-center">{{ $cadastro->str_nome }}</td>
                            <td class="text-center">{{ date('d/m/Y', strtotime($cadastro->dta_nascimento)) }}</td>
                            <td class="text-center">
                                <a href="{{ url('cadastro/'.$cadastro->id) }}" class="btn btn-info btn-sm">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center">
                                O banco de cadastros está vazio. 
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    <style>
        .m-r-60{
            margin-right: 70px;
        }
    </style>
@endsection