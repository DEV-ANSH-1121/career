<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResetPasswordRequest extends FormRequest
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
            'otp' => 'required',
            'reset_password' => 'required|confirmed',
            'reset_password_confirmation' => 'required',
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
            'reset_password.required' => 'New Password is required',
            'reset_password.confirmed' => 'Password does not match with confirm password',
            'reset_password_confirmation.required' => 'Re-enter your new password',
        ];
    }
}
