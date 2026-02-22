@extends('layouts.app')

@section('title', 'Our Services - World of Tech Pakistan')

@section('content')
<section class="py-24 px-6 bg-dark-950">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-20">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">Innovative <span class="text-neon-blue">Services</span></h1>
            <p class="text-gray-400 max-w-2xl mx-auto text-lg leading-relaxed">
                We provide a wide range of cutting-edge technology services designed to help businesses in Pakistan and globally achieve digital excellence.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            @foreach($services as $index => $service)
            <div class="bg-dark-900 border border-gray-800 rounded-3xl p-8 transition-all hover:border-gray-700 h-full flex flex-col" x-data="{ open: false }">
                <div class="flex items-start justify-between mb-6">
                    <div class="w-14 h-14 bg-neon-blue/10 rounded-2xl flex items-center justify-center">
                        <i class="fa-solid {{ $service['icon'] }} text-neon-blue text-2xl"></i>
                    </div>
                </div>
                
                <h2 class="text-2xl font-bold mb-4 text-white">{{ $service['title'] }}</h2>
                <p class="text-gray-400 mb-8 leading-relaxed">
                    {{ $service['description'] }}
                </p>

                <!-- Subservices Accordion -->
                <div class="mt-auto pt-6 border-t border-gray-800/50">
                    <button @click="open = !open" class="flex items-center justify-between w-full text-sm font-bold text-gray-400 uppercase tracking-widest hover:text-white transition-colors">
                        Explore Specialized Solutions
                        <i class="fa-solid fa-chevron-down text-xs transition-transform duration-300" :class="open ? 'rotate-180' : ''"></i>
                    </button>
                    
                    <div x-show="open" 
                         x-collapse
                         x-cloak
                         class="mt-6 space-y-4">
                        @foreach($service['subservices'] as $sub)
                        <a href="/services/{{ $sub['slug'] }}" class="p-4 bg-dark-950 border border-gray-800 rounded-xl block hover:border-neon-blue transition-all group/sub">
                            <div class="flex items-center justify-between">
                                <h4 class="text-sm font-bold text-neon-blue mb-1">{{ $sub['title'] }}</h4>
                                <i class="fa-solid fa-arrow-right text-[10px] text-neon-blue opacity-0 group-hover/sub:opacity-100 transition-all translate-x-[-4px] group-hover/sub:translate-x-0"></i>
                            </div>
                            <p class="text-xs text-gray-500">{{ $sub['desc'] }}</p>
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section class="py-24 px-6 bg-dark-900">
    <div class="max-w-5xl mx-auto text-center glass p-12 md:p-20 rounded-[3rem] border-neon-blue/20 relative overflow-hidden">
        <div class="absolute inset-0 bg-blue-500/5 -z-10"></div>
        <h2 class="text-3xl md:text-5xl font-bold mb-8">Ready to <span class="text-neon-blue">Transform</span> Your Business?</h2>
        <p class="text-gray-400 text-lg md:text-xl mb-12 max-w-2xl mx-auto leading-relaxed">
            Contact us today for a free consultation and let's discuss how our technology expertise can drive your growth.
        </p>
        <div class="flex flex-col sm:flex-row items-center justify-center gap-6">
            <a href="/contact" class="w-full sm:w-auto px-10 py-5 bg-neon-blue hover:bg-blue-600 rounded-full font-bold text-lg transition-all shadow-xl shadow-blue-500/30 hover:scale-105">
                Get Started Now
            </a>
            <a href="https://wa.me/923220275616" class="w-full sm:w-auto px-10 py-5 border border-gray-700 hover:border-gray-500 rounded-full font-bold text-lg transition-all flex items-center justify-center gap-3">
                <i class="fa-brands fa-whatsapp text-2xl text-green-500"></i> WhatsApp
            </a>
        </div>
    </div>
</section>
@endsection
