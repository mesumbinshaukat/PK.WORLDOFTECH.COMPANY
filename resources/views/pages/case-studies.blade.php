@extends('layouts.app')

@section('title', 'Case Studies - Real-world SaaS & IT Success Stories | World of Tech Pakistan')
@section('meta_description', 'In-depth case studies on EnvisionSuite POS, Auto-Blog AI, Anglers Bay, and more. See how World of Tech Pakistan delivers quantifiable results for businesses in Karachi and UAE.')

@section('content')
<!-- JSON-LD for Case Studies -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "ItemList",
    "itemListElement": [
        @foreach($allCaseStudies as $index => $case)
        {
            "@type": "ListItem",
            "position": {{ $index + 1 }},
            "item": {
                "@type": "Article",
                "headline": "{{ $case['title'] }}",
                "description": "{{ $case['challenge'] }}",
                "author": {
                    "@type": "Organization",
                    "name": "World of Tech Pakistan",
                    "url": "https://pk.worldoftech.company"
                },
                "publisher": {
                    "@type": "Organization",
                    "name": "World of Tech Pakistan"
                }
            }
        }@if(!$loop->last),@endif
        @endforeach
    ]
}
</script>

<section class="py-32 px-6 bg-dark-950">
    <div class="max-w-4xl mx-auto">
        <div class="text-center mb-24">
            <h1 class="text-5xl md:text-7xl font-bold mb-8 tracking-tighter">
                Our <span class="text-neon-blue">Success</span> Stories
            </h1>
            <p class="text-gray-400 text-xl leading-relaxed max-w-2xl mx-auto">
                Real-world challenges solved with edge technology. Each case study represents a deep dive into our methodology, implementation, and the quantifiable results we deliver.
            </p>
        </div>

        <!-- Case Studies Accordion -->
        <div class="space-y-8" x-data="{ expanded: null }">
            @foreach($allCaseStudies as $index => $case)
            <div class="group bg-dark-900/50 border border-gray-800/50 rounded-[2rem] overflow-hidden transition-all duration-500 hover:border-neon-blue/40"
                 :class="expanded === {{ $index }} ? 'border-neon-blue/40 ring-1 ring-neon-blue/20 shadow-2xl shadow-blue-500/10' : ''">
                
                <!-- Accordion Header -->
                <button @click="expanded = expanded === {{ $index }} ? null : {{ $index }}" 
                        class="w-full text-left p-10 flex items-center justify-between gap-8">
                    <div class="flex-grow">
                        <div class="flex flex-wrap gap-2 mb-4">
                            @foreach($case['tags'] as $tag)
                            <span class="text-[9px] uppercase tracking-widest font-black text-gray-500 bg-white/5 px-2 py-0.5 rounded-full">{{ $tag }}</span>
                            @endforeach
                        </div>
                        <h2 class="text-2xl md:text-3xl font-bold text-white group-hover:text-neon-blue transition-colors tracking-tight">
                            {{ $case['title'] }}
                        </h2>
                    </div>
                    <div class="flex-shrink-0 w-12 h-12 rounded-full border border-gray-800 flex items-center justify-center transition-all duration-500"
                         :class="expanded === {{ $index }} ? 'rotate-180 bg-neon-blue border-neon-blue text-white' : 'text-gray-500'">
                        <i class="fa-solid fa-chevron-down text-sm"></i>
                    </div>
                </button>

                <!-- Accordion Content -->
                <div x-show="expanded === {{ $index }}" 
                     x-collapse 
                     x-cloak>
                    <div class="px-10 pb-12">
                        <div class="grid md:grid-cols-3 gap-12 pt-8 border-t border-white/5">
                            <!-- Challenge & Solution -->
                            <div class="md:col-span-2 space-y-10">
                                <div>
                                    <h4 class="text-xs font-black uppercase tracking-[0.2em] text-neon-blue mb-4">The Challenge</h4>
                                    <p class="text-gray-300 leading-relaxed text-lg">{{ $case['challenge'] }}</p>
                                </div>
                                <div>
                                    <h4 class="text-xs font-black uppercase tracking-[0.2em] text-neon-blue mb-4">Our Solution</h4>
                                    <p class="text-gray-300 leading-relaxed text-lg">{{ $case['solution'] }}</p>
                                </div>
                                <div class="bg-dark-950/50 rounded-2xl p-6 border border-white/5 italic text-gray-400">
                                    <h4 class="text-[10px] font-black uppercase tracking-[0.2em] text-gray-500 mb-3 not-italic">Key Results & Attribution</h4>
                                    <p class="mb-4">{{ $case['results'] }}</p>
                                    <p class="text-[10px] uppercase tracking-widest font-black text-gray-600 not-italic">Solution by World of Tech Pakistan</p>
                                </div>
                            </div>

                            <!-- Metrics Sidebar -->
                            <div class="space-y-8 bg-dark-950/30 rounded-3xl p-8 border border-white/5">
                                <h4 class="text-xs font-black uppercase tracking-[0.2em] text-gray-500 mb-6">Quantified Outcomes</h4>
                                @foreach($case['metrics'] as $label => $value)
                                <div>
                                    <div class="text-3xl font-bold text-white mb-1">{{ $value }}</div>
                                    <div class="text-xs text-gray-500 font-bold uppercase tracking-widest">{{ $label }}</div>
                                </div>
                                @endforeach
                                
                                @if($case['live_link'] !== '#')
                                <div class="pt-10">
                                    <a href="{{ $case['live_link'] }}" target="_blank" 
                                       class="inline-flex items-center gap-3 text-neon-blue hover:text-blue-400 font-bold text-sm tracking-tight transition-all group/link">
                                        Visit Live System 
                                        <i class="fa-solid fa-arrow-up-right-from-square text-xs group-hover/link:translate-x-1 group-hover/link:-translate-y-1 transition-transform"></i>
                                    </a>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Footer CTA -->
        <div class="mt-24 text-center p-16 bg-gradient-to-b from-dark-900/50 to-transparent border border-gray-800/50 rounded-[3rem]">
            <h3 class="text-3xl font-bold mb-6">Ready to write your success story?</h3>
            <p class="text-gray-400 mb-10 max-w-sm mx-auto">Let's discuss how our tech expertise can solve your unique business challenges.</p>
            <a href="/contact" class="inline-flex px-10 py-4 bg-neon-blue hover:bg-blue-600 rounded-full font-bold transition-all shadow-xl shadow-blue-500/20 active:scale-95">
                Start a Consultation
            </a>
        </div>
    </div>
</section>
@endsection
