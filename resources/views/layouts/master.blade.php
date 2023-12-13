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
    <nav class="flex sticky top-0 justify-between shadow px-20 py-4 items-center bg-slate-300 ">
       <img src="https://smc.edu.np/wp-content/uploads/2023/11/smc-logo-circle.png" class="w-24" alt=""> 
       <div>
        <a class="mx-2" href="" >Home</a>
        <a class="mx-2" href="" >About</a>
        <a class="mx-2" href="" >Contact</a>
        <a class="mx-2" href="" >Login</a>
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