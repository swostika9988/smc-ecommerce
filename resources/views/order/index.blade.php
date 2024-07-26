@extends('layouts.app')
@section('content')
<h1 class="font-bold text-3xl text-blue-500">Orders</h1>
<hr class="h-1 bg-red-500">
<table class="w-full">
    <tr>
        <th class="border p-2">S.N.</th>
        <th class="border p-2">Product Picture</th>
        <th class="border p-2">Product Name</th>
        <th class="border p-2">Customer Name</th>
        <th class="border p-2">Customer Email</th>
        <th class="border p-2">Price</th>
        <th class="border p-2">Quantity</th>
        <th class="border p-2">Total</th>
        <th class="border p-2">Status</th>
        <th class="border p-2">Action</th>

        
    </tr>
    @foreach($orders as $order)
    <td class="border p-2">{{$loop->iteration}}</td>
    <td class="border p-2">
        <img src="{{asset('images/products/'.$order->product->photopath)}}" alt="" class="h-16">
    </td>
    <td class="border p-2">{{$order->product->name}}</td>
    <td class="border p-2">{{$order->user->name}}</td>
    <td class="border p-2">{{$order->user->email}}</td>
    <td class="border p-2">{{$order->price}}</td>
    <td class="border p-2">{{$order->quantity}}</td>
    <td class="border p-2">{{$order->price*$order->quantity}}</td>
    <td class="border p-2">{{$order->status}}</td>
    <td class="border p-2 grid gap-2">
        <a href="" class="bg-blue-500 text-white px-2 py-1 rounded-lg text-center">Pending</a>
        <a href="" class="bg-yellow-500 text-white px-2 py-1 rounded-lg text-center">Processing</a>
        <a href="" class="bg-red-500 text-white px-2 py-1 rounded-lg text-center">Delivered</a>
    </td>

    
    @endforeach

    
</table>
@endsection