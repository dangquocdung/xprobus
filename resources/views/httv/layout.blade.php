<!doctype html>
<html class="no-js" lang="en">

<head>
    @include('httv.includes.head')
</head>

<body>
        <div id="shadow" ></div>

    <!-- Main Wrapper -->
    <div id="main-wrapper">

        @include('httv.includes.header')
        @include('httv.includes.menu')
        @include('httv.includes.breaking-news')

        @yield('content')

        @include('httv.includes.footer')


    </div>

    <!-- Popper JS -->
    <script src="{{ URL::asset('httv/js/popper.min.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ URL::asset('httv/js/bootstrap.min.js') }}"></script>
    <!-- Plugins JS -->
    <script src="{{ URL::asset('httv/js/plugins.js') }}"></script>
    <!-- rypp JS -->
    <script src="{{ URL::asset('httv/js/rypp.js') }}"></script>
    <script src="{{ URL::asset('httv/js/ytp-playlist.js') }}"></script>
    <!-- Ajax Mail JS -->
    <script src="{{ URL::asset('httv/js/ajax-mail.js') }}"></script>
    <!-- Main JS -->
    <script src="{{ URL::asset('httv/js/main.js') }}"></script>
    
    @yield('script')

</body>

</html>
