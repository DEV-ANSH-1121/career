<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
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
            'name' => 'sometimes',
            'country' => 'sometimes|nullable|exists:mast_country,countryID',
            'state' => 'sometimes|nullable|exists:mast_state,stateID',
            'district' => 'sometimes|nullable|exists:mast_district,districtID',
            'mobileo' => 'sometimes',
            'usertype' => 'sometimes',
            'pincode' => 'sometimes|nullable|exists:mast_pin,pincode',
            'address' => 'sometimes',
            'gender' => 'sometimes',
            'dob' => 'sometimes',
            'pic' => 'sometimes|nullable|mimes:jpeg,png,jpg,svg|max:3072',
            'resume' => 'sometimes|nullable|mimes:jpeg,png,jpg,svg,doc,pdf,docx,zip|max:3072',
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
