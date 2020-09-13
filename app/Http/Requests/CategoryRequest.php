<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'name' => 'required|unique:categories',
            'description' => 'required',
            'image.*' => 'image',
            'condition' => 'required',
            'position' => 'required'
        ];
    }
    public function messages(){
        return[
            'required' => 'Este campo é obrigatório',
            'unique' => 'O campo nome não aceita valor duplicado',
            'image' => 'O arquivo não é uma imagem valida'

        ];
    }
}
