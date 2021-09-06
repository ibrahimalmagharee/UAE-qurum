@extends('admin.layout.app')

@section('title',app('settings')->get('app_name_'.get_admin_locale()) . ' - '. __('labels.nav_menu.logo'))

@section('page_styles')
    <link href="{{app_asset('backend/plugins/summernote/summernote.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

        <!-- begin:: Content Head -->
        <div class="kt-subheader  kt-grid__item" id="kt_subheader">
            <div class="kt-container  kt-container--fluid ">
                <div class="kt-subheader__main">
                    <h3 class="kt-subheader__title">@lang('labels.nav_menu.logo') </h3>
                    <span class="kt-subheader__separator kt-subheader__separator--v"></span>
                    <span class="kt-subheader__desc"></span>
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
                            <form id="form-create-static_page" action="{{route_url('admin.logo.update')}}" method="post" class="kt-form" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" id="id" name="id" value="{{$logo->id}}">
                                <div class="kt-form kt-form--label-right">
                                    <div class="kt-form__body">
                                        <div class="kt-section kt-section--first">
                                            <div class="kt-section__body">
                                                <div class="row">
                                                    <label class="col-xl-3"></label>
                                                    <div class="col-lg-9 col-xl-6"></div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="example-text-input" class="col-2 col-form-label">@lang('admin.labels.logo')</label>
                                                    <div class="col-lg-4">
                                                        <div class="kt-avatar kt-avatar--outline" id="kt_user_avatar_2">
                                                            <div class="kt-avatar__holder" id="icon_u_" style="background-image: url('{{$logo->logo}}')"></div>
                                                            <label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="@lang('admin.labels.change_icon')">
                                                                <i class="la la-pencil-square"></i>
                                                                <input name="logo" type="file" accept="image/png,image/jpeg,image/jpg" >
                                                            </label>
                                                            <span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="" data-original-title="إلغاء">
                                                            <i class="fa fa-times"></i>
                                                        </span>
                                                            @error('logo')
                                                            <span class="form-text text-danger"> {{ $message }} </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>


                                                <br>
                                                <div class="form-group row">
                                                    <label class="col-xl-2 col-lg-2 col-form-label"></label>
                                                    <div class="col-lg-6 col-xl-6">
                                                        <button type="submit" id="btn-create-static_page" class="btn btn-brand">@lang('admin.labels.save_changes') </button>
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


        $('#form-create-static_page').submit(function (e) {
            e.preventDefault();

            let formData = getFormData($(this));
            let actionUrl = $(this).attr('action');


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
                    enableAndLoadingButton($btn,"@lang('admin.labels.save_changes')");
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
                    enableAndLoadingButton($btn,"@lang('admin.labels.save_changes')");
                    scrollTop();
                    let msgType = response.responseJSON.status ? 's' : 'd';
                    $('#result-message').html(errorAlertMessages(response.responseJSON.errors));
                }
            });

        });


    </script>
@endsection
