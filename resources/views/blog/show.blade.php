@extends('layouts.app')

@section('title', $post['title'] . ' - World of Tech Pakistan')

@section('content')
<section class="py-24 px-6 bg-dark-950">
    <div class="max-w-4xl mx-auto">
        <a href="/blog" class="text-gray-500 hover:text-white mb-8 inline-flex items-center gap-2 transition-colors">
            <i class="fa-solid fa-arrow-left text-xs"></i> Back to Blog
        </a>

        <div class="mb-12">
            <p class="text-neon-blue font-bold uppercase tracking-widest text-xs mb-4">Tech Insights</p>
            <h1 class="text-3xl md:text-5xl font-bold text-white mb-6 leading-tight">{{ $post['title'] }}</h1>
            <div class="flex items-center gap-4 text-gray-500 text-sm">
                <span><i class="fa-solid fa-calendar-day mr-1"></i> {{ $post['date'] }}</span>
                <span>•</span>
                <span><i class="fa-solid fa-user mr-1"></i> {{ $post['author'] }}</span>
            </div>
        </div>

        <div class="prose prose-invert prose-blue max-w-none text-gray-400 text-lg leading-relaxed space-y-8">
            <p>{{ $post['content'] }}</p>
            
            <div class="p-8 bg-dark-900 border-l-4 border-neon-blue rounded-r-3xl my-12 italic">
                "As we move into 2026, the integration of AI-ready metadata and high-performance SaaS architectures will be the deciding factor for businesses looking to scale globally from Pakistan."
            </div>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            
            <h3 class="text-2xl font-bold text-white mt-12 mb-6">Key Takeaways</h3>
            <ul class="list-disc pl-6 space-y-4">
                <li>Implementation of Schema.org markup is no longer optional for modern SEO.</li>
                <li>Localized SaaS solutions must prioritize mobile performance due to regional bandwidth constraints.</li>
                <li>Security headers and encrypted data transit are fundamental to user trust.</li>
            </ul>
        </div>

        <div class="mt-20 pt-12 border-t border-gray-800">
            <h4 class="text-xl font-bold text-white mb-8">Share this article</h4>
            <div class="flex items-center gap-4">
                <a href="#" class="w-12 h-12 bg-dark-900 border border-gray-800 rounded-xl flex items-center justify-center text-gray-400 hover:text-white hover:border-gray-600 transition-all">
                    <i class="fa-brands fa-linkedin-in"></i>
                </a>
                <a href="#" class="w-12 h-12 bg-dark-900 border border-gray-800 rounded-xl flex items-center justify-center text-gray-400 hover:text-white hover:border-gray-600 transition-all">
                    <i class="fa-brands fa-twitter"></i>
                </a>
                <a href="#" class="w-12 h-12 bg-dark-900 border border-gray-800 rounded-xl flex items-center justify-center text-gray-400 hover:text-white hover:border-gray-600 transition-all">
                    <i class="fa-brands fa-whatsapp"></i>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
