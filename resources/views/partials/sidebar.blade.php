<div x-show="sidebarOpen" 
     x-cloak
     class="fixed inset-0 z-[60] md:hidden" 
     @click.away="sidebarOpen = false">
    
    <!-- Overlay -->
    <div class="fixed inset-0 bg-black/60 backdrop-blur-sm transition-opacity" x-show="sidebarOpen" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"></div>

    <!-- Sidebar content -->
    <div class="fixed inset-y-0 right-0 w-64 bg-dark-900 shadow-2xl p-6 transform transition-transform overflow-y-auto" 
         x-show="sidebarOpen" 
         x-transition:enter="ease-out duration-300" x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="ease-in duration-200" x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full">
        
        <div class="flex items-center justify-between mb-8">
            <span class="text-xl font-bold">Menu</span>
            <button @click="sidebarOpen = false" class="text-gray-400 hover:text-white">
                <i class="fa-solid fa-xmark text-2xl"></i>
            </button>
        </div>

        <nav class="flex flex-col space-y-6">
            <a href="/" class="text-lg text-gray-300 hover:text-neon-blue transition-colors">Home</a>
            <a href="/projects" class="text-lg text-gray-300 hover:text-neon-blue transition-colors">Projects</a>
            <a href="/about" class="text-lg text-gray-300 hover:text-neon-blue transition-colors">About Us</a>
            <!-- Mobile Services Accordion -->
            <div x-data="{ servicesOpen: false }">
                <button @click="servicesOpen = !servicesOpen" class="w-full flex items-center justify-between text-lg text-gray-300 hover:text-neon-blue transition-colors">
                    Services
                    <i class="fa-solid fa-chevron-down text-sm transition-transform" :class="servicesOpen ? 'rotate-180' : ''"></i>
                </button>
                <div x-show="servicesOpen" x-collapse x-cloak class="mt-4 space-y-4 pl-4 border-l border-gray-800 ml-1">
                    @foreach($allServices as $service)
                    <div x-data="{ subOpen: false }">
                        <button @click="subOpen = !subOpen" class="w-full flex items-center justify-between text-sm font-bold text-gray-400 uppercase tracking-widest">
                            {{ $service['title'] }}
                            <i class="fa-solid fa-plus text-[10px] transition-transform" :class="subOpen ? 'rotate-45' : ''"></i>
                        </button>
                        <div x-show="subOpen" x-collapse x-cloak class="mt-2 space-y-2 pl-2">
                            @foreach($service['subservices'] as $sub)
                            <a href="/services/{{ $sub['slug'] }}" class="block text-sm text-gray-500 hover:text-white transition-colors">
                                {{ $sub['title'] }}
                            </a>
                            @endforeach
                        </div>
                    </div>
                    @endforeach
                    <a href="/services" class="block text-neon-blue font-bold text-sm pt-2">View All Services</a>
                </div>
            </div>
            <a href="/contact" class="text-lg text-gray-300 hover:text-neon-blue transition-colors">Contact</a>
        </nav>

        <div class="mt-12 pt-8 border-t border-gray-800">
            <p class="text-sm text-gray-500 mb-4">Connect with us</p>
            <div class="flex space-x-4">
                <a href="https://www.linkedin.com/company/world-of-tech-pvt-ltd" target="_blank" class="text-gray-400 hover:text-white"><i class="fa-brands fa-linkedin text-xl"></i></a>
                <a href="https://github.com/World-Of-Tech-Pvt-Ltd-Team" target="_blank" class="text-gray-400 hover:text-white"><i class="fa-brands fa-github text-xl"></i></a>
                <a href="https://wa.me/923220275616" target="_blank" class="text-gray-400 hover:text-white"><i class="fa-brands fa-whatsapp text-xl"></i></a>
            </div>
        </div>
    </div>
</div>
