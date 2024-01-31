@extends('layouts.app')
@section('content')
@if(session('success'))
<div id="message" class="fixed top-5 right-0">
<div class="bg-red-900 text-white text-xl px-6 py-2 ">
    <p>{{session('success')}}</p>
</div>
</div>
<script>
    $('#message').delay(1500).slideUp(500);
</script>
@endif
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
    @foreach($categories as $category)
    <tr>
       
        
        <td class="border p-2 border-gray-300">{{$category->priority}}</td>
        <td class="border p-2 border-gray-300">{{$category->categoryname}}</td>
        <td class="border p-2 border-gray-300">
        <a  class="bg-blue-600 text-white px-2 py-1 rounded mx-1"  href="{{route('category.edit',$category->id)}}">Edit</a>
        <a href="{{route('category.delete',$category->id)}}" onclick="return confirm('Are you sure to delete?');" class="bg-red-600 text-white px-2 py-1 rounded mx-1" >Delete</a>
    </tr>
    @endforeach
    
</table>
@endsection