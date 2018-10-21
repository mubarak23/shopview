<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>ShopView -- Business Review and Shop Platform</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
        @include('includes.styles')
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        

        <!-- Navigation & Logo-->
        @include('includes.nav')
        @include("includes.response")
		<!-- Main Content -->
		@yield('content')
	   	

	    <!-- Footer -->
	    @include('includes.footer')

        @include('includes.js')
        <script src="{{ asset('js/app.js') }}"></script>

    </body>
</html>