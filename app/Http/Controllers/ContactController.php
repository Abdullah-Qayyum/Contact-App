<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('contacts.index', compact('contacts'));
    }

    // Show
    public function create()
    {
        return view('contacts.create');
    }

    // Store
    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required|string|max:255',
            'email' => 'required|email|unique:contacts',
            'phone' => 'nullable|string|max:20',
        ]);

        Contact::create($request->all());

        return redirect()->route('contacts.index')->with('success', 'Contact created successfully.');
    }

    // Show
    public function show(Contact $contact)
    {
        return view('contacts.show', compact('contact'));
    }

    //edit
    public function edit(Contact $contact)
    {
        return view('contacts.edit', compact('contact'));
    }

    // Update
    public function update(Request $request, Contact $contact)
    {
        $request->validate([
            'name'  => 'required|string|max:255',
            'email' => 'required|email|unique:contacts,email,'.$contact->id,
            'phone' => 'nullable|string|max:20',
        ]);

        $contact->update($request->all());

        return redirect()->route('contacts.index')->with('success', 'Contact updated successfully.');
    }

    // Delete
    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('contacts.index')->with('success', 'Contact deleted successfully.');
    }
}
