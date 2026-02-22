@extends('layouts.app')

@section('title', 'Contact Us - World of Tech Pakistan')

@section('content')
<section class="py-24 px-6 bg-dark-950">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
            
            <!-- Contact Info -->
            <div>
                <h1 class="text-4xl md:text-5xl font-bold mb-8">Get In <span class="text-neon-blue">Touch</span></h1>
                <p class="text-gray-400 text-lg mb-12 leading-relaxed max-w-lg">
                    Have a project in mind or want to learn more about our services? Our team in Karachi is ready to assist you in your digital journey.
                </p>

                <div class="space-y-8 mb-12">
                    <div class="flex items-start gap-6 group">
                        <div class="w-12 h-12 bg-neon-blue/10 rounded-xl flex items-center justify-center group-hover:bg-neon-blue transition-colors duration-300">
                            <i class="fa-solid fa-envelope text-neon-blue group-hover:text-white transition-colors duration-300"></i>
                        </div>
                        <div>
                            <h4 class="text-sm font-bold text-gray-500 uppercase tracking-widest mb-1">Email Us</h4>
                            <p class="text-lg font-medium text-white">info@worldoftech.company</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-6 group">
                        <div class="w-12 h-12 bg-green-500/10 rounded-xl flex items-center justify-center group-hover:bg-green-500 transition-colors duration-300">
                            <i class="fa-solid fa-phone text-green-500 group-hover:text-white transition-colors duration-300"></i>
                        </div>
                        <div>
                            <h4 class="text-sm font-bold text-gray-500 uppercase tracking-widest mb-1">Call / WhatsApp</h4>
                            <p class="text-lg font-medium text-white">+92 322 0275616</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-6 group">
                        <div class="w-12 h-12 bg-purple-500/10 rounded-xl flex items-center justify-center group-hover:bg-neon-purple transition-colors duration-300">
                            <i class="fa-solid fa-location-dot text-neon-purple group-hover:text-white transition-colors duration-300"></i>
                        </div>
                        <div>
                            <h4 class="text-sm font-bold text-gray-500 uppercase tracking-widest mb-1">Location</h4>
                            <p class="text-lg font-medium text-white">Karachi, Pakistan</p>
                        </div>
                    </div>
                </div>

                <!-- Map -->
                <div class="rounded-3xl overflow-hidden border border-gray-800 grayscale h-64 shadow-2xl">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d462118.891823528!2d66.82583803623315!3d24.84650630663456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33e0660293fd7%3A0xad3cd59a686b240b!2sKarachi%2C%20Karachi%20City%2C%20Sindh!5e0!3m2!1sen!2spk!4v1700000000000!5m2!1sen!2spk" 
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="bg-dark-900 rounded-[2.5rem] p-8 md:p-12 border border-gray-800 shadow-2xl relative">
                @if(app('session')->has('success'))
                <div class="bg-green-500/10 border border-green-500/50 text-green-400 p-6 rounded-2xl mb-8 flex items-start gap-4 animate-in fade-in slide-in-from-top-4 duration-500">
                    <i class="fa-solid fa-circle-check text-xl mt-1"></i>
                    <p>{{ app('session')->get('success') }}</p>
                </div>
                @endif

                <form action="/contact" method="POST" class="space-y-6" x-data="{ 
                    submitted: false, 
                    email: '', 
                    isValid: false,
                    validate() {
                        this.isValid = this.email.includes('@') && this.email.includes('.');
                    }
                }">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label class="text-sm font-bold text-gray-500 uppercase tracking-widest ml-1">Full Name</label>
                            <input type="text" name="name" required class="w-full bg-dark-950 border border-gray-800 rounded-2xl px-6 py-4 focus:border-neon-blue focus:outline-none transition-colors" placeholder="Mesum Shaukat">
                        </div>
                        <div class="space-y-2">
                            <label class="text-sm font-bold text-gray-500 uppercase tracking-widest ml-1">Email Address</label>
                            <input type="email" name="email" required x-model="email" @input="validate" class="w-full bg-dark-950 border border-gray-800 rounded-2xl px-6 py-4 focus:border-neon-blue focus:outline-none transition-colors" placeholder="info@worldoftech.company">
                        </div>
                    </div>

                    <div class="space-y-2">
                        <label class="text-sm font-bold text-gray-500 uppercase tracking-widest ml-1">Subject</label>
                        <input type="text" name="subject" required class="w-full bg-dark-950 border border-gray-800 rounded-2xl px-6 py-4 focus:border-neon-blue focus:outline-none transition-colors" placeholder="Project Inquiry / Consultation">
                    </div>

                    <div class="space-y-2">
                        <label class="text-sm font-bold text-gray-500 uppercase tracking-widest ml-1">Message</label>
                        <textarea name="message" required rows="6" class="w-full bg-dark-950 border border-gray-800 rounded-2xl px-6 py-4 focus:border-neon-blue focus:outline-none transition-colors resize-none" placeholder="Tell us about your project or inquiry..."></textarea>
                    </div>

                    <button type="submit" class="w-full bg-neon-blue hover:bg-blue-600 py-5 rounded-2xl font-bold text-lg transition-all shadow-xl shadow-blue-500/20 active:scale-[0.98] flex items-center justify-center gap-3">
                        <i class="fa-solid fa-paper-plane"></i> Send Message
                    </button>

                    <p class="text-center text-xs text-gray-500 mt-6">
                        By submitting this form, you agree to our <a href="/privacy" class="text-neon-blue hover:underline">Privacy Policy</a>.
                    </p>
                </form>

                <!-- Decorative elements -->
                <div class="absolute -top-12 -right-12 w-32 h-32 bg-neon-blue/5 rounded-full blur-3xl"></div>
                <div class="absolute -bottom-12 -left-12 w-32 h-32 bg-neon-purple/5 rounded-full blur-3xl"></div>
            </div>

        </div>
    </div>
</section>
@endsection
