<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMC Ecommerce</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>
    <nav class="flex sticky top-0 justify-between shadow px-20 py-4 items-center bg-orange-500 ">
       <img src="https://icms-image.slatic.net/images/ims-web/e6ac6883-1158-4663-bda4-df5a1aa066e5.png" class="w-24" alt=""> 
       <div class="text-white font-bold">
        <a class="mx-2" href="/" >Home</a>
        @php
        $categories = App\Models\Category::orderBy('priority')->get();
        @endphp
        @foreach($categories as $category)
        <a class="mx-2" href="" >{{$category->categoryname}}</a>
        @endforeach
        <a class="mx-2" href="/login" >Login</a>
       </div>
    </nav>
   @yield('content')
    <footer>
        <div class="bg-blue-800 text-white text-center text-sm py-2">
<p>Copyright &copy: 2023.All rights reserved.
    SMC-Ecommerce
</p>
        </div>
    </footer>
</body>
</html>