@extends('admin.layout.app')

@section('title',app('settings')->get('app_name_'.get_admin_locale()) . ' - '. __('labels.nav_menu.goals'))

@section('page_styles')
    <link href="{{app_asset('backend/plugins/summernote/summernote.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

        <!-- begin:: Content Head -->
        <div class="kt-subheader  kt-grid__item" id="kt_subheader">
            <div class="kt-container  kt-container--fluid ">
                <div class="kt-subheader__main">
                    <h3 class="kt-subheader__title">@lang('labels.nav_menu.goals') </h3>
                    <span class="kt-subheader__separator kt-subheader__separator--v"></span>
                    <span class="kt-subheader__desc">@lang('admin.labels.add_new_goal')</span>
                </div>
            </div>
        </div>

        <!-- end:: Content Head -->

        <!-- begin:: Content -->
        <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

            <div class="kt-portlet kt-portlet--mobile">
                <div class="kt-portlet__body kt-portlet__body--fit">

                    <!--begin: Datatable -->
                    <div id="result-message"></div>
                    <div class="kt-portlet">
                        <div class="kt-portlet__head">
                            <div class="kt-portlet__head-label">
                                <h3 class="kt-portlet__head-title">
                                </h3>
                            </div>
                        </div>
                        <div class="kt-portlet__body">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @if(session()->has('alert-success'))
                                <div class="alert alert-success">{{session()->get('alert-success')}}</div>
                            @endif
                            <form id="form-create-static_page" action="{{route_url('admin.program_goal.store')}}" method="post" class="kt-form" enctype="multipart/form-data">
                                @csrf
                                <div class="kt-form kt-form--label-right">
                                    <div class="kt-form__body">
                                        <div class="kt-section kt-section--first">
                                            <div class="kt-section__body">
                                                <div class="row">
                                                    <label class="col-xl-3"></label>
                                                    <div class="col-lg-9 col-xl-6"></div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="example-text-input" class="col-xl-2 col-lg-2 col-form-label">@lang('admin.labels.title_ar') </label>
                                                    <div class="col-lg-6 col-xl-6">
                                                        <input type="text" name="title_ar" id="title_ar" class="form-control">
                                                        <span class="invalid-feedback" role="alert"><strong></strong></span>
                                                        @error('title_ar')
                                                        <span class="form-text text-muted"></span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="example-text-input" class="col-xl-2 col-lg-2 col-form-label">@lang('admin.labels.title_en') </label>
                                                    <div class="col-lg-6 col-xl-6">
                                                        <input type="text" name="title_en" id="title_en" class="form-control">
                                                        <span class="invalid-feedback" role="alert"><strong></strong></span>
                                                        @error('title_en')
                                                        <span class="form-text text-muted"></span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="example-text-input" class="col-xl-2 col-lg-2 col-form-label">@lang('admin.labels.description1_ar') </label>
                                                    <div class="col-lg-6 col-xl-6">
                                                        <textarea name="description1_ar" cols="38" rows="6">{!! old('description1_ar') !!}</textarea>
{{--                                                        <div id="description1_ar">{!! old('description1_ar') !!}</div>--}}
                                                        @error('description1_ar')
                                                        <span class="form-text text-muted"></span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="example-text-input" class="col-xl-2 col-lg-2 col-form-label">@lang('admin.labels.description1_en') </label>
                                                    <div class="col-lg-6 col-xl-6">
                                                        <textarea name="description1_en" cols="38" rows="6">{!! old('description1_en') !!}</textarea>
{{--                                                        <div id="description1_en">{!! old('description1_en') !!}</div>--}}
                                                        @error('description1_en')
                                                        <span class="form-text text-muted"></span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="example-text-input" class="col-xl-2 col-lg-2 col-form-label">@lang('admin.labels.description2_ar') </label>
                                                    <div class="col-lg-6 col-xl-6">
                                                        <textarea name="description2_ar" cols="38" rows="6">{!! old('description2_ar') !!}</textarea>
{{--                                                        <div id="description2_ar">{!! old('description2_ar') !!}</div>--}}
                                                        @error('description2_ar')
                                                        <span class="form-text text-muted"></span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="example-text-input" class="col-xl-2 col-lg-2 col-form-label">@lang('admin.labels.description2_en') </label>
                                                    <div class="col-lg-6 col-xl-6">
                                                        <textarea name="description2_en" cols="38" rows="6">{!! old('description2_en') !!}</textarea>
{{--                                                        <div id="description2_en">{!! old('description2_en') !!}</div>--}}
                                                        @error('description2_en')
                                                        <span class="form-text text-muted"></span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="example-text-input" class="col-xl-2 col-lg-2 col-form-label">@lang('admin.labels.description3_ar') </label>
                                                    <div class="col-lg-6 col-xl-6">
                                                        <textarea name="description3_ar" cols="38" rows="6">{!! old('description3_ar') !!}</textarea>
{{--                                                        <div id="description3_ar">{!! old('description3_ar') !!}</div>--}}
                                                        @error('description3_ar')
                                                        <span class="form-text text-muted"></span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="example-text-input" class="col-xl-2 col-lg-2 col-form-label">@lang('admin.labels.description3_en') </label>
                                                    <div class="col-lg-6 col-xl-6">
                                                        <textarea name="description3_en" cols="38" rows="6">{!! old('description3_en') !!}</textarea>
{{--                                                        <div id="description3_en">{!! old('description3_en') !!}</div>--}}
                                                        @error('description3_en')
                                                        <span class="form-text text-muted"></span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="example-text-input" class="col-xl-2 col-lg-2 col-form-label">@lang('admin.labels.description4_ar') </label>
                                                    <div class="col-lg-6 col-xl-6">
                                                        <textarea name="description4_ar" cols="38" rows="6">{!! old('description4_ar') !!}</textarea>
{{--                                                        <div id="description4_ar">{!! old('description4_ar') !!}</div>--}}
                                                        @error('description4_ar')
                                                        <span class="form-text text-muted"></span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="example-text-input" class="col-xl-2 col-lg-2 col-form-label">@lang('admin.labels.description4_en') </label>
                                                    <div class="col-lg-6 col-xl-6">
                                                        <textarea name="description4_en" cols="38" rows="6">{!! old('description4_en') !!}</textarea>
{{--                                                        <div id="description4_en">{!! old('description4_en') !!}</div>--}}
                                                        @error('description4_en')
                                                        <span class="form-text text-muted"></span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="example-text-input" class="col-xl-2 col-lg-2 col-form-label">@lang('admin.labels.description5_ar') </label>
                                                    <div class="col-lg-6 col-xl-6">
                                                        <textarea name="description5_ar" cols="38" rows="6">{!! old('description5_ar') !!}</textarea>
{{--                                                        <div id="description5_ar">{!! old('description5_ar') !!}</div>--}}
                                                        @error('description5_ar')
                                                        <span class="form-text text-muted"></span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="example-text-input" class="col-xl-2 col-lg-2 col-form-label">@lang('admin.labels.description5_en') </label>
                                                    <div class="col-lg-6 col-xl-6">
                                                        <textarea name="description5_en" cols="38" rows="6">{!! old('description5_en') !!}</textarea>
{{--                                                        <div id="description5_en">{!! old('description5_en') !!}</div>--}}
                                                        @error('description5_en')
                                                        <span class="form-text text-muted"></span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <br>
                                                <div class="form-group row">
                                                    <label class="col-xl-2 col-lg-2 col-form-label"></label>
                                                    <div class="col-lg-6 col-xl-6">
                                                        <button type="submit" id="btn-create-static_page" class="btn btn-brand"> @lang('admin.labels.save') </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('page_scripts')
    <script src="{{app_asset('backend/plugins/summernote/summernote-bs4.min.js')}}" type="text/javascript"></script>
    <script>
        var avatar1 = new KTAvatar('kt_user_avatar_2');


        // $('#description1_ar').summernote({
        //     height: 350,
        //     minHeight: 350,
        //     maxHeight: 350
        // });
        //
        // $('#description1_en').summernote({
        //     height: 350,
        //     minHeight: 350,
        //     maxHeight: 350
        // });
        //
        // $('#description2_ar').summernote({
        //     height: 350,
        //     minHeight: 350,
        //     maxHeight: 350
        // });
        //
        // $('#description2_en').summernote({
        //     height: 350,
        //     minHeight: 350,
        //     maxHeight: 350
        // });
        //
        // $('#description3_ar').summernote({
        //     height: 350,
        //     minHeight: 350,
        //     maxHeight: 350
        // });
        //
        // $('#description3_en').summernote({
        //     height: 350,
        //     minHeight: 350,
        //     maxHeight: 350
        // });
        //
        // $('#description4_ar').summernote({
        //     height: 350,
        //     minHeight: 350,
        //     maxHeight: 350
        // });
        //
        // $('#description4_en').summernote({
        //     height: 350,
        //     minHeight: 350,
        //     maxHeight: 350
        // });
        //
        // $('#description5_ar').summernote({
        //     height: 350,
        //     minHeight: 350,
        //     maxHeight: 350
        // });
        //
        // $('#description5_en').summernote({
        //     height: 350,
        //     minHeight: 350,
        //     maxHeight: 350
        // });


        $('#form-create-static_page').submit(function (e) {
            e.preventDefault();

            let formData = getFormData($(this));
            let actionUrl = $(this).attr('action');

            // formData.append('description1_ar',$('#description1_ar').summernote('code'));
            // formData.append('description1_en',$('#description1_en').summernote('code'));
            //
            // formData.append('description2_ar',$('#description2_ar').summernote('code'));
            // formData.append('description2_en',$('#description2_en').summernote('code'));
            //
            // formData.append('description3_ar',$('#description3_ar').summernote('code'));
            // formData.append('description3_en',$('#description3_en').summernote('code'));
            //
            // formData.append('description4_ar',$('#description4_ar').summernote('code'));
            // formData.append('description4_en',$('#description4_en').summernote('code'));
            //
            // formData.append('description5_ar',$('#description5_ar').summernote('code'));
            // formData.append('description5_en',$('#description5_en').summernote('code'));

            $btn = $('#btn-create-static_page');

            $.ajax({
                url: actionUrl,
                type: "POST",
                contentType:false,
                cache:false,
                processData:false,
                data: formData,
                beforeSend: function() {
                    disableAndLoadingButton($btn,"@lang('admin.labels.saving')");
                },
                success: function(response) {
                    enableAndLoadingButton($btn,"@lang('admin.labels.save')");
                    if(response.status === true) {
                        notify({text:response.message,type:'s'},'html',$('#result-message'));
                        scrollTop();
                        setTimeout(function(){location.href = response.redirect_url},1500);
                    } else {
                        $('#result-message').html(errorMessage(response.message));
                        scrollTop();
                    }
                },
                error: function(response) {
                    enableAndLoadingButton($btn,"@lang('admin.labels.save')");
                    scrollTop();
                    let msgType = response.responseJSON.status ? 's' : 'd';
                    $('#result-message').html(errorAlertMessages(response.responseJSON.errors));
                }
            });

        });


    </script>
@endsection
