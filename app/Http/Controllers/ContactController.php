<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('contacts.index', ['contact' => $contacts ]);
    }

    // Show
    public function create()
    {
        return view('contacts.create');
    }

    // Store
    public function store(Request $request)
    {
        $contacts = new Contact();
        $contacts->name = $request->name;
        $contacts->email = $request->email;
        $contacts->phone = $request->phone;

       $contacts->save();
        return redirect('/contacts');
    }

    // Show
    public function show($id)
    {
      $contacts = Contact::find($id);
      return view('contacts.view',['contact' => $contacts]);
    }

    //edit
    public function edit($id)
    {
        $contact = Contact::find($id);

        return view('contacts.edit', ['contact' => $contact]);
    }

    // Update
    public function update(Request $request,$id)
    {
        $contact = Contact::find($id);
         $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;

        
        $contact->save();

        return redirect('/contacts');
    }

    // Delete
    public function destroy($id)
    {
        $contact = Contact::find($id);
        $contact->delete();
        return redirect('/contacts');
    }
}
