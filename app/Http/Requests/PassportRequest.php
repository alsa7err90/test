<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PassportRequest extends FormRequest
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
            'first_name' => 'required|string|min:2|max:20',
            'last_name' => 'required|string|max:50',
           
        ];
    }

    public function messages()
    {
        return [
            'first_name.required' => 'The First Name is required!',
            'last_name.required' => 'The Last Name is required!' 
        ];
    }
}
