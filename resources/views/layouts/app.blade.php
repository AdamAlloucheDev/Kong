<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link href="../css/app.css" rel="stylesheet">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://cdn.tailwindcss.com" defer></script>
        <script src="../path/to/@themesberg/flowbite/dist/flowbite.bundle.js" defer></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="https://unpkg.com/@themesberg/flowbite@1.3.0/dist/flowbite.bundle.js" defer></script>

    </head>

    <body class="bg-gray-900 mt-8 font-sans antialiased ">


            <header class="fixed top-0 left-0 right-0 text-white bg-gray-900">
                <div class="px-4 mx-auto sm:pr-0 max-w-screen-2xl">
                    <div class="flex items-center justify-between h-16">
                        <div class="flex items-center space-x-10">
                            <a href="/">
                                <span class="w-20 h-20  rounded-lg bg-yellow-400">
                                    <img class="inset-0 h-10 w-10 object-fill object-scale-down object-center"
                                            src="https://i.ibb.co/0hk1b2K/gorilla-Kong.png" alt="gorilla" border="0" />
                                </span>
                            </a>
        
                            <nav class="hidden space-x-8 text-sm font-medium lg:flex">
                                <a href="/">Home</a>
                                @if (Route::has('login'))
                                    @auth
                                        <a href="/timeline">Timeline</a>
                                        <a href="/legalmentions">Legal Mentions</a>
                                    @else
                                        <a href="/legalmentions">Legal Mentions</a>
                                    @endauth
                                @endif
                            </nav>
                        </div>
        
                        <div class="items-center justify-end hidden space-x-8 sm:flex bg-yellow-400">
                            @if (Route::has('login'))
                                @auth
                                    <a href="{{ url("/dashboard") }}" class="inline-flex items-center h-16 px-12 text-xs font-bold tracking-widest text-black-900 uppercase bg-yellow-400">Mon Compte</a>

                                    <button class="inline-flex items-center h-16 px-12 text-xs font-bold tracking-widest text-black-900 uppercase bg-yellow-400">
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <a :href="route('logout')"
                                                onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                                {{ __('Log Out') }}
                                            </a>
                                        </form>
                                    </button>
                                @else
                                    <a class="inline-flex items-center h-16 px-12 text-xs font-bold tracking-widest text-black-900 uppercase bg-yellow-400" href="{{ route('login') }}">Connexion</a>
                                @endauth
                            @endif
                        </div>
                    </div>
                </div>
            </header>

            <main>
                @yield('content')
            </main>

            <script>
                AOS.init();
            </script>
            @livewireScripts

    </body>

</html>
