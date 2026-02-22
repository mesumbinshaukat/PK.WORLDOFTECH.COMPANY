@extends('layouts.app')

@section('title', 'Page Not Found - World of Tech Pakistan')

@section('content')
<section class="min-h-[80vh] flex items-center justify-center px-6">
    <div class="text-center max-w-2xl px-6">
        <h1 class="text-9xl font-black text-neon-blue/20 mb-4 tracking-tighter">404</h1>
        <h2 class="text-3xl md:text-4xl font-bold mb-6">Lost in the <span class="text-neon-blue">Digital Void</span>?</h2>
        <p class="text-gray-400 text-lg mb-10 leading-relaxed">
            The page you are looking for doesn't exist or has been moved. Let's get you back to the main mission.
        </p>
        <a href="/" class="inline-block px-10 py-5 bg-neon-blue hover:bg-blue-600 rounded-full font-bold text-lg transition-all shadow-xl shadow-blue-500/20">
            Back to Home Base
        </a>
    </div>
</section>
@endsection
