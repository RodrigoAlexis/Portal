<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBlogRequest extends FormRequest
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
            'name' => 'required',
            'slug' => 'required|unique:blogs',
            'status' => 'required|in:1,2',
            'file' => 'image'
        ];

        if($this->status == 2){
            $rules = array_merge($rules, [
                'stract' => 'required',
                'body' => 'required'
            ]);
        }

        return $rules;
    }
}
