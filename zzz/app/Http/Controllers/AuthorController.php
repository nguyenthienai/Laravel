<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;
use function Sodium\compare;

class AuthorController extends Controller
{
    public function listAuthors()
    {
        $authors = Author::all();
        return view('authors.listAuthors',compact('authors'));
    }

    public function createAuthors()
    {
        return view('authors.createAuthors');
    }

    public function do_createAuthors()
    {
        $attribute = request()->all();
        Author::create($attribute);
        return redirect('/create');
    }

    public function editAuthors(Author $authors)
    {
        return view('authors.editAuthors', compact('authors'));
    }

    public function storeAuthors(Author $authors)
    {
        $attribute = request()->all();
        $authors->update($attribute);
        return redirect('/authors');
    }

    public function deleteAuthors(Author $authors)
    {
        $authors->delete();
        return redirect('/authors');
    }
}
