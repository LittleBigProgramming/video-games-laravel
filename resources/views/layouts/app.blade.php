<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" xmlns:livewire="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="/css/main.css">
    @livewireStyles
</head>
<body class="bg-gray-800 text-white">
    <header class="border-b border-gray-700">
        <nav class="container mx-auto flex flex-col lg:flex-row items-center justify-between py-6">
            <div class="flex flex-col lg:flex-row items-center">
                <a href="/">
                    <div class="w-32 flex-none">Logo</div>
                </a>
                <ul class="flex ml-0 lg:ml-16 mt-6 lg:mt-0 space-x-8">
                    <li><a href="#" class="hover:text-gray-400">Items</a></li>
                    <li><a href="#" class="hover:text-gray-400">Reviews</a></li>
                    <li><a href="#" class="hover:text-gray-400">Coming Soon</a></li>
                </ul>
            </div>
            <div class="flex items-center mt-6 lg:mt-0">
                <div class="relative">
                    <input type="text" class="bg-gray-700 text-sm rounded-full px-3 py-1 w-64 focus:outline-none focus:shadow-outline" placeholder="Search">
                </div>
                <div class="ml-6">
                    <a href="#">
                        <img src="/avatar.png" alt="avatar" class="rounded-full w-8">
                    </a>
                </div>
            </div>
        </nav>
    </header>
    <main class="py-8">
        @yield('content')
    </main>

    <footer class="border-t border-gray-700">
        <div class="container mx-auto px-4 py-6">
            Powered By <a href="#" class="underline hover:text-gray-400">IGDB API</a>
        </div>
    </footer>

    @livewireScripts
</body>
</html>
