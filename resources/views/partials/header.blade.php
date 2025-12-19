<header class="relative overflow-hidden">
    <!-- Grunge Background Pattern -->
    <div class="absolute inset-0 opacity-10 grunge-texture"></div>

    <!-- Top Bar -->
    <div class="bg-black-charcoal border-b-2 border-click-lime relative z-10">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between py-2">
                <!-- Contact -->
                <div class="flex items-center space-x-4 text-click-white text-xs font-poppins font-semibold">
                    <span>☎ (022) 25362571</span>
                    <span>📱 085314150100</span>
                </div>

                <!-- Auth -->
                <div class="flex items-center space-x-2">
                    <a href="#"
                        class="text-click-white border-2 border-click-white px-4 py-1.5 rounded-lg font-bold text-sm hover:bg-click-lime hover:text-black-charcoal transition">
                        LOGIN
                    </a>
                    <a href="#"
                        class="bg-hot-pink text-click-white px-4 py-1.5 rounded-lg font-black text-sm shadow-brutal border-2 border-click-white hover:bg-click-lime hover:text-black-charcoal transition">
                        DAFTAR
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Header -->
    <div class="bg-cobalt-blue border-b-4 border-hot-pink relative z-10">
        <div class="container mx-auto px-4 py-3">
            <div class="flex items-center justify-between max-w-6xl mx-auto">

                <!-- LEFT: LOGO + NAV -->
                <div class="flex items-center gap-6">
                    <!-- LOGO -->
                    <div class="flex-shrink-0">
                        <div
                            class="bg-click-lime p-3 rounded-xl transform -rotate-2 hover:rotate-0 transition shadow-brutal border-3 border-black-charcoal relative overflow-hidden cursor-pointer">
                            <div class="absolute inset-0 grunge-texture opacity-20"></div>
                            <img src="{{ asset('images/logo-ci.png') }}" alt="Cipta Imaji"
                                class="h-14 w-auto object-contain relative z-10">
                        </div>
                    </div>

                    <!-- NAV -->
                    <nav class="flex items-center gap-2">
                        <a href="{{ url('/') }}"
                            class="bg-click-lime text-black-charcoal px-6 py-2.5 rounded-lg font-black text-sm transform hover:scale-105 transition shadow-brutal border-3 border-black-charcoal flex items-center gap-2">
                            <span class="text-base">🏠</span>
                            <span>BERANDA</span>
                        </a>
                        <a href="{{ url('/produk') }}"
                            class="bg-hot-pink text-click-white px-6 py-2.5 rounded-lg font-black text-sm transform hover:scale-105 transition shadow-brutal border-3 border-black-charcoal flex items-center gap-2">
                            <span class="text-base">🛍️</span>
                            <span>PRODUK</span>
                        </a>
                    </nav>
                </div>

                <!-- CENTER: SEARCH -->
                <div class="flex-1 max-w-md mx-6">
                    <div class="relative">
                        <input type="text" placeholder="CARI PRODUK..."
                            class="w-full px-4 py-2.5 bg-black-charcoal text-click-white rounded-xl border-3 border-click-lime font-bold text-sm placeholder-click-white/50 focus:outline-none focus:border-hot-pink transition">
                        <button
                            class="absolute right-1.5 top-1/2 -translate-y-1/2 bg-click-lime px-4 py-1.5 rounded-lg font-black text-black-charcoal text-sm shadow-brutal border-2 border-black-charcoal hover:scale-105 transition">
                            🔍
                        </button>
                    </div>
                </div>

                <!-- RIGHT: ICON - Compact Version -->
                <div class="flex items-center gap-1.5">
                    <a href="{{ route('profile') }}"
                        class="bg-purple-grape p-2.5 rounded-xl shadow-brutal border-3 border-black-charcoal text-xl hover:scale-110 hover:rotate-6 transition-all duration-300 cursor-pointer block relative group">
                        👤
                        <!-- Glow Effect -->
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-purple-grape to-hot-pink opacity-0 group-hover:opacity-20 rounded-xl transition-opacity duration-300">
                        </div>
                    </a>

                    <a href="{{ route('keranjang') }}"
                        class="bg-hot-pink p-2.5 rounded-xl shadow-brutal border-3 border-black-charcoal relative text-xl hover:scale-110 hover:-rotate-6 transition-all duration-300 cursor-pointer block group">
                        🛒
                        <span
                            class="absolute -top-1.5 -right-1.5 bg-click-lime text-black-charcoal w-6 h-6 rounded-full flex items-center justify-center text-xs font-black border-3 border-cobalt-blue animate-pulse shadow-brutal">
                            5
                        </span>
                        <!-- Glow Effect -->
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-hot-pink to-click-lime opacity-0 group-hover:opacity-20 rounded-xl transition-opacity duration-300">
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>
    </div>

    {{-- <!-- PROMO -->
    <div class="bg-gradient-to-r from-click-lime via-hot-pink to-purple-grape py-1.5 overflow-hidden">
        <div class="animate-marquee whitespace-nowrap">
            <span class="mx-4 font-black text-black-charcoal text-xs">⚡ PROMO DISKON 50%</span>
            <span class="mx-4 font-black text-click-white text-xs">🔥 GRATIS ONGKIR</span>
            <span class="mx-4 font-black text-black-charcoal text-xs">🎉 CASHBACK MEMBER</span>
            <span class="mx-4 font-black text-click-white text-xs">⚡ PROMO DISKON 50%</span>
            <span class="mx-4 font-black text-black-charcoal text-xs">🔥 GRATIS ONGKIR</span>
            <span class="mx-4 font-black text-click-white text-xs">🎉 CASHBACK MEMBER</span>
        </div>
    </div> --}}
</header>

<style>
    @keyframes marquee {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(-50%);
        }
    }

    .animate-marquee {
        display: inline-block;
        animation: marquee 20s linear infinite;
    }
</style>
