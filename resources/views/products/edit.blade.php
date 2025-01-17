@extends('layouts.app')
@section('content')
<div class="max-w-md mx-auto mt-10 bg-white p-6 shadow-lg rounded-md">
    <h2 class="text-xl font-bold mb-6 text-gray-700">Edit Product</h2>
    <form method="POST" action="{{ url('/products/' . $product->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label class="block text-gray-700">Name:</label>
            <input type="text" name="name" value="{{ $product->name }}" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:ring-indigo-300" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Description:</label>
            <textarea name="description" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:ring-indigo-300">{{ $product->description }}</textarea>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Price:</label>
            <input type="text" name="price" value="{{ $product->price }}" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:ring-indigo-300" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Stock:</label>
            <input type="text" name="stock" value="{{ $product->stock }}" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:ring-indigo-300">
        </div>
        <div class="mb-6">
            <label class="block text-gray-700">Image:</label>
            <input type="file" name="image" class="w-full">
        </div>
        <button type="submit" class="w-full bg-indigo-500 text-white py-2 rounded-md hover:bg-indigo-600">Update</button>
    </form>
</div>
@endsection
