<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function listCategory()
    {
    	return view ('backend.category');
    }
}
