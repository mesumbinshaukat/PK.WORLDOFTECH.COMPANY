<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DashboardController extends Controller
{
    public function index()
    {
        $contacts = \App\Models\Contact::orderBy('created_at', 'desc')->get();

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

    public function deleteContact($id)
    {
        $contact = \App\Models\Contact::find($id);
        if ($contact) {
            $contact->delete();
            return redirect()->back()->with('success', 'Contact inquiry deleted successfully.');
        }
        return redirect()->back()->with('error', 'Contact not found.');
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
