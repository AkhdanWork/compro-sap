<!-- resources/views/components/navbar.blade.php -->
<nav class="flex items-center justify-between flex-wrap bg-red p-6 sticky top-0 z-50">
    <div class="flex items-center flex-shrink-0 text-white mr-6">
        <img src="{{ asset('img/logo_putih.jpg')}}" class="h-8 rounded-lg" alt="">
        <span class="lg:hidden ml-2 self-center text-2xl font-semibold whitespace-nowrap">PT SAP Enterprise</span>
    </div>
    <div class="block lg:hidden">
        <button id="navToggle" class="flex items-center px-3 py-2 border rounded text-white hover:text-gray-400 border-teal-400 hover:border-gray-400">
            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
        </button>
    </div>
    <div id="navMenu" class="w-full block flex-grow lg:flex lg:justify-end lg:w-auto hidden lg:block mt-4 lg:mt-0 ">
        <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'text-white' : 'text-gray-400' }} hover:text-white px-4 py-2">
            Home
        </a>
        <a href="{{ route('service') }}" class="{{ request()->routeIs('service') ? 'text-white' : 'text-gray-400' }} hover:text-white px-4 py-2">
            Services
        </a>
        <a href="{{ route('projects') }}" class="{{ request()->routeIs('projects') ? 'text-white' : 'text-gray-400' }} hover:text-white px-4 py-2">
            Projects
        </a>
        <a href="#" class="text-gray-400 hover:text-white px-4 py-2">
          Catalog
        </a>
        <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'text-white' : 'text-gray-400' }} hover:text-white px-4 py-2">
            About Us
        </a>
        <a href="{{ route('team') }}" class="{{ request()->routeIs('team') ? 'text-white' : 'text-gray-400' }} hover:text-white px-4 py-2">
            Team
        </a>
        <a href="{{ route('download') }}" class="{{ request()->routeIs('download') ? 'text-white' : 'text-gray-400' }} hover:text-white px-4 py-2">
            Download
        </a>
    </div>
</nav>
