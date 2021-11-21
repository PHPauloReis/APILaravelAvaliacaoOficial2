<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TermRequest extends FormRequest
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
            'expression' => 'required',
            'description' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'expression.required' => 'A expressão não foi informada!',
            'description.required' => 'A descrição não foi informada'
        ];
    }
}
