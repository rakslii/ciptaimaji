@extends('layouts.app')

@section('title', 'Home - Tirta Anugrah Grunge Pop')

@section('content')
<!-- Hero Section -->
<section class="container mx-auto px-4 py-12">
    <div class="relative bg-gradient-to-br from-purple-grape via-cobalt-blue to-redline rounded-3xl overflow-hidden border-8 border-click-lime shadow-brutal-xl">
        <!-- Grunge Overlay -->
        <div class="absolute inset-0 grunge-texture opacity-20"></div>
        
        <div class="relative z-10 grid grid-cols-2 gap-8 p-16">
            <!-- Left Content -->
            <div class="flex flex-col justify-center">
                <div class="mb-8">
                    <h1 class="font-thunderhouse text-7xl text-click-white leading-none mb-4 transform -skew-x-3">
                        FOR ALL YOU
                    </h1>
                    <h2 class="font-thunderhouse text-9xl text-click-lime leading-none mb-4 transform skew-x-3">
                        PRINTING
                    </h2>
                    <h3 class="font-thunderhouse text-5xl text-hot-pink leading-tight transform -skew-x-3">
                        & DOCUMENT
                        <span class="block text-click-white">SOLUTION</span>
                    </h3>
                </div>

                <!-- Operation Hours Badge -->
                <div class="inline-block">
                    <div class="bg-click-lime p-6 rounded-2xl transform -rotate-2 shadow-brutal-lg border-4 border-charcoal">
                        <p class="font-thunderhouse text-2xl text-charcoal mb-2">JAM OPERASIONAL</p>
                        <p class="font-black text-xl text-redline mb-1">SENIN - SABTU</p>
                        <p class="font-thunderhouse text-5xl text-charcoal">08.30-17.30 WIB</p>
                    </div>
                </div>
            </div>

            <!-- Right Content - Services -->
            <div class="flex flex-col justify-center space-y-4">
                @php
                $services = [
                    'OFFSET',
                    'DIGITAL PRINTING',
                    'OUTDOOR & INDOOR',
                    'GRAFIR & LASER',
                    'SUBLIM & DTF'
                ];
                @endphp
                
                @foreach($services as $index => $service)
                <div class="bg-charcoal/80 backdrop-blur p-6 rounded-xl border-4 border-hot-pink transform hover:scale-105 transition shadow-brutal">
                    <div class="flex items-center space-x-4">
                        <span class="text-5xl text-click-lime">✓</span>
                        <span class="font-black text-3xl text-click-white">{{ $service }}</span>
                    </div>
                </div>
                @endforeach

                <div class="mt-8">
                    <img src="/images/megaphone.png" alt="Promo" class="w-full max-w-xs mx-auto transform rotate-12 hover:rotate-0 transition">
                </div>
            </div>
        </div>

        <!-- Navigation Dots -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 flex space-x-4 z-20">
            @for($i = 0; $i < 3; $i++)
            <button class="w-6 h-6 rounded-full {{ $i === 0 ? 'bg-click-lime' : 'bg-click-white/50' }} border-4 border-charcoal hover:scale-125 transition"></button>
            @endfor
        </div>
    </div>
</section>

<!-- Categories -->
<section class="container mx-auto px-4 py-12">
    <div class="bg-hot-pink inline-block px-8 py-4 rounded-2xl transform -rotate-2 mb-8 shadow-brutal-lg border-4 border-charcoal">
        <h2 class="font-thunderhouse text-5xl text-click-white">KATEGORI PRODUK</h2>
    </div>

    <div class="grid grid-cols-6 gap-6">
        @foreach($categories as $index => $category)
        @php
        $bgColors = ['bg-click-lime', 'bg-hot-pink', 'bg-purple-grape', 'bg-cobalt-blue', 'bg-redline', 'bg-click-lime'];
        @endphp
        <a href="#" class="group">
            <div class="{{ $bgColors[$index] }} p-8 rounded-2xl border-4 border-charcoal transform hover:scale-110 hover:rotate-3 transition shadow-brutal-lg">
                <div class="text-7xl mb-4 text-center transform group-hover:scale-125 transition">
                    {{ $category['icon'] }}
                </div>
                <p class="font-black text-center text-click-white text-lg leading-tight">
                    {{ $category['name'] }}
                </p>
            </div>
        </a>
        @endforeach
    </div>
</section>

<!-- Products Grid -->
<section class="container mx-auto px-4 py-12">
    <div class="bg-cobalt-blue inline-block px-8 py-4 rounded-2xl transform rotate-2 mb-8 shadow-brutal-lg border-4 border-charcoal">
        <h2 class="font-thunderhouse text-5xl text-click-white">PRODUK TERLARIS</h2>
    </div>

    <div class="grid grid-cols-4 gap-8">
        @foreach($products as $index => $product)
        <div class="group">
            <div class="bg-click-white rounded-2xl overflow-hidden border-8 border-charcoal shadow-brutal-lg hover:shadow-brutal-xl transform hover:-translate-y-2 transition">
                <!-- Product Image -->
                <div class="relative aspect-square bg-gradient-to-br from-hot-pink to-purple-grape overflow-hidden">
                    <div class="absolute top-4 left-1/2 transform -translate-x-1/2 z-10">
                        <div class="bg-charcoal px-6 py-2 rounded-lg border-4 border-click-lime transform -rotate-3">
                            <span class="font-thunderhouse text-xl text-click-white">TIRTA ANUGRAH</span>
                        </div>
                    </div>
                    <img src="/images/{{ $product['image'] }}" 
                         alt="{{ $product['name'] }}" 
                         class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                </div>

                <!-- Product Info -->
                <div class="p-6 bg-charcoal">
                    <h3 class="font-bold text-click-white text-lg mb-4 line-clamp-2 h-14">
                        {{ $product['name'] }}
                    </h3>
                    
                    <div class="flex items-center justify-between mb-4">
                        <div class="bg-click-lime px-4 py-2 rounded-lg transform -rotate-2">
                            <span class="font-thunderhouse text-2xl text-charcoal">
                                Rp {{ number_format($product['price'], 0, ',', '.') }}
                            </span>
                        </div>
                        <div class="text-click-white font-bold text-sm">
                            🔥 {{ $product['sold'] }} Terjual
                        </div>
                    </div>

                    <button class="w-full bg-hot-pink hover:bg-click-lime text-click-white hover:text-charcoal py-4 rounded-xl font-black text-lg transform hover:scale-105 transition shadow-brutal border-4 border-click-white">
                        BELI SEKARANG!
                    </button>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>

<!-- Promo Banner -->
<section class="container mx-auto px-4 py-12">
    <div class="bg-gradient-to-r from-click-lime via-hot-pink to-purple-grape p-12 rounded-3xl border-8 border-charcoal shadow-brutal-xl relative overflow-hidden">
        <div class="absolute inset-0 grunge-texture opacity-20"></div>
        <div class="relative z-10 text-center">
            <h2 class="font-thunderhouse text-7xl text-click-white mb-6 transform -skew-x-6">
                PROMO GILA-GILAAN!
            </h2>
            <p class="font-black text-3xl text-charcoal mb-8">
                DISKON HINGGA 50% UNTUK SEMUA PRODUK!
            </p>
            <button class="bg-charcoal text-click-lime px-12 py-6 rounded-2xl font-thunderhouse text-4xl transform hover:scale-110 hover:rotate-3 transition shadow-brutal-lg border-4 border-click-white">
                CEK PROMO
            </button>
        </div>
    </div>
</section>
@endsection