@extends('layouts.app')
@section('content')
<h1>Edit Product</h1>
<form method="POST" action="{{ url('/products/' . $product->id) }}">
    @csrf
    @method('PUT')
    <label>Name:</label>
    <input type="text" name="name" value="{{ $product->name }}" required><br>
    <label>Description:</label>
    <textarea name="description">{{ $product->description }}</textarea><br>
    <label>Price:</label>
    <input type="text" name="price" value="{{ $product->price }}" required><br>
    <label>Stock:</label>
    <input type="text" name="stock" value="{{ $product->stock }}"><br>
    <label>Image URL:</label>
    <input type="text" name="image" value="{{ $product->image }}" required><br>
    <button type="submit">Update</button>
</form>
@endsection