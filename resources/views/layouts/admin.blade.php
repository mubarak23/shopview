<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Asusu Disburse') }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Business Review Shop" />
        <meta content="Clear Code Ltd" name="Clear Code " />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        @include('includes.admin_styles')
    </head>

    <body>
        <div id="">
            @include('includes.admin_nav')
            @yield('content')
        </div>
        @include('includes.admin_footer')
        @include('includes.admin_js')
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>