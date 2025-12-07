<nav class="flex items-center justify-between flex-wrap bg-red p-6 sticky top-0 z-50">
    <div class="flex items-center flex-shrink-0 text-white mr-6">
        <img src="{{ asset('img/logo-min.png')}}" class="h-8 rounded-lg" alt="">
    </div>
    <div class="block lg:hidden">
        <button id="navToggle" class="flex items-center px-3 py-2 border rounded text-white hover:text-gray-400 border-teal-400 hover:border-gray-400">
            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
        </button>
    </div>
    <div id="navMenu" class="w-full block flex-grow lg:flex lg:justify-end lg:w-auto hidden lg:block mt-4 lg:mt-0">
        <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'text-white' : 'text-gray-300' }} hover:text-white px-4 py-2">
            Home
        </a>
        <a href="{{ route('service') }}" class="{{ request()->routeIs('service') ? 'text-white' : 'text-gray-300' }} hover:text-white px-4 py-2">
            Services
        </a>
        <a href="{{ route('projects') }}" class="{{ request()->routeIs('projects') ? 'text-white' : 'text-gray-300' }} hover:text-white px-4 py-2">
            Projects
        </a>
        <a href="#" class="text-gray-300 hover:text-white px-4 py-2">
            Catalog
        </a>
        <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'text-white' : 'text-gray-300' }} hover:text-white px-4 py-2">
            About Us
        </a>
        <a href="{{ route('team') }}" class="{{ request()->routeIs('team') ? 'text-white' : 'text-gray-300' }} hover:text-white px-4 py-2">
            Team
        </a>
        <a href="{{ route('download') }}" class="{{ request()->routeIs('download') ? 'text-white' : 'text-gray-300' }} hover:text-white px-4 py-2">
            Download
        </a>

        @auth

        <div class="hidden sm:flex sm:items-center sm:ms-6">
            
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-white text-sm leading-4 font-medium rounded-md text-gray-100 bg-red hover:text-gray-400 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('admin.home.index')">
                            {{ __('Event Content') }}
                        </x-dropdown-link>
                        <x-dropdown-link :href="route('admin.wedding.index')">
                            {{ __('Wedding Content') }}
                        </x-dropdown-link>
                        <x-dropdown-link :href="route('admin.graphic.index')">
                            {{ __('Graphic Content') }}
                        </x-dropdown-link>
                        <x-dropdown-link :href="route('admin.dmodel.index')">
                            {{ __('3D Modelling Content') }}
                        </x-dropdown-link>
                        <x-dropdown-link :href="route('admin.partner.index')">
                            {{ __('Partner Content') }}
                        </x-dropdown-link>
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <hr>
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
            </div>
        @endauth
    </div>
</nav>