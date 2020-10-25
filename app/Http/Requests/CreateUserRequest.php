<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'user_firstname' => 'required|string',
            'user_lastname' => 'required|string',
            'user_othername' => 'required|string',
            'user_email' => 'required|string|email|unique:users',
            'user_phone' => 'required|numeric|digits_between:11,15|unique:users',
            'user_address' => 'required|string',
            'user_postal_code' => 'required|string',
            'country_uuid' => 'required|uuid',
            'state_uuid' => 'required|uuid'
        ];
    }
}
