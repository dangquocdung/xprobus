<!DOCTYPE html>
<html>
    @include('xpro.includes.head')
	
	<body class="full-intro background--dark">

            @include('xpro.includes.loader')
            <!-- Site Wraper -->
            <div class="wrapper">
                @include('xpro.includes.header')

                @yield('body')
                
                @include('xpro.includes.footer')
            </div>
            <!-- Site Wraper End -->
		
        @include('xpro.includes.foot')
	</body>
</html>
