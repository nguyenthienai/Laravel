<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AddBookRequest;
use App\Book;
use Session;

class BookController extends Controller
{
	public function index()
	{
		$books = Book::paginate(5);
		return view('index', compact('books'));
	}

	public function createBooks()
	{
		return view('create');
	}

	public function detailBooks(Book $book)
	{
		return view('detail', compact('book'));
	}

	public function docreateBooks(AddBookRequest $request)
	{
		$attribute = request()->all();
		Book::create($attribute);
		Session::flash('success','Create new book successful.');
		return back();
	}

	public function deleteBooks(Book $book)
	{
		$book->delete();
		Session::flash('success', 'Đã xóa thành công!');
		return back();
	}

	public function searchBookName()
	{   
		$findNameBook = request('findNameBook');
		$books = Book::where('name','like','%'. $findNameBook .'%')->paginate(5);
		return view('search', compact('books','findNameBook'));
	}
}
