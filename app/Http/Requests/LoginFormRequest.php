<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\User;


class LoginFormRequest extends FormRequest
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
            'email' => 'required|email|exists:users,email',
            'password' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'email.required' => "O campo email é obrigatório",
            'email.email' => "O email digitado não é válido",
            'email.exists' => "O email digitado não está cadastrado",
            'password.required' => "O campo senha é obrigatório",
        ];
    }
}
