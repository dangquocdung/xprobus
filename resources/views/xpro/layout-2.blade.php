<!DOCTYPE html>
<html>
    @include('xpro.includes.head-2')

	<body class="full-intro inner-header">
        <!--loader-->
        @include('xpro.includes.loader')
		<!--loader-->
		<!-- Site Wraper -->
		<div class="wrapper">
			<!-- HEADER -->
			@include('xpro.includes.header')
			<!-- END HEADER -->
			<!-- CONTENT -->
            
            @yield('content')

			<!-- FOOTER -->
            @include('xpro.includes.footer')
			<!-- END FOOTER -->
		</div>
		<!-- Site Wraper End -->
       
        @include('xpro.includes.foot-2')

	</body>
</html>
