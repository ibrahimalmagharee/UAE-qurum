<?php

namespace App\Http\Requests\Site;

use Illuminate\Foundation\Http\FormRequest;

class ContactUsRequest extends FormRequest
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
            'first_name' => 'required|string|max:100',
            'last_name' => 'required|string|max:100',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:100',
            'message' => 'required|max:1000',
        ];
    }

    public function messages()
    {
        return[
            'first_name.required' => __('siteValidation.first_name_required'),
            'first_name.string' => __('siteValidation.first_name_string'),
            'first_name.max' => __('siteValidation.first_name_max'),
            'last_name.required' => __('siteValidation.last_name_required'),
            'last_name.string' => __('siteValidation.last_name_string'),
            'last_name.max' => __('siteValidation.last_name_max'),
            'phone.required' => __('siteValidation.phone_required'),
            'phone.max' => __('siteValidation.phone_max'),
            'email.required' => __('siteValidation.email_required'),
            'email.email' => __('siteValidation.email_email'),
            'email.max' => __('siteValidation.email_max'),
            'message.required' => __('siteValidation.message_required'),
            'message.max' => __('siteValidation.message_max'),
        ];

    }
}
