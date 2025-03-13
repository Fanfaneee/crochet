<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', "Fanie's Crochet") }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chewy&display=swap" rel="stylesheet">
    
    
</head>
<body class="  h-screen antialiased leading-none font-sans">
    <div id="app">
        <header class=" bg-custom-purple  py-6 {{ Request::is('/') ? '' : 'clip-ellipse' }} ">
            <div class="container mx-auto flex justify-between items-center px-6">
                <div>
                    <a href="{{ url('/') }}" class="text-lg font-semibold text-custom-dark-blue font-custom no-underline">
                        {{ config('app.name', "Fanie's Crochet") }}
                    </a>
                </div>
                <nav class="space-x-4 text-custom-dark-blue text-sm sm:text-base">
                    <a class="no-underline hover:text-custom-purple-2" href="{{ url('/') }}">Home</a>
                    <a class="no-underline hover:text-custom-purple-2" href="/blog">Blog</a>
                    <a class="no-underline hover:text-custom-purple-2" href="{{ route('pattern') }}">{{ __('Pattern') }}</a>
                    <a class="no-underline hover:text-custom-purple-2" href="{{ route('gallery') }}">{{ __('Gallery') }}</a>
                    <a class="no-underline hover:text-custom-purple-2" href="{{ route('contact') }}">{{ __('Contact') }}</a>


                    
                    @guest
                        <a class="no-underline hover:text-custom-purple-2" href="{{ route('login') }}">{{ __('Login') }}</a>
                        @if (Route::has('register'))
                            <a class="no-underline hover:text-custom-purple-2" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    @else
                        <span>{{ Auth::user()->name }}</span>

                        <a href="{{ route('logout') }}"
                           class="no-underline hover:underline"
                           onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            {{ csrf_field() }}
                        </form>
                    @endguest
                </nav>
            </div>
        </header>

        @yield('content')
    </div>
</body>
</html>
