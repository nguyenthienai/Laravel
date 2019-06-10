<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Comment;

class CommentController extends Controller
{
    public function listComment()
    {
    	$comments = Comment::paginate(6);
    	return view ('backend.comment', compact('comments'));
    }

     public function createComment()
    {
    	
    }

     public function docreateComment()
    {
    	
    }

     public function editComment()
    {
    	
    }

     public function delelteComment()
    {
    	
    }
}
