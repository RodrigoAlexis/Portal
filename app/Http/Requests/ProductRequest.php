<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
        $product = $this->route()->parameter('product');

        $rules = [
            'name' => 'required',
            'slug' => 'required|unique:products',
            'etiqueta1' => 'required',
            'color1' => 'required',
            'piezas' => 'required',
            'group_id' => 'required',
            'line_id' => 'required'

        ];

        if ($product){
             $rules['slug'] = 'required|unique:products,slug,' . $product->id;
        }

        return $rules;
    }

    public function messages()
    {
        return [
            'name.required' => 'El campo nombre es requerido',
            'slug.required' => 'El campo URL amigable es requerido',
            'slug.unique' => 'Este nombre ya existe, ingrese otro nombre',
            'etiqueta1.required' => 'El campo Etiqueta #1 es requerido',
            'color1.required' => 'El campo Color #1 es requerido',
            'piezas.required' => 'El campo Piezas es requerido',
            'group_id.required' => 'El campo grupo es requerido',
            'line_id.required' => 'El campo linea es requerido',
        ];
    }
}
