<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PassengersessionRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'PSes_ID' => 'required|numeric',
            'Pass_ID' => 'required|numeric',
            'PSes_Token' => 'required|numeric',
            'Pses_InstanceID' => 'required|numeric',
        ];
    }
}
