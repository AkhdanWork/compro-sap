<nav id="navbar" class="flex items-center justify-between
            px-1 lg:px-6 py-1 lg:py-3 
            fixed top-0 left-0 right-0 z-50
            transition-all duration-300">
    <div class="flex items-center flex-shrink-0">
        <img src="{{ asset('img/logo-min.png')}}" class="h-5 lg:h-10 rounded-lg" alt="SAP Enterprise Logo">
    </div>

    <div class="flex items-center space-x-1 lg:space-x-1">
        <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'text-white font-semibold' : 'text-gray-200' }} hover:text-white px-0.5 lg:px-4 py-2 transition text-xs lg:text-base">
            Home
        </a>
        <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'text-white font-semibold' : 'text-gray-200' }} hover:text-white px-0.5 lg:px-4 py-2 transition text-xs lg:text-base">
            About
        </a>
        <a href="{{ route('service') }}" class="{{ request()->routeIs('service') ? 'text-white font-semibold' : 'text-gray-200' }} hover:text-white px-0.5 lg:px-4 py-2 transition text-xs lg:text-base">
            Services
        </a>
        <a href="{{ route('projects') }}" class="{{ request()->routeIs('projects') ? 'text-white font-semibold' : 'text-gray-200' }} hover:text-white px-0.5 lg:px-4 py-2 transition text-xs lg:text-base">
            Portfolio
        </a>
        <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'text-white font-semibold' : 'text-gray-200' }} hover:text-white px-0.5 lg:px-4 py-2 transition text-xs lg:text-base">
            Contact
        </a>
    </div>
    
    <div class="flex items-center space-x-1 lg:space-x-4">
        <a href="{{ route('contact') }}#contact" class="inline-flex items-center px-1 lg:px-4 py-1 lg:py-1.5 bg-white text-red-600 font-semibold rounded-lg hover:bg-gray-100 transition shadow-lg group text-xs lg:text-base">
            <span class="hidden lg:inline">Start Project</span>
            <span class="lg:hidden text-xs">Start</span>
            <svg class="w-3 h-3 lg:w-4 lg:h-4 ml-1 lg:ml-2 transform group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 17L17 7M17 7H7M17 7V17"></path>
            </svg>
        </a>

        @auth
        <div class="relative">
            <x-dropdown align="right" width="48">
                <x-slot name="trigger">
                    <button class="inline-flex items-center px-2 lg:px-4 py-1.5 lg:py-2 border border-white text-xs lg:text-sm font-medium rounded-md text-white hover:bg-white hover:text-red-600 transition">
                        <div class="hidden lg:block">{{ Auth::user()->name }}</div>
                        <div class="lg:hidden">{{ substr(Auth::user()->name, 0, 1) }}</div>
                        <svg class="ml-1 lg:ml-2 h-3 w-3 lg:h-4 lg:w-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
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
                    <x-dropdown-link :href="route('admin.testimonial.index')">
                        {{ __('Testimonial Content') }}
                    </x-dropdown-link>
                    <x-dropdown-link :href="route('admin.team.index')">
                        {{ __('Teams Content') }}
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
        </div>
        @endauth
    </div>
</nav>

<script>
const navbar = document.getElementById('navbar');
const isAdminPage = window.location.pathname.includes('/admin');
const isprojects = window.location.pathname.includes('/projects/');
const isprofile = window.location.pathname.includes('/profile');

if (isAdminPage || isprojects || isprofile) {
    navbar.classList.add('bg-red-600', 'shadow-lg');
    navbar.classList.remove('bg-transparent');
} else {
    window.addEventListener('scroll', () => {
        if (window.scrollY > 600) {
            navbar.classList.add('bg-red-600', 'shadow-lg');
            navbar.classList.remove('bg-transparent');
        } else {
            navbar.classList.remove('bg-red-600', 'shadow-lg');
            navbar.classList.add('bg-transparent');
        }
    });
}
</script>

<style>

</style>