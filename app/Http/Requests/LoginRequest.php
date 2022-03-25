<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'email' => 'required|email',
            'password' => 'required|min:8|max:12|string',
        ];
    }
    public function messages()
    {
        return [
            'email.required' => "O campo email é obrigatorio.",
            'email.email' => "O e-mail informado não é valido.",
            'password.required' => "O campo de senha é obrigatorio.",
            'password.min' => "O senha não pode ter menos de 8 digitos.",
            'password.max' => "O senha não pode ter mais de 12 digitos.",
        ];
    }
}
