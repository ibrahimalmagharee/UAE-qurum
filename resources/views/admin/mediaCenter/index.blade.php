@extends('admin.layout.app')


@section('title',app('settings')->get('app_name_'.get_admin_locale()) . ' - '. __('labels.nav_menu.media_center'))

@section('content')

    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

        <!-- begin:: Content Head -->
        <div class="kt-subheader kt-grid__item" id="kt_subheader">
            <div class="kt-container kt-container--fluid">
                <div class="kt-subheader__main">
                    <h3 class="kt-subheader__title">@lang('labels.nav_menu.media_center')</h3>
                    <span class="kt-subheader__separator kt-hidden"></span>
                </div>
                <div class="kt-subheader__toolbar">
                    <div class="kt-subheader__wrapper @if(\App\Models\MediaCenter::count() > 0) d-none @endif">
                        <a href="{{route_url('admin.media_center.create')}}" class="btn btn-success">
                            <i class="fa fa-plus-circle"></i> @lang('admin.labels.add_new_media')
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- end:: Content Head -->

        <!-- begin:: Content -->
        <div class="kt-container kt-container--fluid kt-grid__item kt-grid__item--fluid">

            <div class="kt-portlet kt-portlet--mobile">
                <div class="kt-portlet__body">

                    <!--begin: Search Form -->
                    <div class="kt-form kt-form--label-right kt-margin-b-10">
                        <div class="row align-items-center">
                            <div class="col-xl-12 order-2 order-xl-1">
                                <div class="row align-items-center">
                                    <div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
                                        <div class="kt-input-icon kt-input-icon--left">
                                            <input type="text" class="form-control" placeholder="@lang('admin.labels.save')..." id="generalSearch">
                                            <span class="kt-input-icon__icon kt-input-icon__icon--left">
                                                <span><i class="la la-search"></i></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--end: Search Form -->
                </div>
                <div class="kt-portlet__body kt-portlet__body--fit">

                    <div class="kt-datatable" id="media_center_datatable"></div>

                </div>
            </div>
        </div>

        <!-- end:: Content -->
    </div>

    <div class="modal fade" id="delete-media_center-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">@lang('admin.labels.confirmation_msg')</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    @lang('admin.labels.confirmation_msg_text')
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('admin.labels.cancel')</button>
                    <button type="button" id="btn-confirm-delete" class="btn btn-danger">@lang('admin.labels.yes_delete')</button>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('page_scripts')
    <script>
        var labels = {
            image1: '@lang('admin.labels.image1')',
            image2: '@lang('admin.labels.image2')',
            image3: '@lang('admin.labels.image3')',
            image4: '@lang('admin.labels.image4')',
            image5: '@lang('admin.labels.image5')',
            image_video_cover: '@lang('admin.labels.image_video_cover')',
            actions: '@lang('admin.labels.actions')',
        };
    </script>
    <script src="{{app_asset('backend/js/datatables/media_center/datatable.js?v=').uniqid()}}"></script>
    <script>
        $('.bootstrap-select').selectpicker();

        $(document).on('click','.btn-delete-media_center',function (e) {
            e.preventDefault();
            $('#delete-media_center-modal').modal('show');
            var deleteUrl = $(this).attr('href');
            var pid = $(this).attr('data-id');
            $('#delete-media_center-modal #btn-confirm-delete').attr('data-url',deleteUrl).attr('data-id',pid);
        });

        $('#btn-confirm-delete').click(function(){

            var deleteUrl = $(this).attr('data-url');
            var pid = $(this).attr('data-id');

            $('#btn-confirm-delete').attr('disabled',true).html('<div class="fa fa-spinner fa-spin"></div>  ..'+"@lang('admin.labels.deleting')");

            $.ajax({
                url: deleteUrl,
                type: "DELETE",
                data: {_token: $('meta[name="csrf-token"]').attr('content')},
                success: function(response) {
                    $('#btn-confirm-delete').attr('disabled',false).html("@lang('admin.labels.yes_delete')");
                    if(response.status) {
                        $('#delete-media_center-modal').modal('hide');
                        $('body #btn-delete-media_center-'+pid).closest('tr').css('background', '#f34343').delay(1000).hide(1000);
                    }
                }
            });

        });

    </script>
@endsection