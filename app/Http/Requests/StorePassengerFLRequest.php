<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePassengerFLRequest extends FormRequest
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
            'Pass_ID' => 'required|numeric',
            'PFav_ID' => 'required|numeric',
            'PFav_Longitude' => 'required|numeric',
            'PFav_Latitude' => 'required|numeric',
            'PFav_Name' => 'required|string',
        ];
    }
}
