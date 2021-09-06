<?php

namespace App\Http\Requests\ConditionSubscription;

use Illuminate\Foundation\Http\FormRequest;

class ConditionSubscriptionRequest extends FormRequest
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
            'description1_ar' => 'required|max:1000',
            'description1_en' => 'required|max:1000',
            'description2_ar' => 'required|max:1000',
            'description2_en' => 'required|max:1000',
            'description3_ar' => 'required|max:1000',
            'description3_en' => 'required|max:1000',
            'description4_ar' => 'required|max:1000',
            'description4_en' => 'required|max:1000',
        ];
    }

    public function messages()
    {
        return [
            'title_ar.required' => __('validation.title_ar_required'),
            'title_ar.max' => __('validation.title_ar_max'),
            'title_en.required' => __('validation.title_en_required'),
            'title_en.max' => __('validation.title_en_max'),
            'description1_ar.required' => __('validation.description_ar_required'),
            'description1_ar.max' => __('validation.description_ar_required'),
            'description1_en.required' => __('validation.description_en_required'),
            'description1_en.max' => __('validation.description_en_required'),
            'description2_ar.required' => __('validation.description_ar_required'),
            'description2_ar.max' => __('validation.description_ar_required'),
            'description2_en.required' => __('validation.description_en_required'),
            'description2_en.max' => __('validation.description_en_required'),
            'description3_ar.required' => __('validation.description_ar_required'),
            'description3_ar.max' => __('validation.description_ar_required'),
            'description3_en.required' => __('validation.description_en_required'),
            'description3_en.max' => __('validation.description_en_required'),
            'description4_ar.required' => __('validation.description_ar_required'),
            'description4_ar.max' => __('validation.description_ar_required'),
            'description4_en.required' => __('validation.description_en_required'),
            'description4_en.max' => __('validation.description_en_required'),
        ];
    }
}
