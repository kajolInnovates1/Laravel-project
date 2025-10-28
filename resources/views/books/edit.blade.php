@extends('layouts.app')

@section('title', 'Edit Book')

@section('content')
<div class="max-w-2xl mx-auto">
    <h1 class="text-2xl font-bold mb-4">Edit Book</h1>

    <form action="{{ route('books.update', $book->id) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label class="label"> <span class="label-text">Title</span></label>
            <input type="text" name="title" value="{{ old('title', $book->title) }}" class="input input-bordered w-full" required>
            @error('title') <p class="text-error text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="label"> <span class="label-text">Author</span></label>
            <input type="text" name="author" value="{{ old('author', $book->author) }}" class="input input-bordered w-full" required>
            @error('author') <p class="text-error text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="label"> <span class="label-text">Published Date</span></label>
            <input type="date" name="published_date" value="{{ old('published_date', optional($book->published_date)->format('Y-m-d')) }}" class="input input-bordered w-full">
            @error('published_date') <p class="text-error text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="label"> <span class="label-text">Genre</span></label>
            <input type="text" name="genre" value="{{ old('genre', $book->genre) }}" class="input input-bordered w-full">
            @error('genre') <p class="text-error text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <div class="flex gap-3">
            <button class="btn btn-success">Update Book</button>
            <a href="{{ route('books.show', $book->id) }}" class="btn">Cancel</a>
        </div>
    </form>
</div>
@endsection