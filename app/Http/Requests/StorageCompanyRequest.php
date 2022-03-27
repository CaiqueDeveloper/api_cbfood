<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorageCompanyRequest extends FormRequest
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
            'name' => 'required|min:10|max:200',
            'cnpj' => 'required|unique:companies|max:14',
            'email' => 'required|unique:companies|email'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'O campo nome é obrigatorio.',
            'name.min' => 'O Campo nome precisa ter no minimo 10 caracteres.',
            'name.max' => 'O Campo nome pode ter no maximo 200 Carateres',
            'cnpj.required' => 'O Campo CNPJ é obrigatorio.',
            'cnpj.unique' => 'O CNPJ informado está sendo usado por outra empre.',
            'email.email' => 'O E-mail informado não é um endereço de e-mail valido',
            'email.required' => 'o Campo e-mail é obrigatorio.',
            'email.unique' => 'O E-mail informado está sendo usado por outra empresa.',
        ];
    }
}
