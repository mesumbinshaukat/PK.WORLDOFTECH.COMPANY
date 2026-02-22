<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        Log::info('Login attempt', ['username' => $request->username]);

        $this->validate($request, [
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $admin = \App\Models\AdminUser::where('username', $request->username)->first();

        if ($admin) {
            Log::info('Admin user found', ['id' => $admin->id]);
            if (\Illuminate\Support\Facades\Hash::check($request->password, $admin->password)) {
                Log::info('Password check passed');
                // Set session data explicitly on the request's session
                $request->session()->put('admin_logged_in', true);
                $request->session()->put('admin_id', $admin->id);
                
                $admin->update(['last_login' => \Illuminate\Support\Carbon::now()]);
                
                Log::info('Session state set on request', [
                    'admin_logged_in' => $request->session()->get('admin_logged_in'),
                    'session_id' => $request->session()->getId()
                ]);
                
                return redirect('/admin');
            } else {
                Log::warning('Password check failed');
            }
        } else {
            Log::warning('Admin user not found');
        }

        $request->session()->flash('error', 'Invalid credentials.');
        return redirect($request->header('referer', '/'));
    }

    public function logout()
    {
        app('session')->forget('admin_logged_in');
        app('session')->forget('admin_id');
        return redirect('/admin/login');
    }
}
