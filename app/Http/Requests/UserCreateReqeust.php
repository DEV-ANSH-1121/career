<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserCreateReqeust extends FormRequest
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
            'name' => 'required',
            'email' => 'required|email|unique:user,email',
            'mobile' => 'required|unique:user,mobile',
            'usertype' => 'required|in:S,C,J',
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
            'usertype.in' => 'Please select your user type',
        ];
    }
}
