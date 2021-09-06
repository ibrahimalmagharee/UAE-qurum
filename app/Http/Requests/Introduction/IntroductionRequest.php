<?php

namespace App\Http\Requests\Introduction;

use Illuminate\Foundation\Http\FormRequest;

class IntroductionRequest extends FormRequest
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
            'image' => 'nullable|image|mimes:png,jpg,jpeg,PNG,JPG,JPEG|max:8140',
            //'video' => 'nullable|mimes:mp4,ogx,oga,ogv,ogg,webm',
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
            'image.mimes' =>  __('validation.image_mimes'),
            'image.max' =>  __('validation.image_max'),
            'video.mimes' =>  __('validation.video_mimes'),
        ];
    }
}
