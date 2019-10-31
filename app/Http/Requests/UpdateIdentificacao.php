<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateIdentificacao extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        if(FormRequest::get('int_passo') != 2 && FormRequest::get('int_passo') != 3){
            return [
                'now' => date('Y-m-d'),
                'str_nome' => 'required|min:3|max:200',
                'dta_nascimento' => 'required|date|before:'.date('Y-m-d'),
            ];
        }
        elseif(FormRequest::get('int_passo') == 2){
            return [
                'str_rua' => 'required|max:50',
                'str_numero' => 'required|max:10',
                'str_cep' => [
                    'regex:/^[0-9]{5}-[0-9]{3}$/',
                    'required',
                    'max:9',
                ],
                'str_cidade' => 'required|max:100',
                'str_estado' => 'required|max:2|min:2',
            ];
        }
        elseif(FormRequest::get('int_passo') == 3){
            return [
                'str_telefone_fixo' => [
                    'regex:/^(\(11\) [9][0-9]{4}-[0-9]{4})|(\(1[2-9]\) [5-9][0-9]{3}-[0-9]{4})|(\([2-9][1-9]\) [5-9][0-9]{3}-[0-9]{4})$/',
                    'required',
                    'max:14'
                ],
                'str_telefone_celular' => [
                    'regex:/^\([1-9]\d\)\s9?\d{4}-\d{4}$/',
                    'required',
                    'max:15'
                ],
            ];
        }

    }
}
