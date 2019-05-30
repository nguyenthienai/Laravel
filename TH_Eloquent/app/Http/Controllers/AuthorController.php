<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;
use function Sodium\compare;

class AuthorController extends Controller
{
    public function listAuthors()
    {
        $author = Author::paginate(5);
        return view('authors.listAuthors',compact('author'));
    }

    public function createAuthors()
    {
        return view('authors.createAuthors');
    }

    public function do_createAuthors()
    {
        $attribute = request()->all();
        Author::create($attribute);
        return redirect('authors/create');
    }

    public function editAuthors(Author $author)
    {
        return view('authors.editAuthors', compact('author'));
    }

    public function storeAuthors(Author $author)
    {
        $attribute = request()->all();
        $author->update($attribute);
        return redirect('/authors/authors');
    }

    public function deleteAuthors(Author $author)
    {
        $author->delete();
        return redirect('/authors/authors');
    }

     public function fillterAuthorCountry($country)
    {
        $author = Author::where('country',$country)->get();
        return view('authors.authorCountry',compact('author','country'));
    }

    public function findAuthorName()
    {   
        $findAuthorName = request('findNameAuthor');
        $author = Author::where('name',$findAuthorName)->get();
        return view('authors.findAuthorName', compact('author','findAuthorName'));
    }
}
