<?php

namespace App\Http\Requests\Main;

use Illuminate\Foundation\Http\FormRequest;

class MainRequest extends FormRequest
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
            'title_ar' => 'required|max:100',
            'title_en' => 'required|max:150',
            'description_ar' => 'required|max:1000',
            'description_en' => 'required|max:1000',
        ];
    }

    public function messages()
    {
        return [
            'title_ar.required' => __('validation.title_ar_required'),
            'title_ar.max' => __('validation.title_ar_max'),
            'title_en.required' => __('validation.title_en_required'),
            'title_en.max' => __('validation.title_en_max'),
            'description_ar.required' => __('validation.description_ar_required'),
            'description_ar.max' => __('validation.description_ar_required'),
            'description_en.required' => __('validation.description_en_required'),
            'description_en.max' => __('validation.description_en_required'),
        ];
    }
}
