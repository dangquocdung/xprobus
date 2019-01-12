<!doctype html>
<html class="no-js" lang="en">

<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        
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
        
</head>

<body>
        <div id="shadow" ></div>

    <!-- Main Wrapper -->
    <div id="main-wrapper">

        @yield('content')

    </div>

    <!-- Popper JS -->
    <script src="{{ URL::asset('httv/js/popper.min.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ URL::asset('httv/js/bootstrap.min.js') }}"></script>
    <!-- Plugins JS -->
    <script src="{{ URL::asset('httv/js/plugins.js') }}"></script>
    <!-- rypp JS -->
    <script src="{{ URL::asset('httv/js/rypp.js') }}"></script>
    <!-- rypp JS -->
    <script src="{{ URL::asset('httv/js/ytp-playlist.js') }}"></script>
    <!-- Ajax Mail JS -->
    <script src="{{ URL::asset('httv/js/ajax-mail.js') }}"></script>
    <!-- Main JS -->
    <script src="{{ URL::asset('httv/js/main.js') }}"></script>

    <script type='text/javascript'> 
        $(document).ready(function(){
            $("#shadow").css("height", $(document).height()).hide();
            $(".lightSwitcher").click(function(){
                $("#shadow").toggle();
                if ($("#shadow").is(":hidden"))
                    $(this).html("Tắt Đèn ").removeClass("turnedOff");
                 else
                    $(this).html("Bật Đèn ").addClass("turnedOff");
            });
            
        });

    </script>

</body>

</html>
