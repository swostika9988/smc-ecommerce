@extends('layouts.app')
@section('content')
<h2 class="font-bold text-3xl ">Dashboard</h2>
<hr class="h-1 bg-violet-500">
<div class="grid grid-cols-3 gap-10 mt-10">
    <div class="bg-red-900 py-5 px-4 flex justify-between text-white rounded-lg shadow-orange-100">
     <p class="text-xl ">Total Products</p>
     <h2 class="text-5xl font-bold">254</h2>
    </div>
    <div class="bg-blue-800 py-5 px-4 flex justify-between text-white rounded-lg shadow-orange-100">
     <p class="text-xl ">New Orders</p>
     <h2 class="text-5xl font-bold">54</h2>
    </div>
    <div class="bg-green-800 py-5 px-4 flex justify-between text-white rounded-lg shadow-orange-100">
     <p class="text-xl ">Total Revenue</p>
     <h2 class="text-5xl font-bold">4565</h2>
    </div>
</div>
@endsection
