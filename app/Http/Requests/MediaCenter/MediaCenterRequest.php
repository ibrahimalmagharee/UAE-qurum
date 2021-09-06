<?php

namespace App\Http\Requests\MediaCenter;

use Illuminate\Foundation\Http\FormRequest;

class MediaCenterRequest extends FormRequest
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
            'image1' => 'required_without:id|image|mimes:png,jpg,jpeg,PNG,JPG,JPEG|max:8140',
            'image2' => 'required_without:id|image|mimes:png,jpg,jpeg,PNG,JPG,JPEG|max:8140',
            'image3' => 'required_without:id|image|mimes:png,jpg,jpeg,PNG,JPG,JPEG|max:8140',
            'image4' => 'required_without:id|image|mimes:png,jpg,jpeg,PNG,JPG,JPEG|max:8140',
            'image5' => 'required_without:id|image|mimes:png,jpg,jpeg,PNG,JPG,JPEG|max:8140',
            'image_video_cover' => 'required_without:id|image|mimes:png,jpg,jpeg,PNG,JPG,JPEG|max:8140',
            //'video' => 'nullable|mimes:mp4,ogx,oga,ogv,ogg,webm',
        ];
    }

    public function messages()
    {
        return [
            'image1.required_without' =>  __('validation.image_required_without'),
            'image1.mimes' =>  __('validation.image_mimes'),
            'image1.max' =>  __('validation.image_max'),
            'image2.required_without' =>  __('validation.image_required_without'),
            'image2.mimes' =>  __('validation.image_mimes'),
            'image2.max' =>  __('validation.image_max'),
            'image3.required_without' =>  __('validation.image_required_without'),
            'image3.mimes' =>  __('validation.image_mimes'),
            'image3.max' =>  __('validation.image_max'),
            'image4.required_without' =>  __('validation.image_required_without'),
            'image4.mimes' =>  __('validation.image_mimes'),
            'image4.max' =>  __('validation.image_max'),
            'image5.required_without' =>  __('validation.image_required_without'),
            'image5.mimes' =>  __('validation.image_mimes'),
            'image5.max' =>  __('validation.image_max'),
            'image_video_cover.required_without' =>  __('validation.image_required_without'),
            'image_video_cover.mimes' =>  __('validation.image_mimes'),
            'image_video_cover.max' =>  __('validation.image_max'),
            'video.mimes' =>  __('validation.video_mimes'),
        ];
    }
}
