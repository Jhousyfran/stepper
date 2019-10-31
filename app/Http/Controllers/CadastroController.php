<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Cadastro;
use App\Http\Requests\UpdateIdentificacao;

class CadastroController extends Controller
{
    public function create()
    {

    }

    public function show(Cadastro $cadastro)
    {
        if(!$cadastro){
            return redirect('/');
        }

        return view('cadastro', compact('cadastro'));
    }

    public function store(Request $request)
    {
        $cpf = preg_replace("/[^0-9]/", "", $request->str_cpf);

        $cadastro = Cadastro::firstOrCreate(['str_cpf' => $cpf ]);
        $cadastro->save();

        return redirect()->action('CadastroController@show', ['id' => $cadastro->id, 'passo' => $cadastro->int_passo]);
    }

    public function update(Cadastro $cadastro, UpdateIdentificacao $request)
    {
        DB::beginTransaction();

        try {
            
            $request->str_cep =  $request->str_cep ? preg_replace("/[^0-9]/", "", $request->str_cep) : NULL;
            $request->str_telefone_fixo =  $request->str_telefone_fixo ? preg_replace("/[^0-9]/", "", $request->str_telefone_fixo) : NULL;
            $request->str_telefone_celular =  $request->str_telefone_celular ? preg_replace("/[^0-9]/", "", $request->str_telefone_celular) : NULL;
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
