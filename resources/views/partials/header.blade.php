<header id="mainNavbar" class="sticky top-0 z-50 transition-transform duration-300">
    <div class="absolute inset-0 opacity-10 grunge-texture"></div>

    <!-- Top Bar -->
    <div class="bg-black-charcoal border-b-2 border-click-lime relative z-10">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between py-2">
                <div class="flex items-center space-x-4 text-click-white text-xs font-poppins font-semibold">
                    <span>☎ xxxxxxxxxx</span>
                    <span>📱 085971620263</span>
                </div>

                <div class="flex items-center gap-2">
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

                <!-- LEFT -->
                <div class="flex items-center gap-6">
                    <div
                        class="bg-click-lime p-3 rounded-xl transform -rotate-2 hover:rotate-0 transition shadow-brutal border-3 border-black-charcoal cursor-pointer">
                        <img src="{{ asset('images/logo-ci.png') }}" class="h-14 w-auto" />
                    </div>

                    <nav class="flex items-center gap-2">
                        <a href="{{ url('/') }}"
                            class="bg-click-lime px-6 py-2.5 rounded-lg font-black text-sm shadow-brutal border-3 border-black-charcoal flex gap-2">
                            🏠 BERANDA
                        </a>
                        <a href="{{ url('/produk') }}"
                            class="bg-hot-pink px-6 py-2.5 rounded-lg font-black text-sm shadow-brutal border-3 border-black-charcoal flex gap-2 text-click-white">
                            🛍️ PRODUK
                        </a>
                    </nav>
                </div>

                <!-- SEARCH -->
                <div class="flex-1 max-w-md mx-6">
                    <div class="relative">
                        <input type="text" placeholder="CARI PRODUK..."
                            class="w-full px-4 py-2.5 bg-black-charcoal text-click-white rounded-xl border-3 border-click-lime font-bold text-sm">
                        <button
                            class="absolute right-1.5 top-1/2 -translate-y-1/2 bg-click-lime px-4 py-1.5 rounded-lg font-black shadow-brutal border-2 border-black-charcoal">
                            🔍
                        </button>
                    </div>
                </div>

                <!-- RIGHT ICON (INI YANG DIBENERIN) -->
                <div class="flex items-center gap-1">
                    <a href="{{ route('profile') }}"
                        class="bg-purple-grape p-2.5 rounded-lg shadow-brutal border-3 border-black-charcoal text-xl hover:scale-110 transition">
                        👤
                    </a>

                    <a href="{{ route('keranjang') }}"
                        class="bg-hot-pink p-2.5 rounded-lg shadow-brutal border-3 border-black-charcoal relative text-xl hover:scale-110 transition">
                        🛒
                        <span
                            class="absolute -top-1 -right-1 bg-click-lime text-black-charcoal w-5 h-5 rounded-full flex items-center justify-center text-xs font-black border-2 border-cobalt-blue animate-pulse">
                            5
                        </span>
                    </a>
                </div>


            </div>
        </div>
    </div>
</header>
