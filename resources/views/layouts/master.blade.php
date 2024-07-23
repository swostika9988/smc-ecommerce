<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMC Ecommerce</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" ></script>
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css"
    rel="stylesheet"
/>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    

</head>
<body>
@if(session('success'))
        <div id="message" class="fixed top-2 right-0 z-10">
            <div class="bg-blue-600 text-white text-xl px-10 py-4">
                <p>{{session('success')}}</p>
            </div>
        </div>
        <script>
            $('#message').delay(1500).slideUp(500);
        </script>
        @endif
    <nav class="flex sticky top-0 justify-between shadow px-20 py-4 items-center bg-orange-500 ">
       <img src="https://previews.123rf.com/images/vectorgalaxy/vectorgalaxy1805/vectorgalaxy180500583/101156949-mini-mart-logo-isolated-on-white-background-for-your-web-and-mobile-app-design-colorful-vector-icon.jpg" class="w-24 rounded-lg" alt=""> 
       <div class="text-white font-bold">
        <a class="mx-2" href="/" >Home</a>
        @php
        $categories = App\Models\Category::orderBy('priority')->get();
        @endphp
        @foreach($categories as $category)
        <a class="mx-2" href="" >{{$category->categoryname}}</a>
        @endforeach
        @auth
        <a class="mx-2" href="">Welcome, {{auth()->user()->name}}</a>
        <a href="{{route('cart')}}" class="mx-2"><i class="ri-shopping-cart-fill"></i></a>
        <form action="/logout" method="POST" class="inline" >
            @csrf
            <button type="submit"><i class="ri-logout-circle-r-line"></i></button>
        </form>
        @else
        <a class="mx-2" href="/login" >Login</a>
        @endauth
       </div>
    </nav>
   @yield('content')
   <footer>
    <div class="bg-gradient-to-r from-blue-800 to-indigo-700 text-white text-center text-sm py-4">
        <p class="font-bold text-lg mb-2">© 2023. All rights reserved.</p>
        <p class="text-gray-300">Mini shop-Ecommerce</p>
    </div>
</footer>

</body>
</html>