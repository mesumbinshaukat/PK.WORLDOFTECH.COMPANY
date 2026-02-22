@extends('layouts.app')

@section('title', 'Insights & Blog - World of Tech Pakistan')

@section('content')
<section class="py-24 px-6 bg-dark-950">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">Tech <span class="text-neon-blue">Insights</span></h1>
            <p class="text-gray-400 max-w-2xl mx-auto text-lg leading-relaxed">
                Stay updated with the latest trends in SaaS, AI, and cybersecurity optimized for the modern digital era.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($posts as $post)
            <div class="bg-dark-900 border border-gray-800 rounded-3xl overflow-hidden hover:border-gray-700 transition-all flex flex-col group">
                <div class="aspect-video bg-dark-950 flex items-center justify-center relative overflow-hidden">
                    <div class="absolute inset-0 bg-blue-500/5 group-hover:bg-blue-500/10 transition-colors"></div>
                    <i class="fa-solid fa-newspaper text-neon-blue/20 text-6xl group-hover:scale-110 transition-transform duration-500"></i>
                    <div class="absolute top-4 left-4">
                        <span class="bg-neon-blue/20 text-neon-blue text-xs font-bold px-3 py-1 rounded-full uppercase tracking-widest">{{ $post['category'] }}</span>
                    </div>
                </div>
                <div class="p-8 flex flex-col flex-1">
                    <p class="text-xs text-gray-500 mb-2">{{ $post['date'] }}</p>
                    <h2 class="text-xl font-bold text-white mb-4 group-hover:text-neon-blue transition-colors">{{ $post['title'] }}</h2>
                    <p class="text-gray-400 text-sm mb-8 leading-relaxed flex-1">
                        {{ $post['excerpt'] }}
                    </p>
                    <a href="/blog/{{ $post['slug'] }}" class="text-neon-blue text-sm font-bold flex items-center gap-2 group/link">
                        Read Full Article <i class="fa-solid fa-arrow-right transition-transform group-hover/link:translate-x-1"></i>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
