<?php

namespace App\Http\Controllers;

use function foo\func;
use Illuminate\Http\Request;

//use App\Http\Controllers\Controller;
use App\Book;
use App\Author;
class BookController extends Controller
{
    public function listBooks()
    {

        $books = Book::all();
        return view('books.listBooks', compact('books'));
    }

    public function createBooks()
    {
        $authors = Author::all();
        return view('books.createBooks',compact('authors'));
    }

    public function do_createBooks()
    {
        $attribute = request()->all();
        Book::create($attribute);
        return redirect('books/createBook');
    }

    public function deleteBooks(Book $books)
    {
        $books->delete();
        return redirect('/books/books');
    }

    public function editBooks(Book $books, Author $authors)
    {
        $authors = Author::all();
        return view('/books.editBooks', compact('books','authors'));
    }

    public function storeBooks(Book $books)
    {
        $attribute = request()->all();
        $books->update($attribute);
        return redirect('/books/books');
    }
}
