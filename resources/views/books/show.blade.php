@extends('layouts.app')

@section('title', $book->title)

@section('content')
<div class="max-w-3xl mx-auto">
    <div class="card bg-base-100 shadow-lg p-6">
        <div class="flex justify-between items-start">
            <div>
                <h1 class="text-3xl font-bold">{{ $book->title }}</h1>
                <p class="text-lg text-gray-700 mt-1">By {{ $book->author }}</p>
                <p class="text-sm text-gray-500 mt-2">Published: {{ $book->published_date ? $book->published_date->format('F d, Y') : 'N/A' }}</p>
                <p class="mt-4"><strong>Genre:</strong> {{ $book->genre ?? 'N/A' }}</p>
            </div>

            <div class="flex flex-col gap-2">
                <a href="{{ route('books.edit', $book->id) }}" class="btn btn-success">Update</a>

                <form action="{{ route('books.destroy', $book->id) }}" method="POST" onsubmit="return confirm('Delete this book?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-error">Delete</button>
                </form>
            </div>
        </div>

        <div class="mt-6">
            <a href="{{ route('books.index') }}" class="link">← Back to list</a>
        </div>
    </div>
</div>
@endsection