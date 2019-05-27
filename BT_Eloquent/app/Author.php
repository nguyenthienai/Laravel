<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $author = ['name','email','country'];
    protected $fillable = ['name','email','country'];
}
