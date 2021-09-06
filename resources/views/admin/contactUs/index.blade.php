@extends('admin.layout.app')


@section('title',app('settings')->get('app_name_'.get_admin_locale()) . ' - '. __('admin.aside.contact_messages'))

@section('content')

    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

        <!-- begin:: Content Head -->
        <div class="kt-subheader kt-grid__item" id="kt_subheader">
            <div class="kt-container kt-container--fluid">
                <div class="kt-subheader__main">
                    <h3 class="kt-subheader__title">@lang('admin.aside.contact_messages')</h3>
                    <span class="kt-subheader__separator kt-hidden"></span>
                </div>
                <div class="kt-subheader__toolbar">

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

                    <div class="kt-datatable" id="contact_us_page_datatable"></div>

                </div>
            </div>
        </div>
        <div class="modal fade" id="show-c-message-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">@lang('admin.labels.msg_details')</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="kt-widget16">
                            <div class="kt-widget16__items">
                                <div class="kt-widget16__item">
                                <span class="kt-widget16__sceduled">
                                    @lang('admin.labels.first_name')
                                </span>
                                    <span id="first_name" class="kt-widget16__amount"></span>
                                </div>
                                <div class="kt-widget16__item">
                                <span class="kt-widget16__sceduled">
                                    @lang('admin.labels.last_name')
                                </span>
                                    <span id="last_name" class="kt-widget16__amount"></span>
                                </div>
                                <div class="kt-widget16__item">
                                <span class="kt-widget16__sceduled">
                                   @lang('admin.labels.phone')
                                </span>
                                    <span id="phone" class="kt-widget16__amount"></span>
                                </div>
                                <div class="kt-widget16__item">
                                <span class="kt-widget16__sceduled">
                                   @lang('admin.labels.email')
                                </span>
                                    <span id="email" class="kt-widget16__amount"></span>
                                </div>
                                <div class="kt-widget16__item">
                                <span class="kt-widget16__sceduled">
                                    @lang('admin.labels.message')
                                </span>
                                    <span id="message" class="kt-widget16__amount"></span>
                                </div>

{{--                                <div class="kt-widget16__item">--}}
{{--                                <span class="kt-widget16__sceduled">--}}
{{--                                     @lang('admin.labels.sent_at')--}}
{{--                                </span>--}}
{{--                                    <code id="msg_date" class="kt-widget16__amount">--}}
{{--                                    </code>--}}
{{--                                </div>--}}
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('admin.labels.close')</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- end:: Content -->
    </div>


@endsection


@section('page_scripts')
    <script>
        var labels = {
            first_name: '@lang('admin.labels.first_name')',
            last_name: '@lang('admin.labels.last_name')',
            phone: '@lang('admin.labels.phone')',
            email: '@lang('admin.labels.email')',
            message: '@lang('admin.labels.message')',
            actions: '@lang('admin.labels.actions')',
        };
    </script>
    <script src="{{app_asset('backend/js/datatables/contact_us/datatable.js?v=').uniqid()}}"></script>

    <script>
        $("#seen_by_admin").selectpicker();

        $(document).on('click','.btn-show-c-message',function(e){
            e.preventDefault();
            $btn = $(this);
            $btn.html('<div class="fa fa-spinner fa-spin"></div>');
            let actionUrl = $(this).attr('href');
            $.get(actionUrl,function (response) {
                $btn.html('<i class="la la-eye"></i>');
                $('#show-c-message-modal #first_name').html(response.message.first_name);
                $('#show-c-message-modal #last_name').html(response.message.last_name);
                $('#show-c-message-modal #phone').html(response.message.phone);
                $('#show-c-message-modal #email').html(response.message.email);
                $('#show-c-message-modal #message').html(response.message.message);
                // $('#show-c-message-modal #msg_date').html(response.message.created_at);
                $('#show-c-message-modal').modal('show');
            });
        });

    </script>
@endsection
