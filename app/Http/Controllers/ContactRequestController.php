<?php

namespace App\Http\Controllers;

use App\Models\ContactRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactRequestMail;


class ContactRequestController extends Controller
{
    /**
     * Show the contact page with form
     */
    public function create()
    {
        // Remove the Contact model dependency
        // Just return the view without the contact data
        return view('contact');
    }

    /**
     * Store a new contact request
     */
    public function store(Request $request)
    {
        // 1️⃣ Validate Form Data
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // 2️⃣ Save to Database
        $contactRequest = ContactRequest::create($validated);

        // 3️⃣ Send Email To Admin
        Mail::to(config('mail.admin_email'))
            ->send(
                (new ContactRequestMail($contactRequest))
                    ->replyTo($contactRequest->email, $contactRequest->name)
            );

        // 4️⃣ Redirect Back With Success Message
        return redirect()->back()
            ->with('success', 'Thank you for contacting us! We will get back to you soon.');
    }

    /**
     * Display a listing of contact requests (admin view)
     */
    public function index()
    {
        $contactRequests = ContactRequest::latest()->paginate(10);
        return view('admin.contact-requests.index', compact('contactRequests'));
    }

    /**
     * Delete a contact request
     */
    public function destroy($id)
    {
        $contactRequest = ContactRequest::findOrFail($id);
        $contactRequest->delete();

        return redirect()->route('admin.contact-requests.index')
            ->with('success', 'Contact request deleted successfully.');
    }
}
