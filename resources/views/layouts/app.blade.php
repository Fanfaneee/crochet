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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://cdn.tiny.cloud/1/0bde69llyjongbltl07nfvhk1khday09cufyczlve9rh4j3d/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>



</head>
<body class="h-screen antialiased leading-none font-sans flex flex-col">
    <div id="app" class="flex-grow">
        <header class="bg-custom-purple py-6 {{ Request::is('/') ? '' : 'clip-ellipse' }}">
            <div class="container mx-auto flex justify-between items-center px-6">
                <div>
                    <a href="{{ url('/') }}" class="text-3xl font-semibold text-custom-dark-blue font-custom no-underline">
                        {{ config('app.name', "Fanie's Crochet") }}
                    </a>
                </div>
                <nav class="space-x-4 text-custom-dark-blue font-bold text-sm sm:text-base">
                    <a class="no-underline hover:text-custom-purple-2" href="{{ url('/') }}">Home</a>
                    <a class="no-underline hover:text-custom-purple-2" href="/blog">Blog</a>
                    
                    <a class="no-underline hover:text-custom-purple-2" href="{{ route('gallery') }}">{{ __('Gallery') }}</a>
                    <a class="no-underline hover:text-custom-purple-2" href="{{ route('about') }}">{{ __('About Me') }}</a>
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

    @include('layouts.footer')
    @stack('scripts')
</body>
</html>
