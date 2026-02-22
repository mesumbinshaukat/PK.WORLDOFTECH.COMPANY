<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DashboardController extends Controller
{
    public function index()
    {
        // Mock data for contact entries
        $contacts = [
            ['id' => 1, 'name' => 'Ahmed Khan', 'email' => 'ahmed@example.com', 'subject' => 'Project Inquiry', 'message' => 'Interested in scaling our SaaS...', 'date' => '2026-02-20'],
            ['id' => 2, 'name' => 'Sara Ahmed', 'email' => 'sara@example.com', 'subject' => 'Consultation', 'message' => 'Need help with AI integration.', 'date' => '2026-02-21'],
            ['id' => 3, 'name' => 'Zaid Farooq', 'email' => 'zaid@example.com', 'subject' => 'Security Audit', 'message' => 'Want to check our legacy systems.', 'date' => '2026-02-22']
        ];

        return view('admin.dashboard', compact('contacts'));
    }

    public function uploadPartnerImage(Request $request)
    {
        $this->validate($request, [
            'partner_name' => 'required|string',
            'image' => 'required|image|mimes:webp,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = $request->partner_name . '.webp'; // Normalizing to webp
            $image->move(base_path('public/images/partners'), $name);
            return redirect()->back()->with('success', 'Image updated successfully.');
        }

        return redirect()->back()->with('error', 'Upload failed.');
    }

    public function contacts()
    {
        // View all contacts logic
    }

    public function exportContacts()
    {
        // CSV export logic
    }
}
