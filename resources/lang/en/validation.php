<?php




if (get_admin_locale() == 'en') {
    return [

        'logo_required_without' => 'Logo must be entered',
        'logo_mimes' => 'The image must be in png, jpg, jpeg, PNG, JPG, JPEG format',
        'logo_max' => 'Logo must be logo value less than 8140',
        'name_ar_required' => 'The name must be entered in Arabic',
        'name_ar_max' => 'The name in Arabic must not exceed 100 characters',
        'name_en_required' => 'You must enter the name in English',
        'name_en_max' => 'The name must not exceed in English 100 characters',
        'link_required' => 'The link must be entered',
        'title_ar_required' => 'Title must be entered in Arabic',
        'title_ar_max' => 'The title in Arabic should not exceed 100 characters',
        'title_en_required' => 'The address must be entered in English',
        'title_en_max' => 'The English title must not exceed 100 characters',
        'description_ar_required' => 'Description must be entered in Arabic',
        'description_ar_max' => 'The description in Arabic should not exceed 1000 characters',
        'description_en_required' => 'Description must be entered in English',
        'description_en_max' => 'Description in English must not exceed 1000 characters',
        'image_required_without' => 'Image must be entered',
        'image_mimes' =>  'The image must be in png, jpg, jpeg, PNG, JPG, JPEG format',
        'image_max' =>  'The image size must not exceed 8140 .',
        'video_mimes' =>  'The video must be in mp4, ogx, oga, ogv, ogg, webm format',
        'type_required' => 'The type must be specified',
        'type_in' => 'The type should be a vision or a mission',
        'website_required' => 'Website must be entered',
        'website_max' => 'The website must not exceed 200 characters',
        'phone_required' => 'Phone number must be entered',
        'phone_max' => 'The phone number must not exceed 15 digits',
        'email_required' => 'Email must be entered',
        'email_max' => 'Email must not exceed 100 characters',
        'location_ar_required' => 'You must enter the geographic location in Arabic',
        'location_en_required' => 'You must enter the geographic location in English',
        'location_required' => 'You must enter the geographic location',
        'location_max' => 'The geographical location must not exceed 200 characters',




    ];
} elseif (get_admin_locale() == 'ar') {
    return [

        'logo_required_without' => 'يجب ادخال الشعار',
        'logo_mimes' => 'يجب ان تكون الصورة تحت صيغة png,jpg,jpeg,PNG,JPG,JPEG',
        'logo_max' => 'يجب ان تكون الشعار قيمة الشعار اقل من 8140 ',
        'name_ar_required' => 'يجب ادخال الاسم بالعربي',
        'name_ar_max' => 'يجب ان لا يتجاوز الاسم بالعربي عن 100 حرف',
        'name_en_required' => 'يجب ادخال الاسم English',
        'name_en_max' => 'يجب ان لا يتجاوز الاسم عن English 100 حرف',
        'link_required' => 'يجب ادخال الرابط',
        'title_ar_required' => 'يجب ادخال العنوان بالعربي',
        'title_ar_max' => 'يجب ان لا يتجاوز العنوان بالعربي عن 100 حرف',
        'title_en_required' => 'يجب ادخال العنوان English',
        'title_en_max' => 'يجب ان لا يتجاوز العنوان English عن 100 حرف',
        'description_ar_required' => 'يجب ادخال الوصف بالعربي',
        'description_ar_max' => 'يجب ان لا يتجاوز الوصف بالعربي عن 1000 حرف',
        'description_en_required' => 'يجب ادخال الوصف English',
        'description_en_max' => 'يجب ان لا يتجاوز الوصف English عن 1000 حرف',
        'image_required_without' => 'يجب ادخال الصورة',
        'image_mimes' =>  'يجب ان تكون الصورة تحت صيغة png,jpg,jpeg,PNG,JPG,JPEG',
        'image_max' =>  'يجب ان لا يتجاوز حجم الصورة عن 8140',
        'video_mimes' =>  'يجب ان يكون الفيديو تحت صيغة mp4,ogx,oga,ogv,ogg,webm',
        'type_required' => 'يجب تحديد النوع',
        'type_in' => 'يجب ان يكون النوع رؤية او رسالة',
        'website_required' => 'يجب ادخال الموقع الالكتروني',
        'website_max' => 'يجب ان لا يتجاوز الموقع الالكتروني عن 200 حرف',
        'phone_required' => 'يجب ادخال رقم الهاتف',
        'phone_max' => 'يجب ان لا يتجاوز رقم الهاتف عن 15 رقم',
        'email_required' => 'يجب ادخال البريد الالكتروني',
        'email_max' => 'يجب ان لا يتجاوز البريد الالكتروني عن 100 حرف',
        'location_ar_required' => ' يجب ادخال الموقع الجغرافي بالعربي',
        'location_en_required' => ' يجب ادخال الموقع الجغرافي ب English',
        'location_max' => 'يجب ان لا يتجاوز الموقع الجغرافي عن 200 حرف',



    ];
}

//return [
//
//    /*
//    |--------------------------------------------------------------------------
//    | Validation Language Lines
//    |--------------------------------------------------------------------------
//    |
//    | The following language lines contain the default error messages used by
//    | the validator class. Some of these rules have multiple versions such
//    | as the size rules. Feel free to tweak each of these messages here.
//    |
//    */
//
//    'accepted' => 'The :attribute must be accepted.',
//    'active_url' => 'The :attribute is not a valid URL.',
//    'after' => 'The :attribute must be a date after :date.',
//    'after_or_equal' => 'The :attribute must be a date after or equal to :date.',
//    'alpha' => 'The :attribute must only contain letters.',
//    'alpha_dash' => 'The :attribute must only contain letters, numbers, dashes and underscores.',
//    'alpha_num' => 'The :attribute must only contain letters and numbers.',
//    'array' => 'The :attribute must be an array.',
//    'before' => 'The :attribute must be a date before :date.',
//    'before_or_equal' => 'The :attribute must be a date before or equal to :date.',
//    'between' => [
//        'numeric' => 'The :attribute must be between :min and :max.',
//        'file' => 'The :attribute must be between :min and :max kilobytes.',
//        'string' => 'The :attribute must be between :min and :max characters.',
//        'array' => 'The :attribute must have between :min and :max items.',
//    ],
//    'boolean' => 'The :attribute field must be true or false.',
//    'confirmed' => 'The :attribute confirmation does not match.',
//    'date' => 'The :attribute is not a valid date.',
//    'date_equals' => 'The :attribute must be a date equal to :date.',
//    'date_format' => 'The :attribute does not match the format :format.',
//    'different' => 'The :attribute and :other must be different.',
//    'digits' => 'The :attribute must be :digits digits.',
//    'digits_between' => 'The :attribute must be between :min and :max digits.',
//    'dimensions' => 'The :attribute has invalid image dimensions.',
//    'distinct' => 'The :attribute field has a duplicate value.',
//    'email' => 'The :attribute must be a valid email address.',
//    'ends_with' => 'The :attribute must end with one of the following: :values.',
//    'exists' => 'The selected :attribute is invalid.',
//    'file' => 'The :attribute must be a file.',
//    'filled' => 'The :attribute field must have a value.',
//    'gt' => [
//        'numeric' => 'The :attribute must be greater than :value.',
//        'file' => 'The :attribute must be greater than :value kilobytes.',
//        'string' => 'The :attribute must be greater than :value characters.',
//        'array' => 'The :attribute must have more than :value items.',
//    ],
//    'gte' => [
//        'numeric' => 'The :attribute must be greater than or equal :value.',
//        'file' => 'The :attribute must be greater than or equal :value kilobytes.',
//        'string' => 'The :attribute must be greater than or equal :value characters.',
//        'array' => 'The :attribute must have :value items or more.',
//    ],
//    'image' => 'The :attribute must be an image.',
//    'in' => 'The selected :attribute is invalid.',
//    'in_array' => 'The :attribute field does not exist in :other.',
//    'integer' => 'The :attribute must be an integer.',
//    'ip' => 'The :attribute must be a valid IP address.',
//    'ipv4' => 'The :attribute must be a valid IPv4 address.',
//    'ipv6' => 'The :attribute must be a valid IPv6 address.',
//    'json' => 'The :attribute must be a valid JSON string.',
//    'lt' => [
//        'numeric' => 'The :attribute must be less than :value.',
//        'file' => 'The :attribute must be less than :value kilobytes.',
//        'string' => 'The :attribute must be less than :value characters.',
//        'array' => 'The :attribute must have less than :value items.',
//    ],
//    'lte' => [
//        'numeric' => 'The :attribute must be less than or equal :value.',
//        'file' => 'The :attribute must be less than or equal :value kilobytes.',
//        'string' => 'The :attribute must be less than or equal :value characters.',
//        'array' => 'The :attribute must not have more than :value items.',
//    ],
//    'max' => [
//        'numeric' => 'The :attribute must not be greater than :max.',
//        'file' => 'The :attribute must not be greater than :max kilobytes.',
//        'string' => 'The :attribute must not be greater than :max characters.',
//        'array' => 'The :attribute must not have more than :max items.',
//    ],
//    'mimes' => 'The :attribute must be a file of type: :values.',
//    'mimetypes' => 'The :attribute must be a file of type: :values.',
//    'min' => [
//        'numeric' => 'The :attribute must be at least :min.',
//        'file' => 'The :attribute must be at least :min kilobytes.',
//        'string' => 'The :attribute must be at least :min characters.',
//        'array' => 'The :attribute must have at least :min items.',
//    ],
//    'multiple_of' => 'The :attribute must be a multiple of :value.',
//    'not_in' => 'The selected :attribute is invalid.',
//    'not_regex' => 'The :attribute format is invalid.',
//    'numeric' => 'The :attribute must be a number.',
//    'password' => 'The password is incorrect.',
//    'present' => 'The :attribute field must be present.',
//    'regex' => 'The :attribute format is invalid.',
//    'required' => 'The :attribute field is required.',
//    'required_if' => 'The :attribute field is required when :other is :value.',
//    'required_unless' => 'The :attribute field is required unless :other is in :values.',
//    'required_with' => 'The :attribute field is required when :values is present.',
//    'required_with_all' => 'The :attribute field is required when :values are present.',
//    'required_without' => 'The :attribute field is required when :values is not present.',
//    'required_without_all' => 'The :attribute field is required when none of :values are present.',
//    'prohibited' => 'The :attribute field is prohibited.',
//    'prohibited_if' => 'The :attribute field is prohibited when :other is :value.',
//    'prohibited_unless' => 'The :attribute field is prohibited unless :other is in :values.',
//    'same' => 'The :attribute and :other must match.',
//    'size' => [
//        'numeric' => 'The :attribute must be :size.',
//        'file' => 'The :attribute must be :size kilobytes.',
//        'string' => 'The :attribute must be :size characters.',
//        'array' => 'The :attribute must contain :size items.',
//    ],
//    'starts_with' => 'The :attribute must start with one of the following: :values.',
//    'string' => 'The :attribute must be a string.',
//    'timezone' => 'The :attribute must be a valid zone.',
//    'unique' => 'The :attribute has already been taken.',
//    'uploaded' => 'The :attribute failed to upload.',
//    'url' => 'The :attribute format is invalid.',
//    'uuid' => 'The :attribute must be a valid UUID.',
//
//    /*
//    |--------------------------------------------------------------------------
//    | Custom Validation Language Lines
//    |--------------------------------------------------------------------------
//    |
//    | Here you may specify custom validation messages for attributes using the
//    | convention "attribute.rule" to name the lines. This makes it quick to
//    | specify a specific custom language line for a given attribute rule.
//    |
//    */
//
//    'custom' => [
//        'attribute-name' => [
//            'rule-name' => 'custom-message',
//        ],
//    ],
//
//    /*
//    |--------------------------------------------------------------------------
//    | Custom Validation Attributes
//    |--------------------------------------------------------------------------
//    |
//    | The following language lines are used to swap our attribute placeholder
//    | with something more reader friendly such as "E-Mail Address" instead
//    | of "email". This simply helps us make our message more expressive.
//    |
//    */
//
//    'attributes' => [],
//
//];
