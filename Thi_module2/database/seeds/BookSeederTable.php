<?php

use Illuminate\Database\Seeder;
use App\Book;

class BookSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $book = new Book();
        $book->name = 'Cach Song';
        $book->author = 'Songoku';
        $book->description = " Sach hay ve cach song cua mot tac gia nguoi Nhat.";
        $book->xb = "1999/02/02";
        $book->quantity = 5;
        $book->save();

        $book = new Book();
        $book->name = 'Bay Vien Ngoc Rong';
        $book->author = 'Songohan';
        $book->description = " Truyen tranh bay vien ngoc rong";
        $book->xb = "1988/05/05";
        $book->quantity = 5;
        $book->save();
    }
}
