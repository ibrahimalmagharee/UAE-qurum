<?php

namespace App\Http\Requests\Logo;

use Illuminate\Foundation\Http\FormRequest;

class LogoRequest extends FormRequest
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
            'logo' => 'required_without:id|image|mimes:png,jpg,jpeg,PNG,JPG,JPEG|max:8140',
        ];
    }

    public function messages()
    {
        return [
            'logo.required_without' => __('validation.logo_required_without'),
            'logo.mimes' =>  __('validation.logo_mimes'),
            'logo.max' =>  __('validation.logo_max'),
        ];
    }
}
