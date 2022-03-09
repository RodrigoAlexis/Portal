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

        $Mensaje = [
            "name.required" => 'El campo Nombre no puede quedar vacío',
            "slug.required" => 'El campo Slug no puede quedar vacío',
            "slug.unique:groups" => 'Ya se cuenta con un registro con este nombre en la base de datos',
            "file.image" => 'Solo se permiten archivos .png | .jpeg | .jpg'
        ];

        if ($group){
            $rules['slug'] = 'required|unique:blogs,slug,' . $group->id;
        }

        return $rules;
    }
}
