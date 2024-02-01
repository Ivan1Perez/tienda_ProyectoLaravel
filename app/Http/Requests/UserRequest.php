<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'login' => 'required|min:3'
        ];
    }

    public function messages()
    {
        return [
            'login.required' => 'El login es obligatorio',
            'login.min' => 'La longitud ha de ser mínimo de tres caracteres'
        ];
    }
}
