<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePassengerRequest extends FormRequest
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
    { $userId = $this->route('passenger');
        return [
            'FirstName' => 'required|string|max:255',
            'LastName' => 'required|string|max:255',
            'PhoneNumber' => 'required|numeric',
            'Email' => 'required|email|unique:passengers,email,' . $userId,
            'Flags' => 'required|numeric',
            'Rank' => 'numeric',
            'Rating' => 'numeric',
        ];
    }
}
