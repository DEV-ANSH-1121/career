<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'loginemail' => 'required|email|exists:user,email',
            'password' => 'required',
        ];
    }

    /**
     * Failed Validation Error Message
     *
     * return []
     */
    public function messages()
    {
        return [
            'loginemail.exists' => 'Your email is not correct',
        ];
    }
}
