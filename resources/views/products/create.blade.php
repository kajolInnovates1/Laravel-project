@extends('layouts.app')

@section('content')
<h1 class="text-3xl font-bold mb-6">Add Product</h1>

<form action="{{ route('products.store') }}" method="POST" class="space-y-4 max-w-lg">
    @csrf
    <input type="text" name="name" placeholder="Product Name" class="input input-bordered w-full" required>
    <textarea name="description" placeholder="Description" class="textarea textarea-bordered w-full"></textarea>
    <input type="number" step="0.01" name="price" placeholder="Price" class="input input-bordered w-full" required>
    <button type="submit" class="btn btn-primary hover:p-2 hover:rounded-2xl hover:text-white  hover:bg-green-600">Add Product</button>
</form>
@endsection