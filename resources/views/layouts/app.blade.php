<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">

        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->            
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                @php
                    $header = explode(".", \Request::route()->getName());

                @endphp
                
                <div class="flex flex-row">
                    <div class="box-border w-6 mr-1 {{\Request::route()->getName() == 'dashboard' ? 'hidden' : ''}}" >
                        <a href="{{ url()->previous() }}">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current text-blue-300">
                                <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight object-none object-center ">
                        {{ Illuminate\Support\Str::upper(implode(" ", $header)) }}
                    </h2>
                </div>
                    
                </div>
            </header>            
            <!-- Page Content -->
            <main>
                {{ $slot }}

            </main>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
