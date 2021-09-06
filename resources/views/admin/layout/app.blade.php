<!DOCTYPE html>
@php
    $lang_dir=get_direction();
@endphp
<html lang="en" direction="{{$lang_dir}}" style="direction: {{$lang_dir}}">

<!-- begin::Head -->
<head>
    <base href="">
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="description" content="Updates and statistics">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--begin::Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">

    <!--end::Fonts -->

    <!--begin::Page Vendors Styles(used by this page) -->
    <link href="{{app_asset('backend/plugins/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css" />

    <!--end::Page Vendors Styles -->

    <!--begin::Global Theme Styles(used by all pages) -->
    <link href="{{app_asset('backend/plugins/global/plugins.bundle.'.$lang_dir.'.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{app_asset('backend/css/style.bundle.'.$lang_dir.'.css')}}" rel="stylesheet" type="text/css" />

    <!--end::Global Theme Styles -->

    <!--begin::Layout Skins(used by all pages) -->
    <link href="{{app_asset('backend/css/skins/header/base/light.'.$lang_dir.'.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{app_asset('backend/css/skins/header/menu/light.'.$lang_dir.'.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{app_asset('backend/css/skins/brand/dark.'.$lang_dir.'.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{app_asset('backend/css/skins/aside/dark.'.$lang_dir.'.css')}}" rel="stylesheet" type="text/css" />
    @yield('page_styles')

    <link href="{{app_asset('backend/css/custom.css?v=').uniqid()}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <!--end::Layout Skins -->
    <link rel="shortcut icon" href="" />
</head>

<!-- end::Head -->

<!-- begin::Body -->
<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">

<!-- begin:: Page -->

<!-- begin:: Header Mobile -->
<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
    <div class="kt-header-mobile__logo">
        <a href="">
            <img alt="Logo" src="assets/media/logos/logo-light.png" />
        </a>
    </div>
    <div class="kt-header-mobile__toolbar">
        <button class="kt-header-mobile__toggler kt-header-mobile__toggler--left" id="kt_aside_mobile_toggler"><span></span></button>
        <button class="kt-header-mobile__toggler" id="kt_header_mobile_toggler"><span></span></button>
        <button class="kt-header-mobile__topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more"></i></button>
    </div>
</div>

<!-- end:: Header Mobile -->
<div class="kt-grid kt-grid--hor kt-grid--root">
    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">

        <!-- begin:: Aside -->

    @include('admin.layout.aside')

    <!-- end:: Aside -->

        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

            <!-- begin:: Header -->
        @include('admin.layout.header')

        <!-- end:: Header -->
        @yield('content')

        <!-- begin:: Footer -->
            <div class="kt-footer  kt-grid__item kt-grid kt-grid--desktop kt-grid--ver-desktop" id="kt_footer">
                <div class="kt-container  kt-container--fluid ">
                    <div class="kt-footer__copyright">
                        2021&nbsp;&copy;&nbsp;<a href="" target="_blank" class="kt-link">{{app('settings')->get('app_name_'.get_admin_locale())}}</a>
                    </div>
                    <div class="kt-footer__menu">
                    </div>
                </div>
            </div>

            <!-- end:: Footer -->
        </div>
    </div>
</div>

<!-- end:: Page -->

<!-- begin::Quick Panel -->

<!-- end::Quick Panel -->

<!-- begin::Scrolltop -->
<div id="kt_scrolltop" class="kt-scrolltop">
    <i class="fa fa-arrow-up"></i>
</div>


<!-- begin::Demo Panel -->

<!-- end::Demo Panel -->

<!--Begin:: Chat-->

<!--ENd:: Chat-->

<!-- begin::Global Config(global config for global JS sciprts) -->
<script>
    var KTAppOptions = {
        "colors": {
            "state": {
                "brand": "#5d78ff",
                "dark": "#282a3c",
                "light": "#ffffff",
                "primary": "#5867dd",
                "success": "#34bfa3",
                "info": "#36a3f7",
                "warning": "#ffb822",
                "danger": "#fd3995"
            },
            "base": {
                "label": [
                    "#c5cbe3",
                    "#a1a8c3",
                    "#3d4465",
                    "#3e4466"
                ],
                "shape": [
                    "#f0f3ff",
                    "#d9dffa",
                    "#afb4d4",
                    "#646c9a"
                ]
            }
        }
    };
</script>

<!-- end::Global Config -->

<!--begin::Global Theme Bundle(used by all pages) -->
<script src="{{app_asset('backend/plugins/global/plugins.bundle.js')}}" type="text/javascript"></script>
<script src="{{app_asset('backend/js/scripts.bundle.js')}}" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<!--end::Global Theme Bundle -->

<!--begin::Page Vendors(used by this page) -->
<script src="{{app_asset('backend/plugins/custom/fullcalendar/fullcalendar.bundle.js')}}" type="text/javascript"></script>
{{--<script src="//maps.google.com/maps/api/js?key=AIzaSyBTGnKT7dt597vo9QgeQ7BFhvSRP4eiMSM" type="text/javascript"></script>--}}
{{--<script src="{{app_asset('assets/plugins/custom/gmaps/gmaps.js')}}" type="text/javascript"></script>--}}
<script src="{{app_asset('backend/js/app.main.js')}}" type="text/javascript"></script>
<script type="text/javascript">
        @if(Session::has('message'))
    var type="{{Session::get('alert-type','info')}}"


    switch(type){
        case 'info':
            toastr.info("{{Session::get('message') }}");
            break;
        case 'success':
            toastr.success("{{Session::get('message') }}");
            break;
        case 'warning':
            toastr.warning("{{Session::get('message') }}");
            break;
        case 'error':
            toastr.error("{{Session::get('message') }}");
            break;
    }
    @endif
</script>
<script type="text/javascript">
    $.ajaxSetup({
        statusCode: {
            403: function () {

            },
            401: function () {
                location.href = '{{route('admin.logout')}}';
            },
            422: function (jqXhr) {
                var errors = [];
                if(jqXhr.responseJSON.errors) {
                    errors = jqXhr.responseJSON.errors;
                } else if(jqXhr.responseJSON.data != null) {
                    errors = jqXhr.responseJSON.data.errors;
                }
                $.each(errors,function(k,v){
                    let element = $('#'+k);
                    if(k == 'g-recaptcha-response') {
                        notify({text:v,type:'d'},'html',$('#captcha-result-msg'));
                    } else if(k == 'mobile') {
                        $('body #'+k).addClass('is-invalid');
                        $('#invalid-feedback-mobile').show().find("strong").html(v);
                    } else if(element.is('select')) {
                        $('body #_'+k+'_').addClass('is-invalid');
                        $('#invalid-feedback-_'+k+'_').show().find("strong").html(v);
                    } else {
                        $('body #'+k).addClass('is-invalid');
                        $('body #'+k).next('.invalid-feedback').show().find("strong").html(v);
                    }
                });
            },
            400: function () {
                alert('error 400');
            },
            429: function() {

            }
        },
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        }
    });

    var configs = {
        baseUrl: '{{app_url('/admin')}}',
        siteUrl: '{{app_url('/')}}'
    };

    $(document).ready(function () {
        var path = window.location.href;
        $('.kt-aside-menu .kt-menu__item a').filter(function () {
            return this.href == path;
        }).parent().addClass('kt-menu__item--active');

        $('.kt-aside-menu .kt-menu__item').filter(function () {
            return $('a', this).attr('href') === path;
        }).closest('.kt-menu__item--submenu').addClass('kt-menu__item--open');
    });
</script>
<!--end::Page Vendors -->

<!--begin::Page Scripts(used by this page) -->

@yield('page_scripts')

<!--end::Page Scripts -->
</body>

<!-- end::Body -->
</html>
