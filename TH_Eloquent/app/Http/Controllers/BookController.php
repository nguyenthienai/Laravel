<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App\Book;
use App\Author;

class BookController extends Controller
{
    public function listBooks()
    {

       // $books = Book::all();
        $book = Book::paginate(5);
        // dd($books);
        return view('books.listBooks', compact('book'));
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
        Session::flash('message','Create new book successful.');
        return redirect('books/createBook');
    }

    public function deleteBooks(Book $book)
    {
        $book->delete();
        return redirect('/books/books');
    }

    public function editBooks(Book $book)
    {
        $authors = Author::all();
        return view('/books.editBooks', compact('book','authors'));
    }

    public function storeBooks(Book $book)
    {
        $attribute = request()->all();
        $book->update($attribute);
        Session::flash('message','Edit book successful.');
        return redirect('/books/books');
    }

    public function fillterBookAuthorName($authorid)
    {
        $book = Book::where('author_id',$authorid)->get();
        return view('books.fillterBookAuthorName',compact('book'));
    }

    public function findBookName()
    {   
        $findNameBook = request('findNameBook');
        $book = Book::where('name','like','%'. $findNameBook .'%')->get();
        return view('books.findBookName', compact('book','findNameBook'));
    }
}
