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
        return [
            'now' => date('Y-m-d'),
            'str_nome' => 'required|min:3|max:200',
            'dta_nascimento' => 'required|date|before:'.date('Y-m-d'),
        ];
    }
}
