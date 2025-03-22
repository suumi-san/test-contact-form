<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Category;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }


    public function confirm(ContactRequest $request)
    {
        $category_id = $request->input('category_id');

        $tel = $request->tell1 . '-' . $request->tell2 . '-' . $request->tell3;
        $contact = $request->only(['first_name', 'last_name', 'gender', 'email',  'address', 'building', 'category_id', 'detail']);
        $contact['tel'] = $tel;


        return view('confirm', compact('contact'));
    }

    public function create(ContactRequest $request)
    {
        $form = $request->all();
        Contact::create($form);
        return redirect('/');
    }

    public function store(ContactRequest $request)
    {
        $inputs = ContactRequest::all();

        Contact::create($inputs);

        return view('thanks');
    }
}
