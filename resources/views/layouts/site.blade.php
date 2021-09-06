<!DOCTYPE html>
<html lang="ar" dir="rtl">
<link rel="icon" href="{{app_asset('recommended.ae/images/logo/qurm logo.png')}}" type="image/png">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>شجرة القرم </title>.


    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" media="screen" href="css/bootstrap.min.css"> -->
    <link rel="stylesheet" media="screen" href="{{app_asset('recommended.ae/css/bootstrap-rtl.css')}}">

    <link rel="stylesheet" href="{{app_asset('recommended.ae/fonts/ionicons.min.css')}}">
    <link rel="stylesheet" media="screen" href="{{app_asset('recommended.ae/css/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{app_asset('recommended.ae/css/jquery-ui.css')}}">
    <!-- Main Style CSS -->
    <link rel="stylesheet" media="screen" href="{{app_asset('recommended.ae/css/main.css')}}">
    <link rel="stylesheet" media="screen" href="{{app_asset('recommended.ae/css/media-query.css')}}">
    <link rel="stylesheet" href="{{app_asset('recommended.ae/css/videoPlayer.css')}}" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn t work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script type="text/javascript" src="{{app_asset('recommended.ae/js/amcharts.js')}}"></script>
    <script type="text/javascript" src="{{app_asset('recommended.ae/js/serial.js')}}"></script>

</head>

<body>

@yield('content')


<!-- JQuery JS -->
<script src="{{app_asset('recommended.ae/js/jquery-3.1.1.min.js')}}"></script>
<!-- Popper JS -->
<script src="{{app_asset('recommended.ae/js/popper.min.js')}}"></script>
<!-- Bootstrap JS -->
<script src="{{app_asset('recommended.ae/js/bootstrap.min.js')}}"></script>

<script src="{{app_asset('recommended.ae/js/videoPlayer.js')}}"></script>

<!-- charts initializtion -->
<script src="{{app_asset('recommended.ae/js/Chart.min.js')}}"></script>

<script src="{{app_asset('recommended.ae/js/chartjs-plugin-datalabels.min.js')}}"></script>

<script src="{{app_asset('recommended.ae/js/swiper-bundle.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="{{app_asset('recommended.ae/js/Maximage.js')}}"></script>

<script src="{{asset('recommended.ae/js/jquery.nicescroll.min.js')}}"></script>
<!-- Main Script JS -->
<script src="{{app_asset('recommended.ae/js/main.js')}}"></script>

<script src="{{app_asset('recommended.ae/js/jquery-ui.js')}}"></script>
<script>
    $( function() {
        $( "#datepicker" ).datepicker();
    } );


</script>
@yield('script')

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
</body>

</html>
