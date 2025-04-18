<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Books;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class BooksController extends Controller
{
    public function create(){
        return view('books.create');
    }

    public function store (Request $request){
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'genre' => 'required|string|max:255',
            'description' => 'required|string',
            'published_year' => 'required|integer|min:1900|max:' . date('Y'),
            'isbn' => 'required|string|unique:books,isbn|max:13',
        ]);

        $book = new Books(); 
        $book->title = $request->title;
        $book->author = $request->author;
        $book->genre = $request->genre;
        $book->description = $request->description;
        $book->published_year = $request->published_year;
        $book->isbn = $request->isbn;
        $book->save();

        return redirect()->back()->with('success', 'Book created successfully!');
    }

    public function read(){
        $books = Books::all();
        return view('books.read', compact('books'));
    }

    public function update(Request $request, $book){
        $book = Books::findOrFail($book);
        if (!$book) {
            return redirect()->back()->with('error', 'Book not found!');
        }
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'genre' => 'required|string|max:255',
            'description' => 'required|string',
            'published_year' => 'required|integer|min:1900|max:' . date('Y'),       
        ]);

        $book->update($request->only([
            'title',
            'author',
            'genre',
            'description',
            'published_year',

        ]));

        return redirect()->back()->with('success', 'Book updated successfully!');

    }

    public function delete($book){
        $book = Books::findOrFail($book);
        if ($book){
            $book->delete();
            return redirect()->back()->with('success', 'Book deleted successfully!');
        } else {
            return redirect()->back()->with('error', 'Book not found!');
        }
    }
        
    
}
