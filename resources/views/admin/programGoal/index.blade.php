@extends('admin.layout.app')


@section('title',app('settings')->get('app_name_'.get_admin_locale()) . ' - '. __('labels.nav_menu.goals'))

@section('content')

    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

        <!-- begin:: Content Head -->
        <div class="kt-subheader kt-grid__item" id="kt_subheader">
            <div class="kt-container kt-container--fluid">
                <div class="kt-subheader__main">
                    <h3 class="kt-subheader__title">@lang('labels.nav_menu.goals')</h3>
                    <span class="kt-subheader__separator kt-hidden"></span>
                </div>
                <div class="kt-subheader__toolbar">
                    <div class="kt-subheader__wrapper @if(\App\Models\ProgramGoal::count() > 0) d-none @endif">
                        <a href="{{route_url('admin.program_goal.create')}}" class="btn btn-success">
                            <i class="fa fa-plus-circle"></i> @lang('admin.labels.add_new_goal')
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

                    <div class="kt-datatable" id="program_goal_datatable"></div>

                </div>
            </div>
        </div>

        <!-- end:: Content -->
    </div>

    <div class="modal fade" id="delete-program_goal-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
            title_ar: '@lang('admin.labels.title_ar')',
            title_en: '@lang('admin.labels.title_en')',
            description1_ar: '@lang('admin.labels.description1_ar')',
            description1_en: '@lang('admin.labels.description1_en')',
            description2_ar: '@lang('admin.labels.description2_ar')',
            description2_en: '@lang('admin.labels.description2_en')',
            description3_ar: '@lang('admin.labels.description3_ar')',
            description3_en: '@lang('admin.labels.description3_en')',
            description4_ar: '@lang('admin.labels.description4_ar')',
            description4_en: '@lang('admin.labels.description4_en')',
            description5_ar: '@lang('admin.labels.description5_ar')',
            description5_en: '@lang('admin.labels.description5_en')',
            actions: '@lang('admin.labels.actions')',
        };
    </script>
    <script src="{{app_asset('backend/js/datatables/program_goal/datatable.js?v=').uniqid()}}"></script>
    <script>
        $('.bootstrap-select').selectpicker();

        $(document).on('click','.btn-delete-program_goal',function (e) {
            e.preventDefault();
            $('#delete-program_goal-modal').modal('show');
            var deleteUrl = $(this).attr('href');
            var pid = $(this).attr('data-id');
            $('#delete-program_goal-modal #btn-confirm-delete').attr('data-url',deleteUrl).attr('data-id',pid);
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
                        $('#delete-program_goal-modal').modal('hide');
                        $('body #btn-delete-program_goal-'+pid).closest('tr').css('background', '#f34343').delay(1000).hide(1000);
                    }
                }
            });

        });

    </script>
@endsection
