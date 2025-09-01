<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('contacts.index', ['contacts' => $contacts ]);
    }

    // Show
    public function create()
    {
      $contacts = Contact::all();
        return view('contacts.create', ['contacts' => $contacts ]);
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
      return view('contacts.view',['contacts' => $contacts]);
    }

    //edit
    public function edit($id)
    {
        $contacts = Contact::find($id);

        return view('contacts.edit', ['contacts' => $contacts]);
    }

    // Update
    public function update(Request $request,$id)
    {
        $contacts = Contact::find($id);
         $contacts->name = $request->name;
        $contacts->email = $request->email;
        $contacts->phone = $request->phone;

        
        $contacts->save();

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
