<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Quoka Drive</title>

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

        <nav class="navbar navbar-expand-lg" style=" background: #fff !important; padding-left: 0 !important; padding-bottom: 0 !important; line-height: 3.5rem !important; min-height:3.5rem !important; border-bottom:1px solid rgba(224, 224, 245, 0.8);">

            @if (Route::has('register'))
                <a class="navbar-brand" style="padding-top: 0 !important; padding-bottom: 0 !important; padding-left: 1.3rem !important; color: #000 !important; " href="{{ url('drive') }}" >
                    Quoka Drive
                </a>
            @else
                <a class="navbar-brand" style="padding-top: 0 !important; padding-bottom: 0 !important; padding-left: 1.3em !important; color: #000 !important;"  href="{{ url('auth/login') }}">
                    Quoka Drive
                </a>
            @endif

            <button class="navbar-toggler"  type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" onclick="myToggle()">
                <i class="fas fa-th" style="font-size: 24px; color: #999;"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav" style="text-align: center !important;">

                    <li>
                        <a class="nav-link-d" href="/drive" style="text-decoration: none !important;">
                            <i class="far fa-folder-open"></i>
                            {{ __('Storage') }}
                        </a>
                    </li>

                    <li>
                        <a class="nav-link-d" href="/notifications" style="text-decoration: none !important;">
                            <i class="far fa-bell"></i>
                            {{ __('Notifications') }}
                        </a>
                    </li>

                    <li>
                        <a class="nav-link-m" href="/drive/mobile/m_storage" style="text-decoration: none !important;">
                            <i class="far fa-folder-open"></i>
                            {{ __('Storage') }}
                        </a>
                    </li>

                    <li>
                        <a class="nav-link-m" href="/drive/mobile/m_share" style="text-decoration: none !important;" >
                            <i class="fas fa-share-square"></i>
                            {{ __('Share Files') }}
                        </a>
                    </li>


                    <li>
                        <a class="nav-link-m" href="/drive/mobile/m_notifications" style="text-decoration: none !important;" >
                            <i class="far fa-bell"></i>
                            {{ __('Notifications') }}
                        </a>
                    </li>


                    <li>
                        <a  href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"

                            style="text-decoration: none !important;">

                            <i class="fas fa-power-off"></i>
                            {{ __('Sign Out') }}

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </a>
                    </li>

                </ul>
            </div>
        </nav>


        <main class="py-4"  id="main-container" style="padding-bottom: 0 !important; padding-top: 0 !important;">
            @yield('content')
        </main>
    </div>
</body>
</html>




