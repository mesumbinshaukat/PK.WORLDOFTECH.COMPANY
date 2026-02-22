<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class NewsletterController extends Controller
{
    public function subscribe(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|max:255',
        ]);

        // In production, would store in DB or sync with Mailchimp
        Log::info('New Newsletter Subscription', ['email' => $request->email]);

        return response()->json([
            'success' => true,
            'message' => 'Thank you for subscribing! Stay tuned for updates.'
        ]);
    }
}
