@extends('layouts.app')

@section('title', $category['title'] . ' - World of Tech Pakistan')
@section('meta_description', $category['description'])

@section('content')
<section class="py-32 px-6 bg-dark-950">
    <div class="max-w-7xl mx-auto">
        <!-- Breadcrumbs -->
        <div class="flex items-center gap-2 text-sm text-gray-500 mb-12">
            <a href="/" class="hover:text-neon-blue transition-colors">Home</a>
            <i class="fa-solid fa-chevron-right text-[10px]"></i>
            <a href="/services" class="hover:text-neon-blue transition-colors">Services</a>
            <i class="fa-solid fa-chevron-right text-[10px]"></i>
            <span class="text-gray-300">{{ $category['title'] }}</span>
        </div>

        <!-- Hero Section -->
        <div class="max-w-4xl mb-24">
            <div class="inline-flex items-center justify-center w-20 h-20 rounded-3xl bg-neon-blue/10 border border-neon-blue/20 mb-8">
                <i class="fa-solid {{ $category['icon'] }} text-3xl text-neon-blue"></i>
            </div>
            <h1 class="text-5xl md:text-7xl font-bold mb-8 tracking-tighter text-white">
                {{ $category['title'] }}
            </h1>
            <p class="text-gray-400 text-xl md:text-2xl leading-relaxed">
                {{ $category['description'] }}
            </p>
        </div>

        <!-- Sub-services Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
            @foreach($category['subservices'] as $subservice)
            <div class="group relative bg-dark-900/40 border border-gray-800/50 rounded-[2.5rem] p-10 overflow-hidden transition-all duration-500 hover:border-neon-blue/40 hover:shadow-[0_20px_80px_-20px_rgba(59,130,246,0.15)] hover:-translate-y-2">
                <!-- Card Background Glow -->
                <div class="absolute -inset-1 bg-gradient-to-r from-neon-blue/0 via-neon-blue/5 to-neon-blue/0 opacity-0 group-hover:opacity-100 transition-opacity duration-700 blur-xl"></div>
                
                <h3 class="text-2xl font-bold mb-6 text-white group-hover:text-neon-blue transition-colors tracking-tight">
                    {{ $subservice['title'] }}
                </h3>
                <p class="text-gray-400 text-[15px] leading-relaxed mb-10 font-medium">
                    {{ $subservice['desc'] }}
                </p>

                <div class="mt-auto pt-8 border-t border-white/5">
                    <a href="/services/{{ $subservice['slug'] }}" class="inline-flex items-center gap-2 text-neon-blue text-xs font-black uppercase tracking-widest hover:text-blue-400 transition-colors">
                        <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                        Explore Service <i class="fa-solid fa-arrow-right-long"></i>
                    </a>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Consultation CTA -->
        <div class="mt-32 p-12 md:p-20 bg-gradient-to-br from-dark-900 to-dark-950 border border-gray-800/50 rounded-[3rem] text-center relative overflow-hidden">
            <div class="relative z-10 max-w-2xl mx-auto">
                <h2 class="text-3xl md:text-4xl font-bold mb-6 text-white">Need a custom {{ strtolower($category['title']) }} solution?</h2>
                <p class="text-gray-400 mb-10 text-lg">Our experts are ready to help you navigate your digital transformation journey with specialized technical advice and implementation.</p>
                <a href="/contact" class="inline-flex px-10 py-4 bg-neon-blue hover:bg-blue-600 rounded-full font-bold transition-all shadow-xl shadow-blue-500/20 active:scale-95">
                    Start a Free Consultation
                </a>
            </div>
            <!-- Background Decoration -->
            <div class="absolute top-0 right-0 -mr-20 -mt-20 w-80 h-80 bg-neon-blue/5 rounded-full blur-[100px]"></div>
            <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-80 h-80 bg-neon-blue/5 rounded-full blur-[100px]"></div>
        </div>
    </div>
</section>
@endsection
