<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DenunciaRequest extends FormRequest
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

        $rules = [
            'canal' => 'required',
            'categoria' => 'required',
            'tipo' => 'required',
            'isClient' => 'required',
            'hechos' => 'required',
            'adjunto' => 'array|max:2000',
            // 'g-recaptcha-response' => 'required|recaptchav3:register,0.5'
        ];

        if($this->canal == 'Seguimiento'){
            $rules = array_merge($rules, [
                'name' => 'required',
                'paterno' => 'required',
                'materno' => 'required',
                'telefono' => 'required',
                'email' => 'required',
            ]); 
        }

        return $rules;
    }

    public function messages()
    {
        return [
            'canal.required' => 'El campo Canal es requerido',
            'categoria.required' => 'El campo Categoría es requerido',
            'tipo.required' => 'El campo Tipo es requerido',
            'isClient.required' => 'El campo ¿Es Cliente? es requerido',
            'hechos.required' => 'El campo Texto de los Hechos es requerido',
            'name.required' => 'El campo Nombre es requerido',
            'paterno.required' => 'El campo Apellido Paterno es requerido',
            'materno.required' => 'El campo Apellido Materno es requerido',
            'telefono.required' => 'El campo Número de Contacto es requerido',
            'email.required' => 'El campo Correo Electrónico es requerido',
            'adjunto.max' => 'El peso máximo permitido es de 2 MB'
            // 'adjunto.mimes' => 'Solo se permiten archivos con extensión (.jpeg, .jpg, .png, .pdf, .doc, .docx)'
            
            
        ];
    }
}
