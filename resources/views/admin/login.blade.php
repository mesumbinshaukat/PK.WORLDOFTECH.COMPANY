@extends('layouts.app')

@section('title', 'Admin Login - World of Tech Pakistan')

@section('content')
<section class="min-h-screen flex items-center justify-center bg-dark-950 px-6">
    <div class="w-full max-w-md bg-dark-900 border border-gray-800 rounded-3xl p-10 shadow-2xl relative overflow-hidden">
        <div class="text-center mb-10">
            <h1 class="text-2xl font-bold text-white mb-2">Admin <span class="text-neon-blue">Access</span></h1>
            <p class="text-gray-500 text-sm">Sign in to manage World of Tech Pakistan.</p>
        </div>

        @if(session('error'))
        <div class="bg-red-500/10 border border-red-500/50 text-red-400 p-4 rounded-xl mb-6 text-sm flex items-center gap-3">
            <i class="fa-solid fa-triangle-exclamation"></i>
            {{ session('error') }}
        </div>
        @endif

        <form action="/admin/login" method="POST" class="space-y-6">
            <div class="space-y-2">
                <label class="text-xs font-bold text-gray-500 uppercase tracking-widest ml-1">Username</label>
                <input type="text" name="username" required class="w-full bg-dark-950 border border-gray-800 rounded-2xl px-6 py-4 focus:border-neon-blue focus:outline-none transition-colors" placeholder="admin">
            </div>
            <div class="space-y-2">
                <label class="text-xs font-bold text-gray-500 uppercase tracking-widest ml-1">Password</label>
                <input type="password" name="password" required class="w-full bg-dark-950 border border-gray-800 rounded-2xl px-6 py-4 focus:border-neon-blue focus:outline-none transition-colors" placeholder="••••••••">
            </div>

            <button type="submit" class="w-full bg-neon-blue hover:bg-blue-600 py-4 rounded-2xl font-bold text-lg transition-all shadow-xl shadow-blue-500/20 active:scale-[0.98]">
                Login to Dashboard
            </button>
        </form>

        <div class="mt-8 text-center">
            <a href="/" class="text-gray-500 hover:text-white text-sm transition-colors flex items-center justify-center gap-2">
                <i class="fa-solid fa-arrow-left"></i> Back to Website
            </a>
        </div>

        <!-- Decorative blur -->
        <div class="absolute -top-12 -right-12 w-24 h-24 bg-neon-blue/5 rounded-full blur-3xl"></div>
    </div>
</section>
@endsection
