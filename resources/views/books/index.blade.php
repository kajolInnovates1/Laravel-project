@extends('layouts.app')

@section('title', 'Books')

@section('content')
<div class="mb-6 flex flex-col md:flex-row justify-between items-center gap-4">
    <!-- Search Form -->
    <form action="{{ route('books.index') }}" method="GET" class="flex gap-2 w-full md:w-1/2">
        <input type="text" name="search" value="{{ old('search', $search) }}" placeholder="Search by title..."
            class="input input-bordered w-full" />
        <button type="submit" class="btn btn-success px-6 hover:bg-green-600 transition duration-300">Search</button>
        <a href="{{ route('books.index') }}" class="btn btn-outline px-6 hover:bg-gray-100 transition duration-300">Clear</a>
    </form>

    <!-- Add Book Button -->
    <a href="{{ route('books.create') }}" class="btn btn-success mt-2 md:mt-0 px-6 hover:bg-green-600 transition duration-300">
        Add New Book
    </a>
</div>

@if($books->isEmpty())
<div class="text-center text-gray-500 py-12">
    No books found. <a href="{{ route('books.create') }}" class="link text-green-600 hover:underline">Add a book</a>.
</div>
@else
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
    @foreach($books as $book)
    <div class="card bg-white shadow-md hover:shadow-xl transition rounded-lg overflow-hidden">
        <div class="card-body flex flex-col justify-between">
            <div>
                <h2 class="card-title text-xl font-semibold text-green-700">{{ $book->title }}</h2>
                <p class="text-sm text-gray-600">By {{ $book->author }}</p>
                <p class="text-sm mt-2">{{ $book->genre ? 'Genre: '.$book->genre : '' }}</p>
                <p class="text-sm text-gray-500 mt-1">
                    Published:
                    {{ $book->published_date ? \Carbon\Carbon::parse($book->published_date)->format('F d, Y') : 'N/A' }}
                </p>
            </div>

            <div class="card-actions justify-end mt-4 flex flex-wrap gap-2">
                <a href="{{ route('books.show', $book->id) }}" class="btn btn-outline btn-sm hover:bg-gray-100">Details</a>
                <a href="{{ route('books.edit', $book->id) }}" class="btn btn-success btn-sm hover:bg-green-600">Update</a>

                <form action="{{ route('books.destroy', $book->id) }}" method="POST" onsubmit="return confirm('Delete this book?');" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-error btn-sm hover:bg-red-600">Delete</button>
                </form>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endif
@endsection