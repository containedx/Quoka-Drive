<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Elobox Drive</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/all.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('css/drive.css') }}" rel="stylesheet">
    <link href="{{ asset('css/notifications.css') }}" rel="stylesheet">
    <link href="{{ asset('css/auth.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white"  style=" padding-left: 0 !important; padding-bottom: 0 !important; line-height: 3.5rem !important; height:3.5rem !important; border-bottom:1px solid rgba(224, 224, 245, 0.8);">
            <div class="container" style="margin: 0 0 0 1.3rem !important;  display: inline-block !important;
">

                @if (Route::has('register'))
                    <a class="navbar-brand" style="padding-top: 0 !important; padding-bottom: 0 !important;" href="{{ url('drive') }}" >
                        Demo Drive
                    </a>
                @else
                    <a class="navbar-brand" style="padding-top: 0 !important; padding-bottom: 0 !important;" href="{{ url('auth/login') }}">
                        Demo Drive
                    </a>
                @endif

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                </div>
            </div>
        </nav>

        <main class="py-4" style="padding-bottom: 0 !important; padding-top: 0 !important;">
            @yield('content')
        </main>
    </div>
</body>
</html>

