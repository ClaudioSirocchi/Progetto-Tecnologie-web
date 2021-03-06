<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}">

    <!-- APP CSS -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

@if( Request::is('admin/*') )
    @include('layouts.header_admin')
@elseif( Request::is('staff/*') )
    @include('layouts.header_staff')
@else
    @include('layouts.header')
@endif


<div class="main-content">
    @yield('content')
</div>

@include('layouts.footer')

@include('layouts.loading_div')

@include('layouts.error_display')


<!-- APP JS -->
<script>
    // Set rootUrl for API
    window.rootUrl = '{{ route('homepage') }}';
</script>
<script src="{{ asset('js/app.js') }}"></script>
<script>
(function() {
    @stack('onload_scripts')

})();
</script>

</body>
</html>
