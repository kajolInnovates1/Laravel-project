@extends('layouts.app')

@section('title', 'Add Book')

@section('content')
<div class="max-w-xl mx-auto mt-10">
    <div class="bg-white shadow-xl rounded-xl p-8">
        <h1 class="text-3xl font-bold mb-6 text-center text-green-700">Add New Book</h1>

        <form action="{{ route('books.store') }}" method="POST" class="space-y-6">
            @csrf

            <!-- Title -->
            <div>
                <label class="label">
                    <span class="label-text font-semibold text-gray-700">Title</span>
                </label>
                <input type="text" name="title" value="{{ old('title') }}" placeholder="Enter book title"
                    class="input input-bordered w-full focus:ring-2 focus:ring-green-300" required>
                @error('title')
                <p class="text-error text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Author -->
            <div>
                <label class="label">
                    <span class="label-text font-semibold text-gray-700">Author</span>
                </label>
                <input type="text" name="author" value="{{ old('author') }}" placeholder="Enter author name"
                    class="input input-bordered w-full focus:ring-2 focus:ring-green-300" required>
                @error('author')
                <p class="text-error text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Published Date -->
            <div>
                <label class="label">
                    <span class="label-text font-semibold text-gray-700">Published Date</span>
                </label>
                <input type="date" name="published_date" value="{{ old('published_date') }}"
                    class="input input-bordered w-full focus:ring-2 focus:ring-green-300">
                @error('published_date')
                <p class="text-error text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Genre -->
            <div>
                <label class="label">
                    <span class="label-text font-semibold text-gray-700">Genre</span>
                </label>
                <input type="text" name="genre" value="{{ old('genre') }}" placeholder="Enter genre"
                    class="input input-bordered w-full focus:ring-2 focus:ring-green-300">
                @error('genre')
                <p class="text-error text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Buttons -->
            <div class="flex flex-col md:flex-row justify-center gap-4 mt-6">
                <button type="submit"
                    class="btn btn-success px-6 py-2 text-black font-semibold rounded-lg hover:bg-green-600 transition duration-300">
                    Save Book
                </button>
                <a href="{{ route('books.index') }}"
                    class="btn btn-outline px-6 py-2 font-semibold rounded-lg hover:bg-gray-100 transition duration-300">
                    Cancel
                </a>
            </div>
        </form>
    </div>
</div>
@endsection