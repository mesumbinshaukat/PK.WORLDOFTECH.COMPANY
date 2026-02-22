<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contact');
    }

    public function submit(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|min:10',
        ]);

        // In a real application, we would save to DB and send an email.
        // For now, let's log the contact request.
        Log::info('New Contact Request', $request->all());

        return redirect()->back()->with('success', 'Thank you for your message! Our team will get back to you shortly.');
    }
}
