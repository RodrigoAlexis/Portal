<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GroupRequest extends FormRequest
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
        $group = $this->route()->parameter('group');

        $rules = [
            'name' => 'required',
            'slug' => 'required|unique:groups',
            'file' => 'image'
        ];

        if ($group){
            $rules['slug'] = 'required|unique:blogs,slug,' . $group->id;
        }

        return $rules;
    }

    public function messages()
    {
        return [
            'name.required' => 'El campo nombre es requerido',
            'slug.required' => 'El campo URL amigable es requerido',
            'slug.unique' => 'Este nombre ya existe, ingrese otro nombre',
            'file.image' => 'Solo se aceptan imagenes'
        ];
    }
}
