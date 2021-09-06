<?php

namespace App\Http\Requests\SocialLink;

use Illuminate\Foundation\Http\FormRequest;

class SocialLinkRequest extends FormRequest
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
            'name_ar' => 'required|max:100',
            'name_en' => 'required|max:150',
            'link' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name_ar.required' => __('validation.name_ar_required'),
            'name_ar.max' => __('validation.name_ar_max'),
            'name_en.required' => __('validation.name_en_required'),
            'name_en.max' => __('validation.name_en_max'),
            'link.required' => __('validation.link_required'),
        ];
    }
}
