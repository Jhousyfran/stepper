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
        return view('cadastro', compact('cadastro'));
    }

    public function store(Request $request)
    {
        $cpf = preg_replace("/[^0-9]/", "", $request->str_cpf);

        $cadastro = Cadastro::firstOrCreate(['str_cpf' => $cpf ]);
        $cadastro->save();

        return redirect()->action('CadastroController@show', ['id' => $cadastro->id]);
    }

    public function update(Cadastro $cadastro, UpdateIdentificacao $request)
    {
        DB::beginTransaction();

        try {
            
            $cadastro->update($request->all());
            DB::commit();

        } catch (\Exception $e) {
            BD::rollBack();
            return redirect()->back();
        }

        return 'oK';
    }

}
