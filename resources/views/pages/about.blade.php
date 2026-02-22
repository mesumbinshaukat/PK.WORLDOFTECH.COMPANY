@extends('layouts.app')

@section('title', 'About Us - World of Tech Pakistan')

@section('content')
<!-- Company Story -->
<section class="py-24 px-6 bg-dark-950">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-4xl md:text-5xl font-bold mb-8 text-center text-white">Our <span class="text-neon-blue">Story</span></h1>
        <div class="prose prose-invert prose-blue max-w-none text-gray-400 space-y-6 text-lg leading-relaxed">
            <p>
                World of Tech Pakistan was founded with a singular mission: to bridge the technological gap in the Pakistani market by delivering enterprise-grade software solutions previously reserved for global tech giants. What began as a collective of passionate software engineers and designers has evolved into Karachi's most innovative multi-SaaS and IT services startup.
            </p>
            <p>
                Our journey is rooted in a deep understanding of the local landscape combined with global software engineering standards. We believe that technology shouldn't just be an "add-on" for businesses in Pakistan; it should be the core engine that drives efficiency, scalability, and growth.
            </p>
            <p>
                By positioning ourselves at the intersection of traditional reliability and modern innovation, we help businesses navigate the complexities of digital transformation. Whether it's building a robust e-commerce platform that can handle millions of transactions or deploying an AI solution that automates customer engagement, our focus remains on security, performance, and user-centric design.
            </p>
            <p>
                We aren't just a service provider; we are your long-term technology partners. Our team's diverse expertise—spanning from core backend architecture to creative UI/UX—allows us to tackle challenges from all angles, delivering products that don't just work, but wow.
            </p>
        </div>
    </div>
</section>

<!-- Values Section -->
<section class="py-24 px-6 bg-dark-900">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
            <div class="text-center">
                <div class="w-16 h-16 bg-blue-500/10 rounded-2xl flex items-center justify-center mx-auto mb-6">
                    <i class="fa-solid fa-lightbulb text-neon-blue text-3xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-4">Innovation First</h3>
                <p class="text-gray-400">We constantly push the boundaries of technology to find better, faster, and more efficient ways to solve complex problems.</p>
            </div>
            <div class="text-center">
                <div class="w-16 h-16 bg-purple-500/10 rounded-2xl flex items-center justify-center mx-auto mb-6">
                    <i class="fa-solid fa-shield-heart text-neon-purple text-3xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-4">Unshakeable Security</h3>
                <p class="text-gray-400">Security isn't an afterthought. Every line of code we write is vetted for potential vulnerabilities, ensuring your data is safe.</p>
            </div>
            <div class="text-center">
                <div class="w-16 h-16 bg-indigo-500/10 rounded-2xl flex items-center justify-center mx-auto mb-6">
                    <i class="fa-solid fa-handshake-angle text-blue-400 text-3xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-4">Local Partnership</h3>
                <p class="text-gray-400">We understand Pakistan's business nuances and provide 24/7 local support, establishing deep-rooted trust with our partners.</p>
            </div>
        </div>
    </div>
</section>

<!-- Detailed Partners Section -->
<section class="py-24 px-6 bg-dark-950">
    <div class="max-w-7xl mx-auto">
        <h2 class="text-3xl md:text-4xl font-bold mb-16 text-center">The <span class="text-neon-blue">Experts</span> Behind WOT</h2>
        
        <div class="space-y-12">
            @foreach($partners as $index => $partner)
            <div class="flex flex-col {{ $index % 2 == 0 ? 'md:flex-row' : 'md:flex-row-reverse' }} gap-12 items-center bg-dark-900 rounded-3xl p-8 md:p-12 border border-gray-800">
                <a href="{{ $partner['social']['linkedin'] }}" target="_blank" class="w-64 h-64 flex-shrink-0 rounded-2xl overflow-hidden border-4 border-gray-800 shadow-2xl block hover:border-neon-blue transition-all">
                    <img src="{{ url('images/partners/' . $partner['image']) }}" alt="{{ $partner['name'] }}" class="w-full h-full object-cover" loading="lazy">
                </a>
                <div class="flex-grow">
                    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-6">
                        <div>
                            <h3 class="text-3xl font-bold text-white">{{ $partner['name'] }}</h3>
                            <p class="text-neon-blue font-semibold tracking-widest uppercase text-sm">{{ $partner['role'] }}</p>
                        </div>
                        <div class="flex space-x-6">
                            <a href="{{ $partner['social']['linkedin'] }}" target="_blank" class="text-gray-400 hover:text-white transition-all text-2xl hover:scale-110"><i class="fa-brands fa-linkedin"></i></a>
                            <a href="{{ $partner['social']['github'] }}" target="_blank" class="text-gray-400 hover:text-white transition-all text-2xl hover:scale-110"><i class="fa-brands fa-github"></i></a>
                        </div>
                    </div>
                    <p class="text-gray-400 text-lg leading-relaxed mb-6">
                        {{ $partner['bio'] }}
                    </p>
                    <div class="flex flex-wrap gap-3">
                        @foreach($partner['expertise'] as $skill)
                        <span class="bg-dark-950 px-4 py-2 rounded-lg border border-gray-800 text-gray-300 text-sm font-medium">
                            {{ $skill }}
                        </span>
                        @endforeach
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
