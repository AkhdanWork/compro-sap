<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'PT SAP Enterprise') }}</title>

    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css"  rel="stylesheet" />
    <!-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;700&display=swap"> -->
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>   

    <style>
        * {
            font-family: 'Manrope', sans-serif !important;
        }
    </style>
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased">
        <div id="notification-container" class="fixed top-20 right-4 z-50 space-y-3"></div>
        @include('layouts.navbar')
        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
        {{ $slot }}
        </main>
        <x-footer />
    </body>

    <script>
        function showNotification(message, type = 'success') {
            const container = document.getElementById('notification-container') 
                || document.body;

            const notification = document.createElement('div');

            const styles = {
                success: {
                    bg: 'bg-green-500',
                    icon: 'check-circle'
                },
                error: {
                    bg: 'bg-red-500',
                    icon: 'x-circle'
                },
                info: {
                    bg: 'bg-blue-500',
                    icon: 'info-circle'
                }
            };

            const config = styles[type] || styles.success;

            notification.className = `
                flex items-center gap-3 px-6 py-4 rounded-lg shadow-lg text-white
                ${config.bg}
                transform translate-x-full opacity-0
                transition-all duration-300 ease-out
            `;

            notification.innerHTML = `
                <i class="bi bi-${config.icon} text-xl"></i>
                <span class="text-sm font-medium">${message}</span>
            `;

            container.appendChild(notification);

            // Animate in
            setTimeout(() => {
                notification.classList.remove('translate-x-full', 'opacity-0');
            }, 50);

            // Animate out
            setTimeout(() => {
                notification.classList.add('translate-x-full', 'opacity-0');
                setTimeout(() => notification.remove(), 300);
            }, 3000);
        }
    </script>

</html>
