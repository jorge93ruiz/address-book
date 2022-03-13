<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactsController extends Controller
{
    public function index()
    {
        $contacts = Contact::orderBy('name', 'asc')->simplePaginate(5);

        return view('contacts.index', [
            'contacts' => $contacts,
        ]);
    }

    public function add_form()
    {
        return view('add_contact');
    }

    public function store(Request $request)
    {
        // validate
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'phone_number' => 'required|max:255',
            'date_of_birth' => 'required|max:255',
            'address' => 'required|max:255',
        ]);

        // store contact
        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'date_of_birth' => $request->date_of_birth,
            'address' => $request->address,
        ]);

        return redirect()->route('contacts');
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();

        return back();
    }
}
