<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>

    <base href="">

    <!--end::Base Path -->
    <meta charset="utf-8" />
    <title> {{app('settings')->get('app_name_'.get_admin_locale())}}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{csrf_token()}}">

    <!--begin::Fonts -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!--end::Fonts -->

    <!--begin::Page Custom Styles(used by this page) -->
    <link href="{{app_asset('backend/css/pages/login/login-4.css')}}" rel="stylesheet" type="text/css" />

    <!--end::Page Custom Styles -->

    <!--begin::Global Theme Styles(used by all pages) -->
    <link href="{{app_asset('backend/plugins/global/plugins.bundle.rtl.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{app_asset('backend/css/style.bundle.rtl.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{app_asset('backend/css/custom.css')}}" rel="stylesheet" type="text/css" />

    <!--end::Global Theme Styles -->

    <!--begin::Layout Skins(used by all pages) -->
    <link href="{{app_asset('backend/css/skins/header/base/light.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{app_asset('backend/css/skins/header/menu/light.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{app_asset('backend/css/skins/brand/dark.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{app_asset('backend/css/skins/aside/dark.css')}}" rel="stylesheet" type="text/css" />

    <!--end::Layout Skins -->
    <link rel="shortcut icon" href="" />
</head>

<!-- end::Head -->

<!-- begin::Body -->
<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">

<!-- begin:: Page -->
<div class="kt-grid kt-grid--ver kt-grid--root">
    <div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v4 kt-login--signin" id="kt_login">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" style="background-image: url({{app_asset('backend/media/bg/4.jpeg')}});background-repeat: no-repeat;">
            <div class="kt-grid__item kt-grid__item--fluid kt-login__wrapper" style="background-color:#6ab91c82; border-radius:30px;margin-bottom:0px;height:500px" >
                <div class="kt-login__container">
                    <div class="kt-login__logo">
                        <a href="#">
                            <img style="width:30px;" src="{{app_asset('media/logo/'.app('settings')->get('footer_logo'))}}">
                        </a>
                    </div>
                    <div class="kt-login__signin">
                        <div class="kt-login__head" >
                            <h3 class="kt-login__title" style="color:#fff">{{app('settings')->get('app_name_'.get_admin_locale())}} | لوحة التحكم</h3>
                        </div>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul >
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form class="kt-form" action="{{route_url('admin.login')}}" method="post">
                            @csrf
                            <div class="input-group">
                                <input class="form-control" style="background-color:#fff" type="text" placeholder="البريد الإلكتروني" name="email" autocomplete="off">
                            </div>
                            <div class="input-group">
                                <input class="form-control" style="background-color:#fff" type="password" placeholder="كلمة المرور" name="password">
                            </div>
                            <div class="row kt-login__extra">
                            </div>
                            <div class="kt-login__actions">
                                <button type="submit" style="margin-top:-50px;background-color:#10c43b;border-color:#10c43b;" class="btn btn-brand btn-pill kt-login__btn-primary">تسجيل الدخول</button>
                            </div>
                        </form>
                    </div>
                    <div class="kt-login__forgot">
                        <div class="kt-login__head">
                            <h3 class="kt-login__title">نسيت كلمة المرور؟</h3>
                            <div class="kt-login__desc">أدخل البريد الإلكتروني الخاص بك من أجل استعادة كلمة المرور</div>
                        </div>
                        <form class="kt-form" action="">
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="البريد الإلكتروني" name="email" id="kt_email" autocomplete="off">
                            </div>
                            <div class="kt-login__actions">
                                <button id="kt_login_forgot_submit" class="btn btn-brand btn-pill kt-login__btn-primary">Request</button>&nbsp;&nbsp;
                                <button id="kt_login_forgot_cancel" class="btn btn-secondary btn-pill kt-login__btn-secondary">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- end:: Page -->

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
                "label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
                "shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
            }
        }
    };
</script>

<!-- end::Global Config -->

<!--begin:: Global Mandatory Vendors -->
<script src="{{app_asset('backend/vendors/general/jquery/dist/jquery.js')}}" type="text/javascript"></script>
<script src="{{app_asset('backend/vendors/general/popper.js/dist/umd/popper.js')}}" type="text/javascript"></script>
<script src="{{app_asset('backend/vendors/general/bootstrap/dist/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{app_asset('backend/vendors/general/js-cookie/src/js.cookie.js')}}" type="text/javascript"></script>
<script src="{{app_asset('backend/vendors/general/moment/min/moment.min.js')}}" type="text/javascript"></script>
<script src="{{app_asset('backend/vendors/general/tooltip.js/dist/umd/tooltip.min.js')}}" type="text/javascript"></script>
<script src="{{app_asset('backend/vendors/general/perfect-scrollbar/dist/perfect-scrollbar.js')}}" type="text/javascript"></script>
<script src="{{app_asset('backend/vendors/general/sticky-js/dist/sticky.min.js')}}" type="text/javascript"></script>
<script src="{{app_asset('backend/vendors/general/wnumb/wNumb.js')}}" type="text/javascript"></script>

<!--end:: Global Mandatory Vendors -->

<script src="{{app_asset('backend/vendors/general/jquery-validation/dist/jquery.validate.js')}}" type="text/javascript"></script>
<script src="{{app_asset('backend/vendors/general/jquery-validation/dist/additional-methods.js')}}" type="text/javascript"></script>
<script src="{{app_asset('backend/vendors/custom/js/vendors/jquery-validation.init.js')}}" type="text/javascript"></script>
<script src="{{app_asset('backend/vendors/general/jquery-form/dist/jquery.form.min.js')}}" type="text/javascript"></script>

<script src="{{app_asset('backend/js/scripts.bundle.js')}}" type="text/javascript"></script>
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

</script>
<script src="{{app_asset('backend/js/pages/login/login-general.js')}}" type="text/javascript"></script>

</body>

</html>
