<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorageUserRequest extends FormRequest
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
            'name' => 'required|min:5|max:100|string',
            'email' => 'required|email|unique:users',
            'number_phone' => 'required|numeric|unique:users',
            'number_phone_alternative' => 'max:18',
            'password' => 'required|min:8|max:12|string',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => "O campo nome é obrigatorio.",
            'name.min' => "O campo nome tem que ter pelo menos 5 caracteres.",
            'name.max' => "O campo nome não pode ter mais de 100 caracteres.",
            'email.required' => "O campo email é obrigatorio.",
            'email.email' => "O e-mail informado não é valido.",
            'email.unique' => "O e-mail informado está sendo usado por outro usuario.",
            'number_phone.required' => "O telefone é obrigatorio.",
            'number_phone.unique' => "O telefone informado está sendo usado por outro usuario.",
            'number_phone.max' => "O numero de telefone excedeu o limite maximo de caracteres",
            'number_phone_alternative.max' => "O numero de telefone excedeu o limite maximo de caracteres",
            'password.required' => "O campo de senha é obrigatorio.",
            'password.confirmed' => "A confirmação da senha não bate.",
            'password.min' => "O senha não pode ter menos de 8 digitos.",
            'password.max' => "O senha não pode ter mais de 12 digitos.",
        ];
    }
}
