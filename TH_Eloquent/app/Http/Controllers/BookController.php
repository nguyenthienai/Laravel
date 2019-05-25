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
        return view('/books.createBooks',compact('authors'));
    }

    public function do_createBooks()
    {
        $attribute = request()->all();
        Book::create($attribute);
        return redirect('/createBook');
    }

    public function deleteBooks(Book $books)
    {
        $books->delete();
        return redirect('/books');
    }

    public function editBooks(Book $books)
    {


        return view('/books.editBooks', compact('books'));
    }
}
