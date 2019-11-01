<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Cadastro;
use App\Http\Requests\UpdateIdentificacao;
use App\Http\Requests\CreateOrUpdateCpf;

class CadastroController extends Controller
{
    public function index()
    {
        return redirect('/');
    }

    public function show(Cadastro $cadastro)
    {
        if(!$cadastro){
            return redirect('/');
        }

        return view('cadastro', compact('cadastro'));
    }

    public function store(CreateOrUpdateCpf $request)
    {
        $cpf = preg_replace("/[^0-9]/", "", $request->str_cpf);
        
        if(!Cadastro::validaCPF($cpf)){
            return back()->withInput()->with('cpf_invalido', 'CPF inválido');
        }

        $cadastro = Cadastro::firstOrCreate(['str_cpf' => $cpf ]);
        $cadastro->save();

        return redirect()->action('CadastroController@show', ['id' => $cadastro->id, 'passo' => $cadastro->int_passo]);
    }

    public function update(Cadastro $cadastro, UpdateIdentificacao $request)
    {
        
        $request->str_cep =  $request->str_cep ? preg_replace("/[^0-9]/", "", $request->str_cep) : NULL;
        $request->str_telefone_fixo =  $request->str_telefone_fixo ? preg_replace("/[^0-9]/", "", $request->str_telefone_fixo) : NULL;
        $request->str_telefone_celular =  $request->str_telefone_celular ? preg_replace("/[^0-9]/", "", $request->str_telefone_celular) : NULL;


        DB::beginTransaction();

        try {

            $cadastro->update($request->all());
            
            if($request->str_nome)
                $cadastro->int_passo = 2;
            if($request->str_rua)
                $cadastro->int_passo = 3;
            
            $cadastro->save();
            
            DB::commit();

        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back();
        }

        return redirect("cadastro/{$cadastro->id}?passo={$cadastro->int_passo}");
    }

}
