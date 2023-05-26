<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Castoro&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            {{-- @include('layouts.navigation') --}}

            {{-- <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-emerald-100 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif --}}

            <x-header/>

            <!-- Page Content -->
            <div class="w-full h-screen min-h-screen flex container mx-auto md:px-20 pt-20">
                <div class="w-1/5 h-full flex items-start justify-center border-r border-gray-300">
                    <div class="flex flex-col space-y-1 p-8 justify-left">
                        <a href="{{ route('admin.books.list') }}" class="flex items-center space-x-2 p-2 rounded group hover:bg-green-100">
                            <i class='bx bx-category text-xl text-gray-500 group-hover:text-green-700'></i>
                            <p class="group-hover:text-green-700">Dashboard</p>
                        </a>

                        <a href="{{ route('admin.books.list') }}" class="flex items-center space-x-2 p-2 rounded group hover:bg-green-100">
                            <i class='bx bx-book text-xl text-gray-500 group-hover:text-green-700'></i>
                            <p class="group-hover:text-green-700">Books</p>
                        </a>

                        <a href="" class="flex items-center space-x-2 p-2 rounded group hover:bg-green-100">
                            <i class='bx bx-user-check text-xl text-gray-500 group-hover:text-green-700'></i>
                            <p class="group-hover:text-green-700">Verified Accounts</p>
                        </a>

                        <a href="{{ route('unverified') }}" class="flex items-center space-x-2 p-2 rounded group hover:bg-green-100">
                            <i class='bx bx-user-x text-xl text-gray-500 group-hover:text-green-700'></i>
                            <p class="group-hover:text-green-700">Unverified Accounts</p>
                        </a>

                    </div>
                </div>

                <div class="w-4/5">
                    <main class="w-full">
                        {{ $slot }}
                    </main>
                </div>
            </div>
        </div>
        @stack('js')
    </body>

</html>
