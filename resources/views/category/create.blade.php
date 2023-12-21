@extends('layouts.app')
@section('content')
<h2 class="font-bold text-3xl ">Create Category</h2>
<hr class="h-1 bg-violet-500">

<form action="" class="mt-5">
      <input type="text" placeholder="Category Name" class="block w-full rounded border-gray-500 my-4 ">
      <input type="text" placeholder="Priority " class="block w-full rounded border-gray-500 my-4 ">
      <div class="flex justify-center">
        <input type="submit" value="Add Category" class="bg-blue-600 text-white px-2 py-1 rounded mx-2">
        <a href="{{ route('category.index') }}" class="bg-red-600 text-white px-12 py-1 rounded mx-2">Exit</a>
      </div>
</form>
@endsection