<div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed ">

    <!-- begin:: Header Menu -->

    <!-- Uncomment this to display the close button of the panel
<button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
-->
    <div class="kt-header-menu-wrapper" id="kt_header_menu_wrapper">
        <div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile  kt-header-menu--layout-default ">
            <ul class="kt-menu__nav ">
            </ul>
        </div>
    </div>

    <!-- end:: Header Menu -->

    <!-- begin:: Header Topbar -->
    <div class="kt-header__topbar">

        <!--begin: Search -->

        <!--begin: Search -->

        <!--end: Search -->

        <!--end: Search -->

        <!--begin: Notifications -->
        <div class="kt-header__topbar-item dropdown">

        </div>

        <!--end: Notifications -->

        <!--end: My Cart -->

        <!--begin: Quick panel toggler -->

        <!--end: Quick panel toggler -->

        <!--begin: Language bar -->
        @php
            $locale = get_admin_locale();
        @endphp
        <div class="kt-header__topbar-item kt-header__topbar-item--langs">
            <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
                <span class="kt-header__topbar-icon">
                    <img class="" src="{{app_asset('backend/media/flags/'.($locale == 'en' ? '020-flag.svg' : 'uae.png'))}}" alt="" />
                </span>

            </div>
            <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround">
                <ul class="kt-nav kt-margin-t-10 kt-margin-b-10">
                    <li class="kt-nav__item {{$locale == 'en' ? 'kt-nav__item--active' : ''}}">
                        <a href="{{app_url('/admin/switch-locale/en')}}" class="kt-nav__link ">
                            <span class="kt-nav__link-icon"><img src="{{app_asset('backend/media/flags/020-flag.svg')}}" alt="" /></span>
                            <span class="kt-nav__link-text">English</span>
                        </a>
                    </li>
                    <li class="kt-nav__item {{$locale == 'ar' ? 'kt-nav__item--active' : ''}}">
                        <a href="{{app_url('/admin/switch-locale/ar')}}" class="kt-nav__link">
                            <span class="kt-nav__link-icon"><img src="{{app_asset('backend/media/flags/uae.png')}}" alt="" /></span>
                            <span class="kt-nav__link-text">العربية</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!--end: Language bar -->

        <!--begin: User Bar -->
        <div class="kt-header__topbar-item kt-header__topbar-item--user">
            <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="0px,0px">
                <div class="kt-header__topbar-user">
                    <span class="kt-header__topbar-welcome kt-hidden-mobile">مرحباً,</span>
                    <span class="kt-header__topbar-username kt-hidden-mobile">{{auth('admin')->user()->name}}</span>
                    <img class="kt-hidden" alt="Pic" src="{{app_asset('backend/media/users/300_25.jpg')}}" />

                    <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
                    <span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bold">S</span>
                </div>
            </div>
            <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-xl">

                <!--begin: Head -->
                <div class="kt-user-card kt-user-card--skin-dark kt-notification-item-padding-x" style="background-image: url(assets/media/misc/bg-1.jpg)">

                </div>

                <!--end: Head -->

                <!--begin: Navigation -->
                <div class="kt-notification">
{{--                    <a href="custom/apps/user/profile-1/personal-information.html" class="kt-notification__item">--}}
{{--                        <div class="kt-notification__item-icon">--}}
{{--                            <i class="flaticon2-calendar-3 kt-font-success"></i>--}}
{{--                        </div>--}}
{{--                        <div class="kt-notification__item-details">--}}
{{--                            <div class="kt-notification__item-title kt-font-bold">--}}
{{--                                My Profile--}}
{{--                            </div>--}}
{{--                            <div class="kt-notification__item-time">--}}
{{--                                Account settings and more--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </a>--}}


                    <div class="kt-notification__custom kt-space-between">
                        <a href="{{route('admin.logout')}}" target="" class="btn btn-label btn-label-brand btn-sm btn-bold">تسجيل الخروج</a>
                    </div>
                </div>

                <!--end: Navigation -->
            </div>
        </div>

        <!--end: User Bar -->
    </div>

    <!-- end:: Header Topbar -->
</div>
