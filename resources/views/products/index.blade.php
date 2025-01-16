@extends('layouts.app')
@section('content')
<form method="GET" action="{{ url('/products') }}">
    <input type="text" name="search" placeholder="Search products...">
    <button type="submit">Search</button>
</form>
<table>
    <thead>
        <tr>
            <th><a href="{{ url('/products?sort=name&order=' . (request('order') === 'asc' ? 'desc' : 'asc')) }}">Name</a></th>
            <th><a href="{{ url('/products?sort=price&order=' . (request('order') === 'asc' ? 'desc' : 'asc')) }}">Price</a></th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
        <tr>
            <td>{{ $product->name }}</td>
            <td>{{ $product->price }}</td>
            <td>
                <a href="{{ url('/products/' . $product->id) }}">View</a>
                <a href="{{ url('/products/' . $product->id . '/edit') }}">Edit</a>
                <form method="POST" action="{{ url('/products/' . $product->id) }}" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{ $products->links() }}
@endsection
