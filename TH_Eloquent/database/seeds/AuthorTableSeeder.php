<?php

use Illuminate\Database\Seeder;
use App\Author;
class AuthorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $author = new Author();
        $author->name = 'Tokuda';
        $author->email = 'tokuda@bjs.com';
        $author->country = 'Japan';
        $author->save();

        $author = new Author();
        $author->name = 'Ozawa';
        $author->email = 'Ozawa@bjs.com';
        $author->country = 'Japan';
        $author->save();
    }
}
