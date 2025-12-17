<header class="relative overflow-hidden">
    <!-- Grunge Background Pattern -->
    <div class="absolute inset-0 opacity-10 grunge-texture"></div>
    
    <!-- Top Bar -->
    <div class="bg-gradient-to-r from-redline via-hot-pink to-purple-grape relative z-10">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between py-3">
                <div class="flex items-center space-x-6 text-click-white text-sm font-semibold">
                    <span class="hover:text-click-lime transition transform hover:scale-105">☎ (022) 25362571</span>
                    <span class="hover:text-click-lime transition transform hover:scale-105">📱 085314150100</span>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="#" class="text-click-white hover:text-click-lime transition px-4 py-2 border-2 border-click-white hover:border-click-lime rounded-lg font-bold transform hover:scale-105 hover:rotate-1">
                        LOGIN
                    </a>
                    <a href="#" class="bg-click-lime text-charcoal hover:bg-cobalt-blue hover:text-click-white transition px-4 py-2 rounded-lg font-black transform hover:scale-105 hover:-rotate-1 shadow-brutal">
                        DAFTAR
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Header -->
    <div class="bg-cobalt-blue border-b-8 border-hot-pink relative z-10">
        <div class="container mx-auto px-4 py-6">
            <!-- Logo & Search -->
            <div class="flex items-center justify-between mb-6">
                <div class="flex items-center space-x-4">
                    <div class="bg-click-lime p-4 rounded-xl transform -rotate-3 shadow-brutal-lg hover:rotate-0 transition">
                        <span class="font-thunderhouse text-4xl text-charcoal">TA</span>
                    </div>
                    <div>
                        <h1 class="font-thunderhouse text-5xl text-click-white leading-none transform -skew-x-6">
                            TIRTA
                        </h1>
                        <h2 class="font-thunderhouse text-3xl text-hot-pink leading-none transform skew-x-6">
                            ANUGRAH
                        </h2>
                    </div>
                </div>

                <!-- Search Bar -->
                <div class="flex-1 max-w-2xl mx-8">
                    <div class="relative">
                        <input type="text" 
                               placeholder="CARI PRODUK KEREN..." 
                               class="w-full px-6 py-4 bg-charcoal text-click-white rounded-xl border-4 border-click-lime focus:border-hot-pink focus:outline-none font-bold text-lg shadow-brutal placeholder-purple-grape">
                        <button class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-click-lime hover:bg-hot-pink text-charcoal px-6 py-2 rounded-lg font-black transition hover:scale-105 shadow-brutal">
                            🔍 CARI
                        </button>
                    </div>
                </div>

                <!-- Cart -->
                <a href="#" class="relative group">
                    <div class="bg-hot-pink p-4 rounded-xl transform rotate-6 group-hover:rotate-0 transition shadow-brutal-lg">
                        <span class="text-3xl">🛒</span>
                        <span class="absolute -top-2 -right-2 bg-click-lime text-charcoal w-8 h-8 rounded-full flex items-center justify-center font-black text-sm border-4 border-charcoal">
                            5
                        </span>
                    </div>
                </a>
            </div>

            <!-- Navigation -->
            <nav class="flex justify-center space-x-2">
                @php
                $menus = ['STIKER', 'PLAKAT', 'BANNER', 'AKRILIK', 'KALENDER', 'TUMBLER'];
                $colors = ['bg-hot-pink', 'bg-click-lime', 'bg-purple-grape', 'bg-redline', 'bg-cobalt-blue', 'bg-hot-pink'];
                @endphp
                
                @foreach($menus as $index => $menu)
                <a href="#" class="{{ $colors[$index] }} text-click-white px-6 py-3 rounded-lg font-black text-lg transform hover:scale-110 hover:rotate-3 transition shadow-brutal hover:shadow-brutal-lg border-4 border-charcoal">
                    {{ $menu }}
                </a>
                @endforeach
            </nav>
        </div>
    </div>
</header>