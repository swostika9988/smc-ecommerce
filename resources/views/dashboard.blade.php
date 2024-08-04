@extends('layouts.app')
@section('content')
<h2 class="font-bold text-3xl ">Dashboard</h2>
<hr class="h-1 bg-violet-500">
<div class="grid grid-cols-3 gap-10 mt-10">
    <div class="bg-red-900 py-5 px-4 flex justify-between text-white rounded-lg shadow-orange-100">
     <p class="text-xl ">Total Products</p>
     <h2 class="text-5xl font-bold">{{$totalproducts}}</h2>
    </div>
    <div class="bg-blue-800 py-5 px-4 flex justify-between text-white rounded-lg shadow-orange-100">
     <p class="text-xl ">Total Orders</p>
     <h2 class="text-5xl font-bold">{{$totalorders}}</h2>
    </div>
    <div class="bg-green-800 py-5 px-4 flex justify-between text-white rounded-lg shadow-orange-100">
     <p class="text-xl ">Pending Orders</p>
     <h2 class="text-5xl font-bold">{{$pendingorders}}</h2>
    </div>
    <div class="bg-purple-500 py-5 px-4 flex justify-between text-white rounded-lg shadow-orange-100">
        <p class="text-xl ">Processing Orders</p>
        <h2 class="text-5xl font-bold">{{$processingorders}}</h2>
       </div>
    <div class="bg-red-500 py-5 px-4 flex justify-between text-white rounded-lg shadow-orange-100">
        <p class="text-xl ">Delivered Orders</p>
        <h2 class="text-5xl font-bold">{{$deliveredorders}}</h2>
       </div>
    
    <div class="bg-gray-500 py-5 px-4 flex justify-between text-white rounded-lg shadow-orange-100">
        <p class="text-xl ">Total Sales</p>
        <h2 class="text-5xl font-bold">{{$totalsales}}</h2>
       </div>
    
</div>
@endsection
