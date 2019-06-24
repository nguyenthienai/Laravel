<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\db;
use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::paginate(4);
        return view('index',compact('contacts'));
    }

    public function create()
    {
        return view('create');
    }

    public function add()
    {   
        $this->kiemtra();
        $attribute = request()->all();
        $contact = Contact::create($attribute);
        return redirect('contact');
    }

    public function delete($id)
    {
        db::table('contacts')->where('id',$id)->delete();
        return redirect("/contact");
    }

    public function search(Request $request)
    {   
        $keyword = $request->input('keyword');
        if (!$keyword) {
            return redirect('/contact');
        }
        $contacts = Contact::where('Name', 'LIKE', '%' . $keyword . '%')->
                            orwhere('lastName', 'LIKE', '%' . $keyword . '%')->paginate(4);
        return view('index', compact('contacts'));
    }

    public function kiemtra()
    {
        return request()->validate([
            'name' => 'required |min:3 |max:255',
            'lastName' => 'required |min:3 |max:255',
            'address' => 'required |min:3 |max:255',
            'phone' => 'required |min:9 |max:15',
            'email' => 'required | email'
        ]); 
    }
}
