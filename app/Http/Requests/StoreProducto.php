<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProducto extends FormRequest
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
                'nombre' => 'required|max:10',
                'descripcion' => 'required|min:10',
                'categoria' => 'required'
        ];
    }

    public function attributes()
    {
        return [
            'nombre' => 'nombre de producto'
        ];
    }

    public function messages()
    {
        return [
            'descripcion.required' => 'Debe ingresar una descripción del producto.' 
        ];
    }
}
