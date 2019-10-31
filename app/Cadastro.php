<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cadastro extends Model
{
    protected $fillable = [
        'str_cpf',
        'str_nome',
        'dta_nascimento',
        'str_rua',
        'str_numero',
        'str_cep',
        'str_cidade',
        'str_estado',
        'str_telefone_fixo',
        'str_telefone_celular'
    ];
}
