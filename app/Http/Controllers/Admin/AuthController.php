<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Placeholder authentication logic
        if ($request->username === 'admin' && $request->password === 'wot_pk_2026') {
            session(['admin_logged_in' => true]);
            return redirect('/admin');
        }

        return redirect()->back()->with('error', 'Invalid credentials.');
    }

    public function logout()
    {
        session()->forget('admin_logged_in');
        return redirect('/admin/login');
    }
}
