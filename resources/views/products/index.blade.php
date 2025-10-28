@extends('layouts.app')

@section('content')
<h1 class="text-3xl font-bold mb-4">Products</h1>

<!-- Search -->
<form method="GET" action="{{ route('products.index') }}" class="mb-6 flex gap-2">
    <input type="text" name="search" value="{{ $search ?? '' }}" placeholder="Search by name" class="input input-bordered flex-1">
    <button type="submit" class="btn btn-primary hover:p-2 hover:rounded-2xl hover:text-white  hover:bg-green-600">Search</button>
</form>

@if(session('success'))
<div class="alert alert-success mb-4">{{ session('success') }}</div>
@endif

<!-- Product Grid -->
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
    @forelse($products as $product)
    <div class="card bg-base-100 shadow-xl p-4 flex flex-col justify-between">
        <div>
            <h2 class="font-bold text-lg">{{ $product->name }}</h2>
            <p class="mt-1">{{ $product->description }}</p>
            <p class="mt-2 font-semibold">Price: ${{ $product->price }}</p>
        </div>
        <div class="mt-4 flex gap-2">
            <a href="{{ route('products.edit', $product) }}" class="btn btn-sm btn-warning flex-1">Update</a>
            <form action="{{ route('products.destroy', $product) }}" method="POST" onsubmit="return confirm('Are you sure?');" class="flex-1">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-error w-full hover:p-2 hover:rounded-2xl hover:text-white  hover:bg-red-600">Delete</button>
            </form>
        </div>
    </div>
    @empty
    <p class="col-span-full text-center text-gray-500">No products found.</p>
    @endforelse
</div>
@endsection