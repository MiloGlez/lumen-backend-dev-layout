<?php

namespace App\Http\Requests;

use Anik\Form\FormRequest;

class CreateProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    protected function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    protected function rules(): array
    {
        return [
            'id' => 'required|uuid|unique:products',
            'name' => 'required|unique:products|min:10|max:200',
        ];
    }

    public function messages(): array
    {
        return [
            'required' => 'El :attribute es obligatorio.',
            'uuid' => 'Esto no es un uuid valido',
            'unique' => 'Este valor ya ha sido tomado',
            'min' => 'Este campo debe ser de minimo :min caracteres',
            'max' => 'Este campo debe ser de máximo :max caracteres',
            'exists' => 'El :attribute ingresado no existe'

        ];
    }
}
