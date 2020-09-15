<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Sector;

class SectorRequest extends FormRequest
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
            'name' => 'required|unique:sectors',
            'description' => 'required',
            'image.*' => 'image',
            'condition' => 'required',
            'position' => 'required'
        ];
    }
    public function messages(){
        return[
            'required' => 'Este campo é obrigatório.',
            'unique' => 'Este Setor já existe.',
            'image' => 'O arquivo não é uma imagem valida.'

        ];
    }
}
