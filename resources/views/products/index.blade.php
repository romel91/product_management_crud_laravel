@extends('layouts.app')

@section('content')
<table class="table-auto w-full text-left border-collapse border border-gray-400">
    <thead>
        <tr>
            <th class="border border-gray-400 px-4 py-2">Image</th>
            <th class="border border-gray-400 px-4 py-2">
                <a href="{{ url('/products?sort=name&direction=' . (request('direction') === 'asc' ? 'desc' : 'asc')) }}" class="text-blue-500 hover:underline">
                    Name
                    @if (request('sort') === 'name')
                        @if (request('direction') === 'asc') ▲ @else ▼ @endif
                    @endif
                </a>
            </th>
            <th class="border border-gray-400 px-4 py-2">
                <a href="{{ url('/products?sort=description&direction=' . (request('direction') === 'asc' ? 'desc' : 'asc')) }}" class="text-blue-500 hover:underline">
                    Description
                    @if (request('sort') === 'description')
                        @if (request('direction') === 'asc') ▲ @else ▼ @endif
                    @endif
                </a>
            </th>
            <th class="border border-gray-400 px-4 py-2">Price</th>
            <th class="border border-gray-400 px-4 py-2">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
        <tr>
            <td class="border border-gray-400 px-4 py-2">
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" width="50">
            </td>
            <td class="border border-gray-400 px-4 py-2">{{ $product->name }}</td>
            <td class="border border-gray-400 px-4 py-2">{{ $product->description }}</td>
            <td class="border border-gray-400 px-4 py-2">{{ $product->price }}</td>
            <td class="border border-gray-400 px-4 py-2">
                <a href="{{ url('/products/' . $product->id) }}" class="text-blue-500 hover:underline">View</a>
                <a href="{{ url('/products/' . $product->id . '/edit') }}" class="text-green-500 hover:underline">Edit</a>
                <form method="POST" action="{{ url('/products/' . $product->id) }}" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-500 hover:underline">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
