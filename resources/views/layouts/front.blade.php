<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon.png') }}">
    <link rel="shortcut icon"  type="image/jpg" href="{{ asset('assets/images/search.jpg') }}" >
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="theme-color" content="#ffcee3">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta http-equiv="Content-Type" content="text/html">
    <link  rel="stylesheet" type="text/css" href="{{ asset('frontend/css/main.css') }}">
    <link  rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap.css') }}">
</head>
<body>
    @include('layouts.inc.frontnavbar')
    @include('layouts.inc.slider')
    <div class="homepage-collection homepage--white">
        <div class="wrapper">
            <div class="grid-uniform">
                <main class="main-content">
                    @yield('content')
                </main>
            </div>
        </div>
    </div>

    @include('layouts.inc.frontfooter')

    <script src="{{ asset('frontend/js/main.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}" defer></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}" defer></script>
    <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/js/custom.js') }}"></script>

    @if (session('status'))
    <script>
        swal("{{ session('status') }}");
    </script>
    @endif
</body>
</html>
