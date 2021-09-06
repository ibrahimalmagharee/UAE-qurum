<?php

namespace App\Http\Requests\ContactUsPage;

use Illuminate\Foundation\Http\FormRequest;

class ContactUsPageRequest extends FormRequest
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
            'website' => 'required|max:200',
            'phone' => 'required|max:15',
            'email' => 'required|max:100',
            'location_ar' => 'required|max:200',
            'location_en' => 'required|max:200',
        ];
    }

    public function messages()
    {
        return [
            'website.required' => __('validation.website_required'),
            'website.max' => __('validation.website_max'),
            'phone.required' => __('validation.phone_required'),
            'phone.max' => __('validation.phone_max'),
            'email.required' => __('validation.email_required'),
            'email.max' => __('validation.email_max'),
            'location_ar.required' => __('validation.location_ar_required'),
            'location_ar.max' => __('validation.location_max'),
            'location_en.required' => __('validation.location_en_required'),
            'location_en.max' => __('validation.location_max'),
        ];
    }
}
