<?php

use Illuminate\Database\Seeder;
use App\Contact;

class contactSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $contact = new Contact();
       $contact->name='Hoàng';
       $contact->lastName='Phan';
       $contact->phone='123456789';
       $contact->email='phanthienhoang95@gmail.com';
       $contact->address='28/nguyễn trì phương';
       $contact->save();
       $contact = new Contact();
       $contact->name='ái';
       $contact->lastName='nguyễn';
       $contact->phone='123456789';
       $contact->email='nguyenthienai@gmail.com';
       $contact->address='28/nguyễn trì phương';
       $contact->save();
       $contact = new Contact();
       $contact->name='bá';
       $contact->lastName='khá';
       $contact->phone='123456789';
       $contact->email='bakhaban@gmail.com';
       $contact->address='28/nguyễn trì phương';
       $contact->save();
       $contact = new Contact();
       $contact->name='thành';
       $contact->lastName='nguyễn';
       $contact->phone='123456789';
       $contact->email='aaaaaa@gmail.com';
       $contact->address='28/nguyễn trì phương';
       $contact->save();
       $contact = new Contact();
       $contact->name='rin';
       $contact->lastName='lê';
       $contact->phone='123456789';
       $contact->email='ssssss@gmail.com';
       $contact->address='28/nguyễn trì phương';
       $contact->save();
    }
}
