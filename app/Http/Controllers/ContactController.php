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
        \App\Models\Contact::create($request->all());

        Log::info('New Contact Request', $request->all());

        return redirect($request->header('referer', '/'))->with('success', 'Thank you for your message! Our team will get back to you shortly.');
    }
}
