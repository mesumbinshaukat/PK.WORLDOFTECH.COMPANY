@extends('layouts.app')

@section('title', 'Top Projects - SaaS, AI & E-commerce Solutions | World of Tech Pakistan')
@section('meta_description', 'Explore our portfolio of top projects, including EnvisionSuite SaaS POS, AI-powered blogging tools, and premium e-commerce solutions crafted by World of Tech Pakistan in Karachi.')

@section('content')
<section class="py-32 px-6 bg-dark-950" x-data="{ 
    filterTech: 'All', 
    filterStatus: 'All',
    projects: {{ json_encode($allProjects) }},
    get filteredProjects() {
        return this.projects.filter(p => {
            const techMatch = this.filterTech === 'All' || (p.tech && p.tech.some(t => t.toLowerCase().includes(this.filterTech.toLowerCase())));
            const statusMatch = this.filterStatus === 'All' || p.status === this.filterStatus;
            return techMatch && statusMatch;
        });
    }
}">
    <div class="max-w-7xl mx-auto">
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-8 mb-20">
            <div class="max-w-2xl">
                <h1 class="text-5xl md:text-7xl font-bold mb-6 tracking-tighter">
                    Innovation <br/>
                    <span class="text-neon-blue">In Every Pixel.</span>
                </h1>
                <p class="text-gray-400 text-lg leading-relaxed">
                    A curated showcase of our journey in building innovative, secure, and production-ready solutions for global and local clients. From SaaS POS systems in Karachi to AI-powered blogging tools, all developed by the World of Tech Pakistan team.
                </p>
            </div>

            <!-- Enhanced Filters -->
            <div class="flex flex-wrap items-center gap-3">
                <div class="flex items-center gap-3 bg-dark-900/50 border border-gray-800 rounded-2xl px-5 py-2.5 backdrop-blur-xl">
                    <span class="text-[10px] font-black text-gray-500 uppercase tracking-[0.2em]">Technology</span>
                    <select x-model="filterTech" class="bg-transparent text-sm font-bold focus:outline-none cursor-pointer text-white">
                        <option value="All" class="bg-dark-950 text-white">All Projects</option>
                        <option value="PHP" class="bg-dark-950 text-white">PHP / Frameworks</option>
                        <option value="React" class="bg-dark-950 text-white">React / Inertia</option>
                        <option value="AI" class="bg-dark-950 text-white">AI & Machine Learning</option>
                        <option value="Shopify" class="bg-dark-950 text-white">Shopify / E-commerce</option>
                        <option value="WordPress" class="bg-dark-950 text-white">WordPress</option>
                        <option value=".NET" class="bg-dark-950 text-white">.NET Ecosystem</option>
                    </select>
                </div>
                <div class="flex items-center gap-3 bg-dark-900/50 border border-gray-800 rounded-2xl px-5 py-2.5 backdrop-blur-xl">
                    <span class="text-[10px] font-black text-gray-500 uppercase tracking-[0.2em]">Visibility</span>
                    <select x-model="filterStatus" class="bg-transparent text-sm font-bold focus:outline-none cursor-pointer text-white">
                        <option value="All" class="bg-dark-950 text-white">All Live</option>
                        <option value="Live" class="bg-dark-950 text-white">Publicly Live</option>
                        <option value="Not live" class="bg-dark-950 text-white">Internal / Prototype</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Dynamic Project Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
            <template x-for="(project, index) in filteredProjects" :key="index">
                <div class="group relative flex flex-col bg-dark-900/40 border border-gray-800/50 rounded-[2.5rem] overflow-hidden transition-all duration-500 hover:border-neon-blue/40 hover:shadow-[0_20px_80px_-20px_rgba(59,130,246,0.15)] hover:-translate-y-2">
                    <!-- Card Background Glow -->
                    <div class="absolute -inset-1 bg-gradient-to-r from-neon-blue/0 via-neon-blue/10 to-neon-blue/0 opacity-0 group-hover:opacity-100 transition-opacity duration-700 blur-xl"></div>
                    
                    <div class="relative h-64 overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-t from-dark-900 via-dark-900/20 to-transparent z-10"></div>
                        <img :src="'https://api.dicebear.com/7.x/shapes/svg?seed=' + project.title + '&backgroundColor=0f172a'" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 opacity-40 group-hover:opacity-60" 
                             alt="Background">
                        
                        <div class="absolute top-6 left-6 z-20">
                            <span :class="project.status === 'Live' ? 'bg-emerald-500/10 text-emerald-400 border-emerald-500/20' : 'bg-gray-500/10 text-gray-400 border-white/5'" 
                                  class="text-[9px] uppercase tracking-[0.2em] font-black px-3 py-1.5 rounded-full border backdrop-blur-md" 
                                  x-text="project.status"></span>
                        </div>
                    </div>
                    
                    <div class="relative p-10 flex flex-col flex-grow z-20">
                        <h3 class="text-2xl font-bold mb-4 text-white group-hover:text-neon-blue transition-colors tracking-tight" x-text="project.title"></h3>
                        <p class="text-gray-400 text-[15px] leading-relaxed mb-8 font-medium" x-text="project.description"></p>
                        
                        <div class="flex flex-wrap gap-2 mb-6">
                            <template x-for="tech in project.tech">
                                <span class="bg-neon-blue/5 text-neon-blue text-[9px] uppercase tracking-widest font-black px-3 py-1.5 rounded-lg border border-neon-blue/10" x-text="tech"></span>
                            </template>
                        </div>

                        <div x-show="project.impact" class="mb-8 p-4 bg-dark-950/50 rounded-2xl border border-white/5">
                            <h4 class="text-[9px] font-black uppercase tracking-[0.2em] text-gray-500 mb-2">Estimated Impact</h4>
                            <p class="text-xs text-gray-400 leading-relaxed italic" x-text="project.impact"></p>
                        </div>

                        <div class="mt-auto flex items-center gap-6 pt-10 border-t border-white/5">
                            <template x-if="project.github && project.github !== '#'">
                                <a :href="project.github" target="_blank" class="text-gray-500 hover:text-white transition-colors flex items-center gap-2 text-xs font-black uppercase tracking-widest">
                                    <i class="fa-brands fa-github text-lg"></i> Repository
                                </a>
                            </template>
                            <template x-if="project.link && project.link !== '#'">
                                <a :href="project.link" target="_blank" class="text-neon-blue hover:text-blue-400 transition-colors flex items-center gap-2 text-xs font-black uppercase tracking-widest ml-auto">
                                    Launch Project <i class="fa-solid fa-arrow-right-long text-xs"></i>
                                </a>
                            </template>
                        </div>
                    </div>
                </div>
            </template>
        </div>

        <!-- Empty State -->
        <div x-show="filteredProjects.length === 0" class="py-32 text-center" x-cloak>
            <div class="inline-flex items-center justify-center w-24 h-24 rounded-full bg-dark-900 border border-gray-800 mb-8">
                <i class="fa-solid fa-microchip text-3xl text-gray-700 animate-pulse"></i>
            </div>
            <h3 class="text-2xl font-bold text-white mb-2">Computational Void Encountered</h3>
            <p class="text-gray-500 max-w-sm mx-auto">No projects currently match your filtered parameters. Try broadening your criteria.</p>
        </div>
    </div>
</section>
@endsection
