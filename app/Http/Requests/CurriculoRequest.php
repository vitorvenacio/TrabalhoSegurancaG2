<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CurriculoRequest extends FormRequest
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
            'name'=>'required',
            'email'=>'required|email:rfc,dns',
            'experiencias'=>'required'
        ];
    }

    public function messages()
    {
        return [
            'experiencias.required' => 'O campo "Expereriencias profissionais" é obrigatório'
        ];
    }
}
