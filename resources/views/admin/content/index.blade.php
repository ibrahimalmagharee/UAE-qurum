@extends('admin.layout.app')


@section('title',app('settings')->get('app_name_'.get_admin_locale()) . ' - ' . __('admin.aside.home_page_content'))

@section('page_styles')
    <link rel="stylesheet" href="{{ app_asset('backend/plugins/summernote/summernote-bs4.css') }}">
    <link href="{{app_asset('backend/plugins/dropzone/dropzone.css')}}" rel="stylesheet" type="text/css" />
    <style>
        @if($lang === 'en')
            input,textarea{
                direction: ltr;
             }
        @endif
    </style>
@endsection

@section('content')

@endsection


@section('page_scripts')
    <script src="{{ app_asset('backend/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <script src="{{app_asset('backend/plugins/dropzone/dropzone.js')}}"></script>

@endsection
