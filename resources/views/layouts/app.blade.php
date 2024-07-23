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

        <!-- Scripts -->
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="font-sans antialiased">
        <div class="flex h-fullscreen">
            <div class="w-56 bg-gradient-to-b from-gray-400 to-gray-600 text-white shadow-lg min-h-screen">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQNY4VeE2fEhUNnkaTdigfqSpe6V1_5L9XXzg&usqp=CAU" class="w-8/12 mx-auto mt-5 rounded-full" alt="Logo">
        
                <div class="mt-5">
                    <a href="{{route('dashboard')}}" class="block px-4 py-3 text-lg font-bold border-l-4 border-transparent transition-all duration-300 hover:border-red-600 hover:bg-gray-700">Dashboard</a>
        
                    <a href="{{route('category.index')}}" class="block px-4 py-3 text-lg font-bold border-l-4 border-transparent transition-all duration-300 hover:border-red-600 hover:bg-gray-700">Category</a>
        
                    <a href="{{route('product.index')}}" class="block px-4 py-3 text-lg font-bold border-l-4 border-transparent transition-all duration-300 hover:border-red-600 hover:bg-gray-700">Products</a>
        
                    <a href="#" class="block px-4 py-3 text-lg font-bold border-l-4 border-transparent transition-all duration-300 hover:border-red-600 hover:bg-gray-700">Users</a>
        
                    <a href="#" class="block px-4 py-3 text-lg font-bold border-l-4 border-transparent transition-all duration-300 hover:border-red-600 hover:bg-gray-700">Orders</a>
        
                    <form action="{{route('logout')}}" method="POST" class="w-full overflow-hidden">
                        @csrf
                        <button type="submit" class="block w-full text-left font-bold px-4 py-3 text-lg border-l-4 border-transparent transition-all duration-300 hover:border-red-600 hover:bg-gray-700">Logout</button>
                    </form>
                </div>
            </div>
            <div class="p-4 flex-1">
                @yield('content')
            </div>
        </div>
        
    </body>        
</html>
