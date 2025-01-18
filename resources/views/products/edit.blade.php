@extends('layouts.app')
@section('content')
<div class="max-w-md mx-auto mt-10 bg-white p-6 shadow-lg rounded-md">
    <h2 class="text-xl font-bold mb-6 text-gray-700">Edit Product</h2>
    <form method="POST" action="{{ url('/products/' . $product->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block text-gray-700">Name:</label>
            <input type="text" name="name" value="{{ old('name', $product->name) }}" 
                   class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:ring-indigo-300" required>
            @error('name')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Description:</label>
            <textarea name="description" 
                      class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:ring-indigo-300">{{ old('description', $product->description) }}</textarea>
            @error('description')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Price:</label>
            <input type="number" step="0.01" name="price" value="{{ old('price', $product->price) }}" 
                   class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:ring-indigo-300" required>
            @error('price')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Stock:</label>
            <input type="number" name="stock" value="{{ old('stock', $product->stock) }}" 
                   class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:ring-indigo-300">
            @error('stock')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label class="block text-gray-700">Image:</label>
            <input type="file" name="image" class="w-full">
            <p class="text-gray-500 text-sm mt-1">Leave empty if you do not want to change the image.</p>
            @error('image')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" 
                class="w-full bg-indigo-500 text-white py-2 rounded-md hover:bg-indigo-600 cursor-pointer">Update</button>
    </form>
</div>
@endsection
