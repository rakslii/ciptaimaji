<footer class="bg-black-charcoal border-t-8 border-click-lime relative overflow-hidden mt-20">
    <!-- Grunge Pattern -->
    <div class="absolute inset-0 opacity-10 grunge-texture"></div>
    
    <!-- Geometric Background Elements -->
    <div class="absolute top-0 left-0 w-96 h-96 bg-cobalt-blue rounded-full opacity-10 blur-3xl"></div>
    <div class="absolute bottom-0 right-0 w-80 h-80 bg-hot-pink rounded-full opacity-10 blur-3xl"></div>
    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-64 h-64 bg-purple-grape rounded-full opacity-10 blur-3xl"></div>
    
    <!-- Top Decorative Strip -->
    <div class="bg-gradient-to-r from-hot-pink via-click-lime to-purple-grape h-2"></div>
    
    <div class="container mx-auto px-4 py-16 relative z-10">
        <!-- Main Footer Content -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 md:gap-12 mb-12">
            <!-- About -->
            <div class="transform hover:scale-105 transition duration-300">
                <div class="bg-hot-pink inline-block px-6 py-3 rounded-2xl transform -rotate-2 mb-6 shadow-brutal-lg border-4 border-black-charcoal relative">
                    <div class="absolute -top-2 -right-2 w-4 h-4 bg-click-lime rounded-full border-2 border-black-charcoal"></div>
                    <h4 class="font-poppins font-black text-2xl text-click-white tracking-tight">TENTANG KAMI</h4>
                </div>
                <p class="text-click-white/90 text-sm leading-relaxed font-poppins font-medium mb-4">
                    Solusi printing & dokumen terkeren buat semua kebutuhan kreatif lo! 
                    Dari stiker sampe banner, kita ada semuanya! 🎨🔥
                </p>
                <!-- Logo Mini -->
                <div class="inline-flex items-center gap-2 bg-click-lime/20 backdrop-blur-sm px-4 py-2 rounded-lg border-2 border-click-lime">
                    <div class="w-8 h-8 bg-click-lime rounded-lg flex items-center justify-center">
                        <span class="font-poppins font-black text-black-charcoal text-sm">CI</span>
                    </div>
                    <span class="font-poppins font-black text-click-white text-sm">CIPTA IMAJI</span>
                </div>
            </div>

            <!-- Services -->
            <div class="transform hover:scale-105 transition duration-300">
                <div class="bg-click-lime inline-block px-6 py-3 rounded-2xl transform rotate-2 mb-6 shadow-brutal-lg border-4 border-black-charcoal relative">
                    <div class="absolute -top-2 -left-2 w-4 h-4 bg-hot-pink transform rotate-45 border-2 border-black-charcoal"></div>
                    <h4 class="font-poppins font-black text-2xl text-black-charcoal tracking-tight">LAYANAN</h4>
                </div>
                <ul class="space-y-3">
                    @php
                    $services = [
                        ['name' => 'Digital Printing', 'icon' => '🖨️'],
                        ['name' => 'Offset Print', 'icon' => '📄'],
                        ['name' => 'Cutting Laser', 'icon' => '⚡'],
                        ['name' => 'Sublimasi', 'icon' => '🎨'],
                        ['name' => 'Outdoor Banner', 'icon' => '📢']
                    ];
                    @endphp
                    @foreach($services as $service)
                    <li>
                        <a href="#" class="text-click-white hover:text-hot-pink transition font-poppins font-semibold flex items-center gap-3 group">
                            <span class="text-lg group-hover:scale-125 transition">{{ $service['icon'] }}</span>
                            <span class="group-hover:translate-x-1 transition">{{ $service['name'] }}</span>
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>

            <!-- Contact -->
            <div class="transform hover:scale-105 transition duration-300">
                <div class="bg-purple-grape inline-block px-6 py-3 rounded-2xl transform -rotate-2 mb-6 shadow-brutal-lg border-4 border-black-charcoal relative">
                    <div class="absolute -bottom-2 -right-2 w-4 h-4 bg-click-lime rounded-full border-2 border-black-charcoal"></div>
                    <h4 class="font-poppins font-black text-2xl text-click-white tracking-tight">HUBUNGI KAMI</h4>
                </div>
                <ul class="space-y-4 text-click-white">
                    <li class="flex items-center gap-3 group cursor-pointer hover:text-click-lime transition">
                        <div class="bg-cobalt-blue p-2 rounded-lg border-2 border-click-lime group-hover:scale-110 transition">
                            <span class="text-xl">☎</span>
                        </div>
                        <div>
                            <p class="text-xs text-click-white/60 font-poppins">Telepon</p>
                            <p class="font-poppins font-bold">(022) 25362571</p>
                        </div>
                    </li>
                    <li class="flex items-center gap-3 group cursor-pointer hover:text-hot-pink transition">
                        <div class="bg-hot-pink p-2 rounded-lg border-2 border-click-white group-hover:scale-110 transition">
                            <span class="text-xl">📱</span>
                        </div>
                        <div>
                            <p class="text-xs text-click-white/60 font-poppins">WhatsApp</p>
                            <p class="font-poppins font-bold">085314150100</p>
                        </div>
                    </li>
                    <li class="flex items-center gap-3 group cursor-pointer hover:text-purple-grape transition">
                        <div class="bg-click-lime p-2 rounded-lg border-2 border-black-charcoal group-hover:scale-110 transition">
                            <span class="text-xl">📧</span>
                        </div>
                        <div>
                            <p class="text-xs text-click-white/60 font-poppins">Email</p>
                            <p class="font-poppins font-bold text-sm">info@tirtaanugrah.com</p>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- Hours & CTA -->
            <div class="transform hover:scale-105 transition duration-300">
                <div class="bg-redline inline-block px-6 py-3 rounded-2xl transform rotate-2 mb-6 shadow-brutal-lg border-4 border-black-charcoal relative">
                    <div class="absolute -top-2 -left-2 w-4 h-4 bg-click-white rounded-full border-2 border-black-charcoal animate-pulse"></div>
                    <h4 class="font-poppins font-black text-2xl text-click-white tracking-tight">JAM BUKA</h4>
                </div>
                <div class="bg-gradient-to-br from-cobalt-blue to-purple-grape p-6 rounded-2xl border-4 border-click-lime transform -rotate-1 shadow-brutal-lg mb-6 relative overflow-hidden">
                    <div class="absolute inset-0 grunge-texture opacity-20"></div>
                    <div class="relative z-10">
                        <p class="text-click-white font-poppins font-bold text-base mb-2">SENIN - SABTU</p>
                        <p class="font-poppins font-black text-4xl text-hot-pink drop-shadow-lg">08.30-17.30</p>
                        <p class="text-click-lime font-poppins font-black text-lg">WIB</p>
                    </div>
                </div>
                
                <!-- Quick Contact Button -->
                <a href="https://wa.me/085314150100" target="_blank" class="block w-full bg-gradient-to-r from-hot-pink to-redline hover:from-click-lime hover:to-click-lime text-click-white hover:text-black-charcoal py-4 rounded-2xl font-poppins font-black text-center transform hover:scale-105 hover:rotate-1 transition shadow-brutal-lg border-4 border-click-white group">
                    <span class="inline-block group-hover:animate-bounce mr-2">💬</span>
                    CHAT SEKARANG!
                </a>
            </div>
        </div>

        <!-- Newsletter Section -->
        <div class="bg-gradient-to-r from-purple-grape via-hot-pink to-cobalt-blue p-8 rounded-3xl border-6 border-click-lime shadow-brutal-xl mb-12 relative overflow-hidden">
            <div class="absolute inset-0 grunge-texture opacity-20"></div>
            <div class="relative z-10 text-center max-w-2xl mx-auto">
                <h3 class="font-poppins font-black text-3xl md:text-4xl text-click-white mb-3 drop-shadow-lg">
                    DAPETIN PROMO EKSKLUSIF! 🎉
                </h3>
                <p class="text-click-white/90 font-poppins font-semibold mb-6">
                    Subscribe newsletter buat dapetin diskon & info promo terbaru!
                </p>
                <div class="flex flex-col md:flex-row gap-3 max-w-xl mx-auto">
                    <input type="email" 
                           placeholder="Masukkan email kamu..." 
                           class="flex-1 px-6 py-4 bg-black-charcoal text-click-white rounded-xl border-4 border-click-white focus:border-click-lime focus:outline-none font-poppins font-bold shadow-brutal">
                    <button class="bg-click-lime hover:bg-black-charcoal text-black-charcoal hover:text-click-lime px-8 py-4 rounded-xl font-poppins font-black transform hover:scale-105 hover:rotate-2 transition shadow-brutal-lg border-4 border-black-charcoal whitespace-nowrap">
                        SUBSCRIBE NOW! 🚀
                    </button>
                </div>
            </div>
        </div>

        <!-- Bottom Bar -->
        <div class="border-t-4 border-hot-pink pt-8 flex flex-col md:flex-row items-center justify-between gap-6">
            <!-- Copyright -->
            <div class="text-center md:text-left">
                <p class="text-click-white font-poppins font-bold text-sm">
                    © 2024 <span class="text-click-lime font-black">TIRTA ANUGRAH</span> - All Rights Reserved
                </p>
                <p class="text-click-white/60 font-poppins text-xs mt-1">
                    Made with <span class="text-hot-pink">❤️</span> & <span class="text-click-lime">☕</span> in Bandung
                </p>
            </div>
            
            <!-- Social Media -->
            <div class="flex items-center gap-3">
                <span class="text-click-white font-poppins font-bold text-sm mr-2">Follow Us:</span>
                @php
                $socials = [
                    ['name' => 'facebook', 'icon' => '👍', 'color' => 'bg-cobalt-blue', 'border' => 'border-click-lime'],
                    ['name' => 'instagram', 'icon' => '📸', 'color' => 'bg-hot-pink', 'border' => 'border-click-white'],
                    ['name' => 'twitter', 'icon' => '🐦', 'color' => 'bg-click-lime', 'border' => 'border-cobalt-blue'],
                    ['name' => 'whatsapp', 'icon' => '💬', 'color' => 'bg-purple-grape', 'border' => 'border-click-lime']
                ];
                $rotations = ['-rotate-3', 'rotate-3', '-rotate-6', 'rotate-6'];
                @endphp
                @foreach($socials as $index => $social)
                <a href="#" class="{{ $social['color'] }} {{ $social['border'] }} hover:bg-click-lime hover:border-black-charcoal text-click-white hover:text-black-charcoal w-12 h-12 rounded-xl flex items-center justify-center transform {{ $rotations[$index] }} hover:rotate-0 hover:scale-125 transition shadow-brutal border-4 group">
                    <span class="text-2xl group-hover:scale-125 transition">{{ $social['icon'] }}</span>
                </a>
                @endforeach
            </div>
        </div>
        
        <!-- Decorative Bottom Elements -->
        <div class="mt-8 flex justify-center gap-2">
            <div class="w-3 h-3 bg-click-lime rounded-full"></div>
            <div class="w-3 h-3 bg-hot-pink rounded-full"></div>
            <div class="w-3 h-3 bg-purple-grape rounded-full"></div>
            <div class="w-3 h-3 bg-cobalt-blue rounded-full"></div>
            <div class="w-3 h-3 bg-redline rounded-full"></div>
        </div>
    </div>
</footer>