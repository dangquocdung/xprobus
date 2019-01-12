<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">

<title>{{$PageTitle}} {{($PageTitle !="")? "|":""}} {{ Helper::GeneralSiteSettings("site_title_" . trans('backLang.boxCode')) }}</title>
<meta name="description" content="{{$PageDescription}}"/>
<meta name="keywords" content="{{$PageKeywords}}"/>
<meta name="author" content="Dang Quoc Dung"/>

@yield('meta')

<base href="{{asset('')}}">

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- Favicon -->
<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">

<!-- CSS
============================================ -->
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{ URL::asset('httv/css/bootstrap.min.css') }}">
<!-- Icon Font CSS -->
<link rel="stylesheet" href="{{ URL::asset('httv/css/font-awesome.min.css') }}">
<!-- Plugins CSS -->
<link rel="stylesheet" href="{{ URL::asset('httv/css/plugins.css') }}">
<!-- rypp -->
<link rel="stylesheet" href="{{ URL::asset('httv/css/rypp.css') }}">
<!-- Style CSS -->
<link rel="stylesheet" href="{{ mix('httv/css/style.css') }}">

{{-- Google Tags and google analytics --}}
@if($WebmasterSettings->google_tags_status && $WebmasterSettings->google_tags_id !="")
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','{!! $WebmasterSettings->google_tags_id !!}');</script>
    <!-- End Google Tag Manager -->
@endif

<!-- jQuery JS -->
<script src="{{ URL::asset('httv/js/vendor/jquery-1.12.0.min.js') }}"></script>
<!-- Modernizer JS -->
<script src="{{ URL::asset('httv/js/vendor/modernizr-2.8.3.min.js') }}"></script>
<!-- Jssor Slider JS -->
<script src="{{ URL::asset('/httv/js/vendor/jssor.slider-26.7.0.min.js') }}"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/locales/bootstrap-datepicker.vi.min.js"></script>

