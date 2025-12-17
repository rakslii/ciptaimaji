<footer class="bg-charcoal border-t-8 border-click-lime relative overflow-hidden mt-20">
    <!-- Grunge Pattern -->
    <div class="absolute inset-0 opacity-5 grunge-texture"></div>
    
    <div class="container mx-auto px-4 py-16 relative z-10">
        <div class="grid grid-cols-4 gap-12 mb-12">
            <!-- About -->
            <div>
                <div class="bg-hot-pink inline-block px-6 py-2 rounded-lg transform -rotate-2 mb-6 shadow-brutal">
                    <h4 class="font-thunderhouse text-3xl text-click-white">ABOUT US</h4>
                </div>
                <p class="text-click-white text-sm leading-relaxed font-medium">
                    Solusi printing & dokumen terkeren buat semua kebutuhan kreatif lo! 
                    Dari stiker sampe banner, kita ada semuanya! 🎨🔥
                </p>
            </div>

            <!-- Services -->
            <div>
                <div class="bg-click-lime inline-block px-6 py-2 rounded-lg transform rotate-2 mb-6 shadow-brutal">
                    <h4 class="font-thunderhouse text-3xl text-charcoal">LAYANAN</h4>
                </div>
                <ul class="space-y-3">
                    @foreach(['Digital Printing', 'Offset Print', 'Cutting Laser', 'Sublimasi', 'Outdoor Banner'] as $service)
                    <li>
                        <a href="#" class="text-click-white hover:text-hot-pink transition font-semibold flex items-center space-x-2">
                            <span class="text-click-lime">▶</span>
                            <span>{{ $service }}</span>
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>

            <!-- Contact -->
            <div>
                <div class="bg-purple-grape inline-block px-6 py-2 rounded-lg transform -rotate-2 mb-6 shadow-brutal">
                    <h4 class="font-thunderhouse text-3xl text-click-white">KONTAK</h4>
                </div>
                <ul class="space-y-4 text-click-white">
                    <li class="flex items-center space-x-3">
                        <span class="text-2xl">☎</span>
                        <span class="font-bold">(022) 25362571</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <span class="text-2xl">📱</span>
                        <span class="font-bold">085314150100</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <span class="text-2xl">📧</span>
                        <span class="font-bold">info@tirtaanugrah.com</span>
                    </li>
                </ul>
            </div>

            <!-- Hours -->
            <div>
                <div class="bg-redline inline-block px-6 py-2 rounded-lg transform rotate-2 mb-6 shadow-brutal">
                    <h4 class="font-thunderhouse text-3xl text-click-white">JAM BUKA</h4>
                </div>
                <div class="bg-cobalt-blue p-6 rounded-xl border-4 border-click-lime transform -rotate-1 shadow-brutal">
                    <p class="text-click-white font-bold text-lg mb-2">SENIN - SABTU</p>
                    <p class="font-thunderhouse text-3xl text-hot-pink">08.30-17.30</p>
                    <p class="text-click-lime font-black text-xl">WIB</p>
                </div>
            </div>
        </div>

        <!-- Bottom Bar -->
        <div class="border-t-4 border-hot-pink pt-8 flex items-center justify-between">
            <p class="text-click-white font-bold">
                © 2024 <span class="text-click-lime">TIRTA ANUGRAH</span> - All Rights Reserved
            </p>
            <div class="flex space-x-4">
                @foreach(['facebook', 'instagram', 'twitter', 'whatsapp'] as $social)
                <a href="#" class="bg-hot-pink hover:bg-click-lime text-click-white hover:text-charcoal w-12 h-12 rounded-lg flex items-center justify-center transform hover:scale-110 hover:rotate-12 transition shadow-brutal font-bold text-xl">
                    {{ strtoupper(substr($social, 0, 1)) }}
                </a>
                @endforeach
            </div>
        </div>
    </div>
</footer>