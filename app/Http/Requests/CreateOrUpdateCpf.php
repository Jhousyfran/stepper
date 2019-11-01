<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateOrUpdateCpf extends FormRequest
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
            'str_cpf' => [
                'required',
                'regex:/[0-9]{3}\.[0-9]{3}\.[0-9]{3}-[0-9]{2}/',
                'max:14',
                'min:14'
            ]
        ];
    }
}
