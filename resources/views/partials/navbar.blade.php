<nav class="fixed top-0 w-full z-50 glass px-6 py-4">
    <div x-data="{ megaMenuOpen: false }" class="max-w-7xl mx-auto flex items-center justify-between relative" @mouseleave="megaMenuOpen = false">
        <!-- Logo -->
        <a href="/" class="flex items-center group">
            <img src="{{ url('images/logo.png') }}" alt="World of Tech PK" class="h-20 w-auto group-hover:scale-105 transition-transform duration-300">
        </a>

        <!-- Desktop Links -->
        <div class="hidden md:flex items-center space-x-8">
            <a href="/" class="text-gray-300 hover:text-white transition-colors">Home</a>
            <a href="/projects" class="text-gray-300 hover:text-white transition-colors">Projects</a>
            <a href="/about" class="text-gray-300 hover:text-white transition-colors">About Us</a>
            
            <!-- Services Mega Menu Link -->
            <button @mouseenter="megaMenuOpen = true" @click="window.location.href='/services'" 
                    class="flex items-center gap-1.5 text-gray-300 hover:text-white transition-colors group py-4">
                Services
                <i class="fa-solid fa-chevron-down text-[10px] transition-transform duration-300" :class="megaMenuOpen ? 'rotate-180' : ''"></i>
            </button>

            <a href="/case-studies" class="text-gray-300 hover:text-white transition-colors">Case Studies</a>
        </div>

        <!-- Mega Menu Content (Aligned to Container) -->
        <div x-show="megaMenuOpen" 
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0 translate-y-2"
             x-transition:enter-end="opacity-100 translate-y-0"
             x-transition:leave="transition ease-in duration-150"
             x-transition:leave-start="opacity-100 translate-y-0"
             x-transition:leave-end="opacity-0 translate-y-2"
             x-cloak
             class="absolute left-0 right-0 top-full pt-2 z-50">
            <div class="bg-dark-900 border border-gray-800 rounded-3xl shadow-2xl p-8 glass overflow-hidden max-w-[900px] mx-auto">
                <div class="grid grid-cols-4 gap-x-8 gap-y-10">
                    @foreach($allServices as $service)
                    <div>
                        <h4 class="text-neon-blue font-bold text-[11px] uppercase tracking-widest mb-4 flex items-center gap-2">
                            <i class="fa-solid {{ $service['icon'] }} text-xs opacity-50"></i>
                            {{ $service['title'] }}
                        </h4>
                        <ul class="space-y-3">
                            @foreach($service['subservices'] as $sub)
                            <li>
                                <a href="/services/{{ $sub['slug'] }}" 
                                   class="text-sm text-gray-400 hover:text-white transition-colors block leading-tight">
                                    {{ $sub['title'] }}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    @endforeach
                </div>
                
                <div class="mt-10 pt-6 border-t border-gray-800 flex items-center justify-between">
                    <p class="text-xs text-gray-500 italic">Advanced technology solutions for your unique business needs.</p>
                    <a href="/services" class="text-xs font-bold text-neon-blue hover:underline flex items-center gap-1">
                        View Full Directory <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="hidden md:block">
            <a href="/contact" class="px-6 py-2.5 bg-neon-blue hover:bg-blue-600 rounded-full font-bold text-sm transition-all shadow-lg shadow-blue-500/20 active:scale-95">
                Get Started
            </a>
        </div>

        <!-- Mobile Menu Button -->
        <button @click="sidebarOpen = true" class="md:hidden text-gray-300 hover:text-white focus:outline-none">
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
        </button>
    </div>
</nav>
