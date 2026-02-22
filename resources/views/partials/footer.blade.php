<footer class="bg-dark-900 border-t border-gray-800 pt-16 pb-8 px-6">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
            <!-- Brand Column -->
            <div class="col-span-1 md:col-span-1">
                <a href="/" class="mb-6 block group">
                    <img src="{{ url('images/logo.png') }}" alt="World of Tech PK" class="h-16 w-auto group-hover:scale-105 transition-transform duration-300">
                </a>
                <p class="text-gray-400 leading-relaxed mb-6">
                    Empowering Pakistan's digital future through cutting-edge SaaS solutions and premium IT services.
                </p>
                <div class="flex space-x-4">
                    <a href="https://www.linkedin.com/company/world-of-tech-pvt-ltd" target="_blank" class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center hover:bg-neon-blue transition-all"><i class="fa-brands fa-linkedin-in text-white text-sm"></i></a>
                    <a href="https://github.com/World-Of-Tech-Pvt-Ltd-Team" target="_blank" class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center hover:bg-neon-blue transition-all"><i class="fa-brands fa-github text-white text-sm"></i></a>
                    <a href="https://wa.me/923220275616" target="_blank" class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center hover:bg-neon-blue transition-all"><i class="fa-brands fa-whatsapp text-white text-sm"></i></a>
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h4 class="text-base font-semibold text-white mb-6 uppercase tracking-wider">Navigation</h4>
                <ul class="space-y-4">
                    <li><a href="/" class="text-gray-400 hover:text-neon-blue transition-colors">Home</a></li>
                    <li><a href="/projects" class="text-gray-400 hover:text-neon-blue transition-colors">Projects</a></li>
                    <li><a href="/about" class="text-gray-400 hover:text-neon-blue transition-colors">About Us</a></li>
                    <li><a href="/services" class="text-gray-400 hover:text-neon-blue transition-colors">Services</a></li>
                </ul>
            </div>

            <!-- Services -->
            <div>
                <h4 class="text-base font-semibold text-white mb-6 uppercase tracking-wider">Services</h4>
                <ul class="space-y-4">
                    <li><a href="/services" class="text-gray-400 hover:text-neon-blue transition-colors">Web Development</a></li>
                    <li><a href="/services" class="text-gray-400 hover:text-neon-blue transition-colors">AI & Machine Learning</a></li>
                    <li><a href="/services" class="text-gray-400 hover:text-neon-blue transition-colors">SaaS Development</a></li>
                    <li><a href="/services" class="text-gray-400 hover:text-neon-blue transition-colors">Cloud Solutions</a></li>
                </ul>
            </div>

            <!-- Contact/Legal -->
            <div>
                <h4 class="text-base font-semibold text-white mb-6 uppercase tracking-wider">Legal</h4>
                <ul class="space-y-4 mb-8">
                    <li><a href="/privacy" class="text-gray-400 hover:text-neon-blue transition-colors text-sm">Privacy Policy</a></li>
                    <li><a href="/terms" class="text-gray-400 hover:text-neon-blue transition-colors text-sm">Terms of Service</a></li>
                    <li><a href="/cookies" class="text-gray-400 hover:text-neon-blue transition-colors text-sm">Cookie Policy</a></li>
                </ul>
                <h4 class="text-base font-semibold text-white mb-4 uppercase tracking-wider">Contact</h4>
                <p class="text-sm text-gray-400 mb-2"><i class="fa-solid fa-envelope mr-2"></i> info@worldoftech.company</p>
                <p class="text-sm text-gray-400"><i class="fa-solid fa-phone mr-2"></i> +92 322 0275616</p>
            </div>
        </div>

        <div class="border-t border-gray-800 pt-8 flex flex-col md:flex-row justify-between items-center bg-dark-900">
            <p class="text-gray-500 text-sm mb-4 md:mb-0">
                &copy; {{ date('Y') }} World of Tech Pakistan. All rights reserved.
            </p>
            
        </div>
    </div>
</footer>
