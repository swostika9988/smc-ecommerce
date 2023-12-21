@extends('layouts.app')
@section('content')
<h2 class="font-bold text-3xl ">Categories</h2>
<hr class="h-1 bg-violet-500">

<div class="text-right my-5">
<a href="{{ route('category.create')}}" class="bg-green-800 text-white px-4 py-2 rounded">Add Category</a>
</div>

<table class="mt-5 w-full text-center">
    <tr>
        <th class="border border-gray-500 p-2 bg-gray-300">Order</th>
        <th class="border border-gray-500 p-2 bg-gray-300">Category Name</th>
        <th class="border border-gray-500 p-2 bg-gray-300">Action</th>
    </tr>
    <tr>
        <td class=" border p-2 border-gray-300">1</td>
        <td class=" border p-2 border-gray-300">Electronics</td>
        <td class=" border p-2 border-gray-300">
            <a href="" class="bg-blue-600 text-white px-2 py-1 rounded mx-1">Edit</a>
            <a href="" class="bg-red-600 text-white px-2 py-1 rounded mx-1 ">Delete</a>
        </td>
    </tr>
    <tr>
        <td class=" border p-2 border-gray-300">2</td>
        <td class=" border p-2 border-gray-300">Furniture</td>
        <td class=" border p-2 border-gray-300">
            <a href="" class="bg-blue-600 text-white px-2 py-1 rounded mx-1">Edit</a>
            <a href="" class="bg-red-600 text-white px-2 py-1 rounded mx-1 ">Delete</a>
        </td>
    </tr>
</table>
@endsection