<header class="relative overflow-hidden">
    <!-- Grunge Background Pattern -->
    <div class="absolute inset-0 opacity-10 grunge-texture"></div>

    <!-- Geometric Background Elements -->
    <div class="absolute top-0 left-0 w-64 h-64 bg-click-lime rounded-full opacity-10 blur-3xl"></div>
    <div class="absolute bottom-0 right-0 w-80 h-80 bg-hot-pink rounded-full opacity-10 blur-3xl"></div>

    <!-- Top Bar -->
    <div class="bg-black-charcoal border-b-4 border-click-lime relative z-10">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between py-3">
                <!-- Contact -->
                <div class="flex items-center space-x-6 text-click-white text-sm font-poppins font-semibold">
                    <span>☎ (022) 25362571</span>
                    <span>📱 085314150100</span>
                </div>

                <!-- Auth -->
                <div class="flex items-center space-x-3">
                    <a href="#" class="text-click-white border-2 border-click-white px-5 py-2 rounded-xl font-bold hover:bg-click-lime hover:text-black-charcoal transition">
                        LOGIN
                    </a>
                    <a href="#" class="bg-hot-pink text-click-white px-5 py-2 rounded-xl font-black shadow-brutal border-2 border-click-white hover:bg-click-lime hover:text-black-charcoal transition">
                        DAFTAR
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Header -->
    <div class="bg-cobalt-blue border-b-8 border-hot-pink relative z-10">
        <div class="container mx-auto px-4 py-6">

            <!-- LOGO + SEARCH + ICON -->
            <div class="flex items-center justify-between mb-6 gap-6">

                <!-- LOGO -->
               <div class="flex items-center group cursor-pointer ml-6">
    <div class="bg-click-lime p-4 rounded-2xl transform -rotate-3 group-hover:rotate-0 transition shadow-brutal-lg border-4 border-black-charcoal relative overflow-hidden">
        <div class="absolute inset-0 grunge-texture opacity-20"></div>
        <img 
            src="{{ asset('images/logo-ci.png') }}" 
            alt="Cipta Imaji"
            class="h-24 w-auto object-contain relative z-10"
        >
    </div>
</div>



                <!-- SEARCH -->
                <div class="flex-1 max-w-2xl">
                    <div class="relative">
                        <input
                            type="text"
                            placeholder="CARI PRODUK KEREN..."
                            class="w-full px-6 py-4 bg-black-charcoal text-click-white rounded-2xl border-4 border-click-lime font-bold"
                        >
                        <button class="absolute right-2 top-1/2 -translate-y-1/2 bg-click-lime px-6 py-2 rounded-xl font-black text-black-charcoal shadow-brutal border-2 border-black-charcoal">
                            🔍 CARI
                        </button>
                    </div>
                </div>

                <!-- ICON -->
                <div class="flex items-center gap-3">
                    <div class="bg-purple-grape p-3 rounded-xl shadow-brutal border-4 border-black-charcoal">👤</div>
                    <div class="bg-hot-pink p-3 rounded-xl shadow-brutal-lg border-4 border-black-charcoal relative">
                        🛒
                        <span class="absolute -top-2 -right-2 bg-click-lime text-black-charcoal w-6 h-6 rounded-full flex items-center justify-center text-xs font-black border-2 border-cobalt-blue">
                            5
                        </span>
                    </div>
                </div>
            </div>

            <!-- NAV -->
            <nav class="flex justify-center flex-wrap gap-2">
                @php
                $menus = [
                    ['STIKER','🏷️','bg-hot-pink','text-click-white'],
                    ['PLAKAT','🏆','bg-click-lime','text-black-charcoal'],
                    ['BANNER','📢','bg-purple-grape','text-click-white'],
                    ['AKRILIK','💎','bg-redline','text-click-white'],
                    ['KALENDER','📅','bg-cobalt-blue','text-click-white'],
                    ['TUMBLER','🥤','bg-hot-pink','text-click-white'],
                ];
                @endphp

                @foreach($menus as $m)
                <a href="#" class="{{ $m[2] }} {{ $m[3] }} px-5 py-3 rounded-xl font-black transform hover:scale-110 transition shadow-brutal border-4 border-black-charcoal">
                    {{ $m[1] }} {{ $m[0] }}
                </a>
                @endforeach
            </nav>
        </div>
    </div>

    <!-- PROMO -->
    <div class="bg-gradient-to-r from-click-lime via-hot-pink to-purple-grape py-2 overflow-hidden">
        <div class="animate-marquee whitespace-nowrap">
            <span class="mx-6 font-black">⚡ PROMO DISKON 50%</span>
            <span class="mx-6 font-black">🔥 GRATIS ONGKIR</span>
            <span class="mx-6 font-black">🎉 CASHBACK MEMBER</span>
        </div>
    </div>
</header>

<style>
@keyframes marquee {
    0% { transform: translateX(0); }
    100% { transform: translateX(-50%); }
}
.animate-marquee {
    display: inline-block;
    animation: marquee 20s linear infinite;
}
</style>
