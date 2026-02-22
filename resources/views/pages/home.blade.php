@extends('layouts.app')

@section('title', 'World of Tech Pakistan - Leading SaaS & IT Company')

@section('content')
<!-- Hero Section -->
<section class="relative h-screen flex items-center justify-center overflow-hidden bg-gradient-to-br from-dark-950 via-dark-900 to-indigo-950">
    <!-- Animated background elements -->
    <div class="absolute inset-0 opacity-20">
        <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-neon-blue rounded-full blur-[120px] animate-pulse"></div>
        <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-neon-purple rounded-full blur-[120px] animate-pulse" style="animation-delay: 2s"></div>
    </div>

    <div class="relative z-10 text-center px-6 max-w-5xl mx-auto">
        <h1 class="text-5xl md:text-7xl font-extrabold tracking-tight mb-6">
            Empowering Pakistan's <span class="bg-gradient-to-r from-neon-blue to-neon-purple bg-clip-text text-transparent">Digital Future</span>
        </h1>
        <p class="text-xl md:text-2xl text-gray-400 mb-10 max-w-3xl mx-auto leading-relaxed">
            Leading SaaS and IT excellence tailored for the Pakistani market. We build modern, secure, and AI-optimized solutions for the next generation of businesses.
        </p>
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
            <a href="/services" class="w-full sm:w-auto px-8 py-4 bg-neon-blue hover:bg-blue-600 rounded-full font-bold text-lg transition-all shadow-xl shadow-blue-500/20 hover:scale-105">
                Explore Our Services
            </a>
            <a href="/projects" class="w-full sm:w-auto px-8 py-4 border border-gray-700 hover:border-gray-500 rounded-full font-bold text-lg transition-all glass hover:bg-white/5">
                View Projects
            </a>
        </div>
    </div>

    <div class="absolute bottom-10 left-1/2 -translate-x-1/2 animate-bounce cursor-pointer">
        <a href="#partners"><i class="fa-solid fa-chevron-down text-2xl text-gray-500"></i></a>
    </div>
</section>

<!-- Partners Spotlight Section -->
<section id="partners" class="py-24 px-6 bg-dark-950">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Meet Our <span class="text-neon-blue">Partners</span></h2>
            <p class="text-gray-400 max-w-2xl mx-auto">Collaboration drives innovation. Our core team brings together expertise across software engineering, AI, and creative design.</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-8">
            @foreach($partners as $partner)
            <div class="group relative bg-dark-900 rounded-2xl overflow-hidden neon-border border border-gray-800 p-6 flex flex-col items-center text-center transition-all hover:-translate-y-2">
                <a href="{{ $partner['social']['linkedin'] }}" target="_blank" class="relative w-32 h-32 mb-6 rounded-full overflow-hidden border-2 border-neon-blue/30 group-hover:border-neon-blue transition-colors block">
                    <img src="{{ url('images/partners/' . $partner['image']) }}" alt="{{ $partner['name'] }}" class="w-full h-full object-cover" loading="lazy">
                </a>
                <a href="{{ $partner['social']['linkedin'] }}" target="_blank" class="hover:text-neon-blue transition-colors">
                    <h3 class="text-xl font-bold text-white transition-colors">{{ $partner['name'] }}</h3>
                </a>
                <p class="text-neon-purple text-xs font-semibold uppercase tracking-widest mb-4">{{ $partner['role'] }}</p>
                <p class="text-gray-400 text-sm leading-relaxed mb-6">
                    {{ $partner['bio'] }}
                </p>
                <div class="mt-auto flex space-x-6">
                    <a href="{{ $partner['social']['linkedin'] }}" target="_blank" class="text-gray-400 hover:text-white transition-all scale-110 hover:scale-125"><i class="fa-brands fa-linkedin text-xl"></i></a>
                    <a href="{{ $partner['social']['github'] }}" target="_blank" class="text-gray-400 hover:text-white transition-all scale-110 hover:scale-125"><i class="fa-brands fa-github text-xl"></i></a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Services Teaser Section -->
<section class="py-24 px-6 bg-dark-900">
    <div class="max-w-7xl mx-auto">
        <div class="flex flex-col md:flex-row items-end justify-between mb-16 gap-6">
            <div class="max-w-2xl">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Comprehensive <span class="text-neon-blue">Solutions</span></h2>
                <p class="text-gray-400">From conceptualization to deployment, we provide end-to-end IT services designed to scale your business in the digital age.</p>
            </div>
            <a href="/services" class="text-neon-blue hover:text-blue-400 font-semibold group flex items-center gap-2">
                View All Services <i class="fa-solid fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div class="glass p-8 rounded-2xl hover:bg-white/5 transition-all">
                <div class="w-12 h-12 bg-blue-500/10 rounded-xl flex items-center justify-center mb-6">
                    <i class="fa-solid fa-code text-neon-blue text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-3">Web Development</h3>
                <p class="text-gray-400 text-sm mb-4">Custom responsive websites and complex web applications built with modern frameworks.</p>
            </div>
            <div class="glass p-8 rounded-2xl hover:bg-white/5 transition-all">
                <div class="w-12 h-12 bg-purple-500/10 rounded-xl flex items-center justify-center mb-6">
                    <i class="fa-solid fa-robot text-neon-purple text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-3">AI & Machine Learning</h3>
                <p class="text-gray-400 text-sm mb-4">Intelligent automation, chatbots, and predictive analytics to optimize your workflows.</p>
            </div>
            <div class="glass p-8 rounded-2xl hover:bg-white/5 transition-all">
                <div class="w-12 h-12 bg-indigo-500/10 rounded-xl flex items-center justify-center mb-6">
                    <i class="fa-solid fa-cubes text-blue-400 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-3">SaaS Development</h3>
                <p class="text-gray-400 text-sm mb-4">Scalable cloud-based software as a service products built for performance and growth.</p>
            </div>
            <div class="glass p-8 rounded-2xl hover:bg-white/5 transition-all">
                <div class="w-12 h-12 bg-green-500/10 rounded-xl flex items-center justify-center mb-6">
                    <i class="fa-solid fa-shield-halved text-green-400 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-3">Cybersecurity</h3>
                <p class="text-gray-400 text-sm mb-4">Robust protection and security audits to keep your digital assets safe from threats.</p>
            </div>
        </div>
    </div>
</section>

<!-- Company Mission Stats -->
<section class="py-24 px-6 bg-dark-950">
    <div class="max-w-7xl mx-auto grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
        <div>
            <span class="text-4xl md:text-5xl font-bold text-white">50+</span>
            <p class="text-gray-500 mt-2 uppercase text-xs tracking-widest font-bold">Projects Delivered</p>
        </div>
        <div>
            <span class="text-4xl md:text-5xl font-bold text-white">5</span>
            <p class="text-gray-500 mt-2 uppercase text-xs tracking-widest font-bold">Core Experts</p>
        </div>
        <div>
            <span class="text-4xl md:text-5xl font-bold text-white">100%</span>
            <p class="text-gray-500 mt-2 uppercase text-xs tracking-widest font-bold">Secure Code</p>
        </div>
        <div>
            <span class="text-4xl md:text-5xl font-bold text-white">24/7</span>
            <p class="text-gray-500 mt-2 uppercase text-xs tracking-widest font-bold">Local Support</p>
        </div>
    </div>
</section>

<!-- Testimonials (Fictional) -->
<section class="py-24 px-6 bg-dark-900">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Client <span class="text-neon-blue">Feedback</span></h2>
            <p class="text-gray-400">Trusted by businesses across Pakistan and beyond.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="glass p-8 rounded-2xl italic text-gray-300 relative">
                <i class="fa-solid fa-quote-left text-3xl text-neon-blue/20 absolute top-4 left-4"></i>
                <p class="mb-6">World of Tech transformed our manual process into a highly efficient AI-driven workflow. Their attention to security is unmatched in Pakistan.</p>
                <div class="flex items-center gap-4">
                    <div class="w-10 h-10 bg-neon-blue rounded-full flex items-center justify-center font-bold text-white">AK</div>
                    <div>
                        <p class="text-sm font-bold text-white not-italic">Ahmed Khan</p>
                        <p class="text-xs text-gray-500 not-italic">CEO, TechPioneer PK</p>
                    </div>
                </div>
            </div>
            <div class="glass p-8 rounded-2xl italic text-gray-300 relative">
                <i class="fa-solid fa-quote-left text-3xl text-neon-blue/20 absolute top-4 left-4"></i>
                <p class="mb-6">The SaaS platform developed by the team exceeded our expectations. Fast, responsive, and beautifully designed in dark mode.</p>
                <div class="flex items-center gap-4">
                    <div class="w-10 h-10 bg-neon-purple rounded-full flex items-center justify-center font-bold text-white">MS</div>
                    <div>
                        <p class="text-sm font-bold text-white not-italic">Mariam Siddiqui</p>
                        <p class="text-xs text-gray-500 not-italic">Director, E-com Solutions</p>
                    </div>
                </div>
            </div>
            <div class="glass p-8 rounded-2xl italic text-gray-300 relative">
                <i class="fa-solid fa-quote-left text-3xl text-neon-blue/20 absolute top-4 left-4"></i>
                <p class="mb-6">Their consultation on cloud strategy was vital for our scale-up phase. Reliable partners for any serious IT project.</p>
                <div class="flex items-center gap-4">
                    <div class="w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center font-bold text-white">ZF</div>
                    <div>
                        <p class="text-sm font-bold text-white not-italic">Zaid Farooq</p>
                        <p class="text-xs text-gray-500 not-italic">Founding Engineer, NexusAI</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
