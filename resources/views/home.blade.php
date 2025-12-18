@extends('layouts.app')

@section('title', 'Home - Tirta Anugrah Grunge Pop')

@section('content')

@php
// Data Produk - Ganti 'image' sesuai nama file gambar lu
$products = [
    [
        'name' => 'Korek Cricket',
        'price' => 25000,
        'sold' => 150,
        'image' => 'korek.jpg'
    ],
    [
        'name' => 'Banner Outdoor Waterproof',
        'price' => 150000,
        'sold' => 89,
        'image' => 'banner-outdoor.jpg'
    ],
    [
        'name' => 'Plakat Akrilik Eksklusif',
        'price' => 200000,
        'sold' => 65,
        'image' => 'plakat-akrilik.jpg'
    ],
    [
        'name' => 'Kalender Custom 2024',
        'price' => 75000,
        'sold' => 120,
        'image' => 'kalender-custom.jpg'
    ],
    [
        'name' => 'Tumbler Custom Print',
        'price' => 85000,
        'sold' => 95,
        'image' => 'tumbler-custom.jpg'
    ],
    [
        'name' => 'ID Card & Lanyard Set',
        'price' => 45000,
        'sold' => 200,
        'image' => 'idcard-lanyard.jpg'
    ],
    [
        'name' => 'Cutting Sticker Motor',
        'price' => 50000,
        'sold' => 180,
        'image' => 'cutting-sticker.jpg'
    ],
    [
        'name' => 'Spanduk Banner Flexi',
        'price' => 120000,
        'sold' => 75,
        'image' => 'spanduk-flexi.jpg'
    ]
];

// Data Kategori
$categories = [
    ['name' => 'STIKER', 'icon' => '🏷️'],
    ['name' => 'PLAKAT', 'icon' => '🏆'],
    ['name' => 'BANNER', 'icon' => '📢'],
    ['name' => 'AKRILIK', 'icon' => '💎'],
    ['name' => 'KALENDER', 'icon' => '📅'],
    ['name' => 'TUMBLER', 'icon' => '🥤']
];
@endphp

<!-- Hero Section -->
<section class="container mx-auto px-4 py-12">
    <div class="bg-click-white rounded-3xl overflow-hidden border-8 border-black-charcoal shadow-brutal-xl">
        <div class="grid md:grid-cols-2 gap-0">
            <!-- Left Content - Putih bersih -->
            <div class="flex flex-col justify-center p-8 md:p-16 bg-click-white relative">
                <div class="absolute inset-0 grunge-texture opacity-5"></div>
                
                <!-- Badge -->
                <div class="inline-block w-fit mb-6 relative z-10">
                    <div class="bg-black-charcoal px-6 py-2 rounded-xl transform -rotate-2 shadow-brutal border-4 border-click-lime">
                        <p class="font-poppins font-black text-click-lime text-xs tracking-wider">⚡ SEJAK 2010</p>
                    </div>
                </div>

                <div class="space-y-3 relative z-10">
                    <h1 class="font-poppins font-black text-5xl md:text-6xl text-black-charcoal leading-tight">
                        SOLUSI PRINTING
                    </h1>
                    <h2 class="font-poppins font-black text-6xl md:text-7xl leading-tight">
                        <span class="text-black-charcoal">UNTUK</span>
                        <span class="block text-click-lime drop-shadow-[4px_4px_0_rgba(23,23,24,1)]">SEMUA</span>
                    </h2>
                    <p class="font-poppins font-bold text-xl text-gray-600 pt-2">
                        Dari stiker sampai banner, kami sediain semuanya!
                    </p>
                </div>

                <!-- CTA Buttons -->
                <div class="flex gap-4 mt-8 relative z-10">
                    <button class="bg-black-charcoal hover:bg-click-lime text-click-white hover:text-black-charcoal px-8 py-4 rounded-xl font-poppins font-black text-lg transform hover:scale-105 transition shadow-brutal border-4 border-black-charcoal group">
                        <span class="inline-block group-hover:animate-bounce mr-2">💬</span>
                        KONSULTASI GRATIS
                    </button>
                    <button class="bg-click-white hover:bg-black-charcoal text-black-charcoal hover:text-click-white px-8 py-4 rounded-xl font-poppins font-black text-lg transform hover:scale-105 transition shadow-brutal border-4 border-black-charcoal">
                        LIHAT KATALOG
                    </button>
                </div>
            </div>

            <!-- Right Content - Hitam dengan accent -->
            <div class="bg-black-charcoal p-8 md:p-16 flex flex-col justify-center relative">
                <div class="absolute inset-0 grunge-texture opacity-20"></div>
                
                <!-- Accent shape -->
                <div class="absolute top-10 right-10 w-32 h-32 bg-click-lime opacity-20 rounded-full blur-2xl"></div>
                
                <div class="space-y-4 relative z-10">
                    <!-- Jam Operasional -->
                    <div class="bg-click-lime p-6 rounded-2xl transform -rotate-1 shadow-brutal-lg border-4 border-black-charcoal/50">
                        <p class="font-poppins font-black text-sm text-black-charcoal/70 mb-1">JAM OPERASIONAL</p>
                        <p class="font-poppins font-black text-3xl text-black-charcoal">08.30 - 17.30</p>
                        <p class="font-poppins font-bold text-base text-black-charcoal/70">SENIN - SABTU</p>
                    </div>

                    <!-- Services List -->
                    <div class="space-y-3 pt-4">
                        @php
                        $services = [
                            ['name' => 'Digital Printing', 'icon' => '🖨️'],
                            ['name' => 'Offset Print', 'icon' => '📄'],
                            ['name' => 'Cutting Laser', 'icon' => '⚡'],
                            ['name' => 'Banner & Spanduk', 'icon' => '📢'],
                        ];
                        @endphp
                        
                        @foreach($services as $service)
                        <div class="flex items-center gap-3 text-click-white">
                            <span class="text-2xl">{{ $service['icon'] }}</span>
                            <span class="font-poppins font-bold text-lg">{{ $service['name'] }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Categories -->
<section class="container mx-auto px-4 py-16">
    <div class="mb-12">
        <h2 class="font-poppins font-black text-4xl md:text-5xl text-black-charcoal inline-block">
            KATEGORI PRODUK
        </h2>
        <div class="bg-click-lime h-2 w-32 mt-2 rounded-full"></div>
    </div>

    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4">
        @foreach($categories as $index => $category)
        @php
        $bgColors = ['bg-click-white', 'bg-click-white', 'bg-click-white', 'bg-click-white', 'bg-click-white', 'bg-click-white'];
        $accentColors = ['border-click-lime', 'border-hot-pink', 'border-purple-grape', 'border-cobalt-blue', 'border-redline', 'border-click-lime'];
        @endphp
        <a href="#" class="group">
            <div class="{{ $bgColors[$index] }} p-6 rounded-2xl border-4 {{ $accentColors[$index] }} transform hover:scale-105 hover:-rotate-2 transition shadow-brutal-lg relative overflow-hidden">
                <div class="absolute inset-0 grunge-texture opacity-10"></div>
                <div class="relative text-center">
                    <div class="text-6xl mb-3 transform group-hover:scale-125 transition">
                        {{ $category['icon'] }}
                    </div>
                    <p class="font-poppins font-black text-black-charcoal text-base">
                        {{ $category['name'] }}
                    </p>
                </div>
            </div>
        </a>
        @endforeach
    </div>
</section>

<!-- Products Grid -->
<section class="bg-gray-50 py-16">
    <div class="container mx-auto px-4">
        <div class="mb-12">
            <h2 class="font-poppins font-black text-4xl md:text-5xl text-black-charcoal inline-block">
                PRODUK TERLARIS
            </h2>
            <div class="bg-hot-pink h-2 w-32 mt-2 rounded-full"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($products as $index => $product)
            <div class="group">
                <div class="bg-click-white rounded-2xl overflow-hidden border-4 border-black-charcoal shadow-brutal hover:shadow-brutal-lg transform hover:-translate-y-2 transition">
                    <!-- Product Image -->
                    <div class="relative aspect-square bg-gray-100 overflow-hidden">
                        @if(file_exists(public_path('images/' . $product['image'])))
                            <img src="{{ asset('images/' . $product['image']) }}" 
                                 alt="{{ $product['name'] }}" 
                                 class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                        @else
                            <!-- Placeholder -->
                            <div class="w-full h-full flex items-center justify-center bg-gray-100">
                                <div class="text-center p-4">
                                    <div class="text-7xl mb-3 opacity-30">📦</div>
                                    <p class="font-poppins font-bold text-sm text-gray-400">
                                        No Image
                                    </p>
                                </div>
                            </div>
                        @endif
                        
                        <!-- Badge Sold -->
                        <div class="absolute top-3 right-3 bg-black-charcoal px-3 py-1 rounded-lg border-2 border-click-lime">
                            <span class="font-poppins font-bold text-click-lime text-xs">
                                🔥 {{ $product['sold'] }} terjual
                            </span>
                        </div>
                    </div>

                    <!-- Product Info -->
                    <div class="p-5">
                        <h3 class="font-poppins font-bold text-black-charcoal text-lg mb-3 line-clamp-2 h-14">
                            {{ $product['name'] }}
                        </h3>
                        
                        <div class="mb-4">
                            <span class="font-poppins font-black text-2xl text-black-charcoal">
                                Rp {{ number_format($product['price'], 0, ',', '.') }}
                            </span>
                        </div>

                        <button class="w-full bg-black-charcoal hover:bg-click-lime text-click-white hover:text-black-charcoal py-3 rounded-xl font-poppins font-black text-base transform hover:scale-105 transition shadow-brutal border-4 border-black-charcoal">
                            BELI SEKARANG
                        </button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Promo Banner -->
<section class="container mx-auto px-4 py-16">
    <div class="bg-black-charcoal p-12 md:p-16 rounded-3xl border-8 border-click-lime shadow-brutal-xl relative overflow-hidden">
        <div class="absolute inset-0 grunge-texture opacity-20"></div>
        
        <!-- Simple accent circles -->
        <div class="absolute top-0 right-0 w-64 h-64 bg-click-lime opacity-10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-0 w-64 h-64 bg-hot-pink opacity-10 rounded-full blur-3xl"></div>
        
        <div class="relative z-10 text-center space-y-6 max-w-3xl mx-auto">
            <div class="inline-block bg-click-lime px-6 py-2 rounded-xl border-4 border-black-charcoal/30 transform -rotate-2">
                <p class="font-poppins font-black text-black-charcoal text-sm tracking-wider">⚡ PROMO SPESIAL</p>
            </div>

            <h2 class="font-poppins font-black text-5xl md:text-6xl text-click-white leading-tight">
                DISKON HINGGA
                <span class="block text-click-lime text-6xl md:text-7xl">50%</span>
            </h2>
            
            <p class="font-poppins font-semibold text-xl text-gray-300">
                Untuk semua kategori produk! Buruan sebelum kehabisan stok!
            </p>

            <div class="pt-4">
                <button class="bg-click-lime hover:bg-click-white text-black-charcoal px-12 py-5 rounded-2xl font-poppins font-black text-2xl transform hover:scale-105 hover:rotate-2 transition shadow-brutal-lg border-4 border-black-charcoal group inline-flex items-center gap-3">
                    <span class="inline-block group-hover:animate-bounce">🎉</span>
                    CEK PROMO SEKARANG
                </button>
            </div>
        </div>
    </div>
</section>
@endsection