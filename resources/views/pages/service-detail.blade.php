@extends('layouts.app')

@section('title', $service['title'] . ' - World of Tech Pakistan')

@section('content')
<section class="py-24 px-6 bg-dark-950">
    <div class="max-w-7xl mx-auto">
        <!-- Breadcrumbs -->
        <div class="flex items-center gap-2 text-sm text-gray-500 mb-8">
            <a href="/" class="hover:text-neon-blue transition-colors">Home</a>
            <i class="fa-solid fa-chevron-right text-[10px]"></i>
            <a href="/services" class="hover:text-neon-blue transition-colors">Services</a>
            <i class="fa-solid fa-chevron-right text-[10px]"></i>
            <span class="text-gray-300">{{ $service['title'] }}</span>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-16">
            <!-- Left: Main Content -->
            <div class="lg:col-span-2">
                <p class="text-neon-blue font-bold tracking-widest uppercase text-sm mb-4">{{ $service['parent'] }}</p>
                <h1 class="text-4xl md:text-5xl font-bold mb-8 text-white">{{ $service['title'] }}</h1>
                
                <div class="prose prose-invert max-w-none">
                    <p class="text-xl text-gray-300 leading-relaxed mb-12">
                        {{ $service['hero_desc'] }}
                    </p>

                    <div class="space-y-12">
                        <section>
                            <h2 class="text-2xl font-bold text-white mb-6 flex items-center gap-3">
                                <i class="fa-solid fa-circle-info text-neon-blue"></i> What We Provide
                            </h2>
                            <p class="text-gray-400 text-lg leading-relaxed">
                                {{ $service['what_we_provide'] }}
                            </p>
                        </section>

                        <section>
                            <h2 class="text-2xl font-bold text-white mb-6 flex items-center gap-3">
                                <i class="fa-solid fa-gears text-neon-blue"></i> Our Approach
                            </h2>
                            <p class="text-gray-400 text-lg leading-relaxed">
                                {{ $service['how_we_do_it'] }}
                            </p>
                        </section>
                    </div>
                </div>
            </div>

            <!-- Right: Sidebar Info -->
            <div class="space-y-8">
                <div class="bg-dark-900 border border-gray-800 rounded-3xl p-8 shadow-2xl">
                    <h3 class="text-xl font-bold text-white mb-6">What's Included</h3>
                    <ul class="space-y-4">
                        @foreach($service['whats_included'] as $item)
                        <li class="flex items-start gap-4">
                            <i class="fa-solid fa-check-circle text-neon-blue mt-1"></i>
                            <span class="text-gray-300">{{ $item }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>

                <div class="bg-neon-blue rounded-3xl p-8 text-white relative overflow-hidden group">
                    <div class="relative z-10">
                        <h3 class="text-2xl font-bold mb-4">Have a special project?</h3>
                        <p class="text-blue-100 mb-8">Let's discuss how we can help you achieve your business goals with our technical expertise.</p>
                        <a href="/contact" class="inline-flex items-center gap-2 bg-white text-neon-blue px-6 py-3 rounded-xl font-bold hover:bg-gray-100 transition-all active:scale-95">
                            Get a Free Consultation <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                    <i class="fa-solid fa-rocket absolute -bottom-4 -right-4 text-8xl text-blue-400/20 rotate-12 group-hover:rotate-0 transition-transform duration-500"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Related Services Section could go here -->

@endsection

@push('meta')
<meta name="description" content="{{ $service['meta_desc'] }}">
@endpush
