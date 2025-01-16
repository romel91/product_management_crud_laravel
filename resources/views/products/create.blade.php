@extends('layouts.app')
@section('content')
<h1>Create Product</h1>
<form method="POST" action="{{ url('/products') }}">
    @csrf
    <label>Product ID:</label>
    <input type="text" name="product_id" required><br>
    <label>Name:</label>
    <input type="text" name="name" required><br>
    <label>Description:</label>
    <textarea name="description"></textarea><br>
    <label>Price:</label>
    <input type="text" name="price" required><br>
    <label>Stock:</label>
    <input type="text" name="stock"><br>
    <label>Image URL:</label>
    <input type="text" name="image" required><br>
    <button type="submit">Create</button>
</form>
@endsection