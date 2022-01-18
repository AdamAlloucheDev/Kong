<header class="text-white bg-gray-900">
    <div class="px-4 mx-auto sm:pr-0 max-w-screen-2xl">
        <div class="flex items-center justify-between h-16">
            <div class="flex items-center space-x-10">
                <a href="/">
                <span class="w-20 h-20  rounded-lg bg-yellow-500">
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

            <div class="items-center justify-end hidden space-x-8 sm:flex bg-yellow-500">


                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="inline-flex items-center h-16 px-12 text-xs font-bold tracking-widest text-black-900 uppercase bg-yellow-500">Mon Compte</a>
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">

                                <button class="flex items-center text-sm font-medium text-black-500 hover:text-black hover:border-black-300 focus:outline-none focus:text-black-700 focus:border-gray-300 transition duration-150 ease-in-out">


                                    <div class="ml-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </button>
                            </x-slot>

                            <x-slot name="trigger">

                                <button class="flex items-center text-sm font-medium text-black-500 hover:text-black hover:border-black-300 focus:outline-none focus:text-black-700 focus:border-gray-300 transition duration-150 ease-in-out">

                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <a :href="route('logout')"
                                           onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </a>
                                    </form>


                                    <div class="ml-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </button>
                            </x-slot>

                            <x-slot name="content">
                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-dropdown-link :href="route('logout')"
                                                     onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                            </x-slot>

                        </x-dropdown>

                    @else
                        <a class="inline-block py-2 px-4 text-white no-underline" href="{{ route('register') }}">Connexion</a>
                    @endauth



                @endif
                {{--
                                        <a class="inline-block py-2 px-4 text-white no-underline" href="{{ url('/admin') }}">Mon Compte</a>
                --}}



            </div>

            <div class="sm:hidden">
                <button class="p-2 text-gray-100 bg-gray-800 rounded-lg" type="button">
                    <span class="sr-only">Open menu</span>

                    <svg
                        aria-hidden="true"
                        class="w-5 h-5"
                        fill="none"
                        stroke="currentColor"
                        viewbox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path d="M4 6h16M4 12h16M4 18h16" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</header>

<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <span class="w-20 h-20  rounded-lg bg-yellow-500">
                    <img class="inset-0 h-20 w-20 object-fill object-scale-down object-center"
                         src="https://i.ibb.co/0hk1b2K/gorilla-Kong.png" alt="gorilla" border="0" />
                </span>
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
