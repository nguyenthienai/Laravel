<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class HomeController extends Controller
{
    public function index()
    {
    	$book = Book::all();
        return view('index', compact('book'));
    }
}
