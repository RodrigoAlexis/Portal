<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactoRequest extends FormRequest
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
            'name' => 'required|string|max:45',
            'telefono' => 'required|max:10',
            'email' => 'required|email|max:60',
            'asunto' => 'required',
            'texto' => 'required',
            'g-recaptcha-response' => 'recaptcha'
        ];

        return $rules;
    }

    public function messages()
    {
        return [
            'name.required' => 'El campo Nombre es requerido',
            'name.max' => 'El campo Nombre no puede exceder los 45 caracteres',
            'telefono.required' => 'El campo Número de Contacto es requerido',
            'email.required' => 'El campo Correo Electrónico es requerido',
            'email.email' => 'Debe ingresar Correo Electrónico válido',
            'email.max' => 'El campo Correo Electrónico no puede exceder los 60 caracteres',
            'asunto.required' => 'El campo Asunto es requerido',
            'texto.required' => 'El campo Texto es requerido',
            'g-recaptcha-response.recaptcha' => 'Verifique que no es un robot'
            
            // 'adjunto.mimes' => 'Solo se permiten archivos con extensión (.jpeg, .jpg, .png, .pdf, .doc, .docx)'
            
            
        ];
    }
}
