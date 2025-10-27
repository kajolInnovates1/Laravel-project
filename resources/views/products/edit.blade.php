@extends('layouts.app')

@section('content')
<h1 class="text-3xl font-bold mb-6">Edit Product</h1>

<form action="{{ route('products.update', $product) }}" method="POST" class="space-y-4 max-w-lg">
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{ $product->name }}" class="input input-bordered w-full" required>
    <textarea name="description" class="textarea textarea-bordered w-full">{{ $product->description }}</textarea>
    <input type="number" step="0.01" name="price" value="{{ $product->price }}" class="input input-bordered w-full" required>
    <button type="submit" class="btn btn-primary">Update Product</button>
</form>
@endsection