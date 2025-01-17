@extends('layouts.app')
@section('content')
<div class="max-w-lg mx-auto mt-10 bg-white p-6 shadow-lg rounded-md">
    <h2 class="text-xl font-bold mb-6 text-gray-700">Product Details</h2>
    <p><strong class="text-gray-600">Product ID:</strong> {{ $product->product_id }}</p>
    <p><strong class="text-gray-600">Name:</strong> {{ $product->name }}</p>
    <p><strong class="text-gray-600">Description:</strong> {{ $product->description }}</p>
    <p><strong class="text-gray-600">Price:</strong> {{ $product->price }}</p>
    <p><strong class="text-gray-600">Stock:</strong> {{ $product->stock }}</p>
    <div class="mt-4">
        <p><strong class="text-gray-600">Image:</strong></p>
        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-full object-cover rounded-md">
    </div>
    <a href="{{ url('/products') }}" class="mt-4 inline-block bg-indigo-500 text-white py-2 px-4 rounded-md hover:bg-indigo-600">Back to Products</a>
</div>
@endsection
