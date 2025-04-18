<?php

use App\Http\Controllers\BooksController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/books/create', [BooksController::class, 'create'])->name('books.create');

Route::post('/books/store', [BooksController::class, 'store'])->name('books.store');

Route::get('/books/read', [BooksController::class, 'read'])->name('books.read');

Route::put('/books/update/{book}', [BooksController::class, 'update'])->name('books.update');

Route::get('/books/delete/{book}', [BooksController::class, 'delete'])->name('books.delete');
