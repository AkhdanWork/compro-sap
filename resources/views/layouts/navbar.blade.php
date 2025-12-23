<nav id="navbar" class="flex items-center justify-between px-6 py-4 fixed top-0 left-0 right-0 z-50 transition-all duration-300">
    <!-- Logo - Kiri -->
    <div class="flex items-center flex-shrink-0">
        <img src="{{ asset('img/logo-min.png')}}" class="h-10 rounded-lg" alt="SAP Enterprise Logo">
    </div>

    <!-- Mobile Menu Button -->
    <div class="block lg:hidden">
        <button id="navToggle" class="flex items-center px-3 py-2 border rounded text-white hover:text-gray-400 border-white hover:border-gray-400">
            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <title>Menu</title>
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
            </svg>
        </button>
    </div>

    <!-- Navigation - Tengah (Desktop) -->
    <div id="navMenu" class="hidden lg:flex items-center space-x-1">
        <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'text-white font-semibold' : 'text-gray-200' }} hover:text-white px-4 py-2 transition">
            Home
        </a>
        <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'text-white font-semibold' : 'text-gray-200' }} hover:text-white px-4 py-2 transition">
            About
        </a>
        <a href="{{ route('service') }}" class="{{ request()->routeIs('service') ? 'text-white font-semibold' : 'text-gray-200' }} hover:text-white px-4 py-2 transition">
            Services
        </a>
        <a href="{{ route('projects') }}" class="{{ request()->routeIs('projects') ? 'text-white font-semibold' : 'text-gray-200' }} hover:text-white px-4 py-2 transition">
            Portfolio
        </a>
        <a href="{{ route('team') }}" class="{{ request()->routeIs('team') ? 'text-white font-semibold' : 'text-gray-200' }} hover:text-white px-4 py-2 transition">
            Team
        </a>
        <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'text-white font-semibold' : 'text-gray-200' }} hover:text-white px-4 py-2 transition">
            Contact
        </a>
    </div>

    <!-- Right Side - Button & Auth -->
    <div class="hidden lg:flex items-center space-x-4">
        <!-- Start Project Button -->
        <a href="#contact" class="inline-flex items-center px-6 py-2.5 bg-white text-red-600 font-semibold rounded-lg hover:bg-gray-100 transition shadow-lg group">
            Start Project
            <svg class="w-4 h-4 ml-2 transform group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 17L17 7M17 7H7M17 7V17"></path>
            </svg>
        </a>

        <!-- Auth Dropdown -->
        @auth
        <x-dropdown align="right" width="48">
            <x-slot name="trigger">
                <button class="inline-flex items-center px-4 py-2 border border-white text-sm font-medium rounded-md text-white hover:bg-white hover:text-red-600 transition">
                    <div>{{ Auth::user()->name }}</div>
                    <svg class="ml-2 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
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
                <hr>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-dropdown-link :href="route('logout')"
                            onclick="event.preventDefault(); this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-dropdown-link>
                </form>
            </x-slot>
        </x-dropdown>
        @endauth
    </div>

    <!-- Mobile Menu (Full Screen Dropdown) -->
    <div id="mobileMenu" class="hidden lg:hidden fixed inset-0 bg-red-600 z-40 pt-20">
        <div class="flex flex-col items-center space-y-6 py-8">
            <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'text-white font-bold' : 'text-gray-200' }} text-xl hover:text-white transition">
                Home
            </a>
            <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'text-white font-bold' : 'text-gray-200' }} text-xl hover:text-white transition">
                About
            </a>
            <a href="{{ route('service') }}" class="{{ request()->routeIs('service') ? 'text-white font-bold' : 'text-gray-200' }} text-xl hover:text-white transition">
                Services
            </a>
            <a href="{{ route('projects') }}" class="{{ request()->routeIs('projects') ? 'text-white font-bold' : 'text-gray-200' }} text-xl hover:text-white transition">
                Portfolio
            </a>
            <a href="{{ route('team') }}" class="{{ request()->routeIs('team') ? 'text-white font-bold' : 'text-gray-200' }} text-xl hover:text-white transition">
                Team
            </a>
            <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'text-white font-bold' : 'text-gray-200' }} text-xl hover:text-white transition">
                Contact
            </a>
            
            <a href="#contact" class="inline-flex items-center px-4 py-2 bg-white text-red-600 font-semibold rounded-lg hover:bg-gray-100 transition shadow-lg mt-6">
                Start Project
                <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 17L17 7M17 7H7M17 7V17"></path>
                </svg>
            </a>

            @auth
            <div class="pt-6 border-t border-white/30 w-64 text-center">
                <p class="text-white mb-4">{{ Auth::user()->name }}</p>
                <a href="{{ route('admin.home.index') }}" class="block text-gray-200 hover:text-white py-2">Admin Panel</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="text-gray-200 hover:text-white py-2">Log Out</button>
                </form>
            </div>
            @endauth
        </div>
    </div>
</nav>

<script>
const navToggle = document.getElementById('navToggle');
const mobileMenu = document.getElementById('mobileMenu');

navToggle.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
});

const navbar = document.getElementById('navbar');

window.addEventListener('scroll', () => {
    if (window.scrollY > 600) {
        navbar.classList.add('bg-red-600', 'shadow-lg');
        navbar.classList.remove('bg-transparent');
    } else {
        navbar.classList.remove('bg-red-600', 'shadow-lg');
        navbar.classList.add('bg-transparent');
    }
});
</script>