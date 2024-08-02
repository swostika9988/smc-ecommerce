@extends('layouts.master')
@section('content')
<h1 class="text-4xl font-bold text-center my-10">
    Latest Products
</h1>
<diV class="grid grid-cols-4 gap-10 pb-10 px-24">
    @foreach($products as $product)
    <a href="{{route('viewproduct',$product->id)}}" class="border p-4 rounded shadow hover:shadow-md hover:translate-y-1 duration-500">
        <img src="{{asset('images/products/'.$product->photopath)}}" class="w-full h-60 " alt="">
        <h2 class="text-xl font-bold my-2">{{$product->name}}</h2>
        <p class="text-gray-700 line-clamp-2 ">{{$product->description}}</p>
        <p class="text-gray-700 font-bold mt-2">Rs {{$product->price}}</p>
    </a>
@endforeach
</diV>
@endsection