<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistroRequest extends FormRequest
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
            'name' => 'required|min:1',
            'apellidos' => 'required|min:2',
            'edad' => 'required',
            'edad' => 'required|min:18',
            'pais' => 'required',
            'ciudad' => 'ciudad',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'direccion_comercial' => 'nullable'
        ];
    }
}
