<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\User;

class RegisterFormRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'date' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => "O campo nome é obrigatório",
            'email.required' => "O campo email é obrigatório",
            'date.required' => "O campo data é obrigatório",
            'email.email' => "O email digitado não é válido",
            'email.unique' => "O email digitado já está cadastrado",
            'password.required' => "O campo senha é obrigatório",
        ];
    }
}
