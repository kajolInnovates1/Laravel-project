<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    // Show grid with optional search
    public function index(Request $request)
    {
        $search = $request->query('search');
        $books = Book::when($search, function ($q, $search) {
            return $q->where('title', 'like', "%{$search}%");
        })
            ->latest()
            ->get();

        return view('books.index', compact('books', 'search'));
    }

    // show add form
    public function create()
    {
        return view('books.create');
    }

    // store new book
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'published_date' => 'nullable|date',
            'genre' => 'nullable|string|max:255',
        ]);

        $book = Book::create($data);
        return redirect()->route('books.show', $book->id)
            ->with('success', 'Book added successfully.');
    }

    //Database Seeeder dekhe asbo 
    // How to work seeder 
    //

    // details page
    public function show(Book $book)
    {
        return view('books.show', compact('book'));
    }

    // edit form
    public function edit(Book $book)
    {
        return view('books.edit', compact('book'));
    }

    // update
    public function update(Request $request, Book $book)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'published_date' => 'nullable|date',
            'genre' => 'nullable|string|max:255',
        ]);

        $book->update($data);

        return redirect()->route('books.show', $book->id)
            ->with('success', 'Book updated successfully.');
    }

    // delete
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('books.index')
            ->with('success', 'Book deleted successfully.');
    }
}


