@extends('layouts.app')

@section('title', 'Home - Cipta Imaji')

@section('content')

@php
// Data Produk Terlaris (Top 4 aja)
$products = [
    [
        'name' => 'Korek Cricket Custom',
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
    ]
];

// Data Testimoni
$testimonials = [
    [
        'name' => 'Budi Santoso',
        'company' => 'PT. Maju Jaya',
        'rating' => 5,
        'text' => 'Kualitas cetak banner sangat memuaskan! Warna tajam dan bahan tahan lama. Pasti order lagi!'
    ],
    [
        'name' => 'Siti Nurhaliza',
        'company' => 'Toko Berkah',
        'rating' => 5,
        'text' => 'Pelayanan cepat dan hasil maksimal. Stiker vinyl-nya keren banget, tahan air pula!'
    ],
    [
        'name' => 'Andi Wijaya',
        'company' => 'Warung Nasi Padang',
        'rating' => 5,
        'text' => 'Harga terjangkau tapi kualitas premium. Spanduk untuk warung saya awet banget!'
    ]
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

<!-- Mengapa Memilih Cipta Imaji -->
<section class="container mx-auto px-4 py-16">
    <div class="mb-12 text-center">
        <h2 class="font-poppins font-black text-4xl md:text-5xl text-black-charcoal inline-block">
            MENGAPA MEMILIH CIPTA IMAJI?
        </h2>
        <div class="bg-cobalt-blue h-2 w-32 mt-2 rounded-full mx-auto"></div>
        <p class="font-poppins text-lg text-gray-600 mt-4">
            Partner terpercaya untuk semua kebutuhan printing Anda
        </p>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 max-w-6xl mx-auto">
        @php
        $advantages = [
            [
                'icon' => '⚡',
                'title' => 'Proses Cepat',
                'desc' => 'Pengerjaan cepat tanpa mengurangi kualitas. Urgent? Kami siap!',
                'color' => 'bg-click-lime'
            ],
            [
                'icon' => '💎',
                'title' => 'Kualitas Premium',
                'desc' => 'Menggunakan bahan & teknologi terbaik untuk hasil maksimal',
                'color' => 'bg-hot-pink'
            ],
            [
                'icon' => '💰',
                'title' => 'Harga Bersaing',
                'desc' => 'Harga terjangkau dengan kualitas yang tidak perlu diragukan',
                'color' => 'bg-purple-grape'
            ],
            [
                'icon' => '🎨',
                'title' => 'Desain Gratis',
                'desc' => 'Tim desainer profesional siap membantu mewujudkan ide Anda',
                'color' => 'bg-cobalt-blue'
            ]
        ];
        @endphp

        @foreach($advantages as $advantage)
        <div class="bg-click-white rounded-2xl p-8 border-4 border-black-charcoal shadow-brutal transform hover:scale-105 hover:-rotate-2 transition relative group">
            <div class="absolute inset-0 grunge-texture opacity-10 rounded-2xl"></div>
            
            <!-- Icon Badge -->
            <div class="inline-block {{ $advantage['color'] }} w-16 h-16 rounded-2xl border-4 border-black-charcoal flex items-center justify-center text-3xl mb-4 shadow-brutal transform -rotate-3 group-hover:rotate-0 transition">
                {{ $advantage['icon'] }}
            </div>

            <div class="relative">
                <h3 class="font-poppins font-black text-xl text-black-charcoal mb-3">
                    {{ $advantage['title'] }}
                </h3>
                <p class="font-poppins text-sm text-gray-600 leading-relaxed">
                    {{ $advantage['desc'] }}
                </p>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Stats Section -->
    <div class="grid md:grid-cols-3 gap-6 max-w-4xl mx-auto mt-12">
        @php
        $stats = [
            ['number' => '15+', 'label' => 'Tahun Pengalaman', 'icon' => '📅'],
            ['number' => '5000+', 'label' => 'Pelanggan Puas', 'icon' => '😊'],
            ['number' => '10.000+', 'label' => 'Produk Terjual', 'icon' => '📦']
        ];
        @endphp

        @foreach($stats as $stat)
        <div class="bg-black-charcoal rounded-2xl p-6 border-4 border-click-lime shadow-brutal text-center transform hover:scale-105 transition">
            <div class="text-4xl mb-2">{{ $stat['icon'] }}</div>
            <p class="font-poppins font-black text-4xl text-click-lime mb-2">
                {{ $stat['number'] }}
            </p>
            <p class="font-poppins font-bold text-click-white">
                {{ $stat['label'] }}
            </p>
        </div>
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

                        <button
    onclick="openModal(
        '{{ $product['name'] }}',
        {{ $product['price'] }},
        'Produk {{ $product['name'] }} kualitas premium dari Cipta Imaji'
    )"
    class="w-full bg-black-charcoal hover:bg-click-lime text-click-white hover:text-black-charcoal py-3 rounded-xl font-poppins font-black text-base transform hover:scale-105 transition shadow-brutal border-4 border-black-charcoal"
>
    BELI SEKARANG
</button>

                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Cara Pemesanan -->
<section class="container mx-auto px-4 py-16">
    <div class="mb-12 text-center">
        <h2 class="font-poppins font-black text-4xl md:text-5xl text-black-charcoal inline-block">
            CARA PEMESANAN
        </h2>
        <div class="bg-purple-grape h-2 w-32 mt-2 rounded-full mx-auto"></div>
        <p class="font-poppins text-lg text-gray-600 mt-4">
            Mudah banget! Cuma 4 langkah aja
        </p>
    </div>

    <div class="grid md:grid-cols-4 gap-6 max-w-6xl mx-auto">
        @php
        $steps = [
            ['num' => '1', 'icon' => '💬', 'title' => 'Konsultasi', 'desc' => 'Hubungi kami via WhatsApp atau telepon untuk konsultasi gratis', 'color' => 'bg-click-lime'],
            ['num' => '2', 'icon' => '📋', 'title' => 'Kirim Detail', 'desc' => 'Kirimkan desain & spesifikasi produk yang diinginkan', 'color' => 'bg-hot-pink'],
            ['num' => '3', 'icon' => '✅', 'title' => 'Konfirmasi', 'desc' => 'Kami konfirmasi harga, waktu produksi, dan pembayaran', 'color' => 'bg-purple-grape'],
            ['num' => '4', 'icon' => '🚚', 'title' => 'Terima Produk', 'desc' => 'Produk jadi dikirim atau bisa diambil langsung', 'color' => 'bg-cobalt-blue']
        ];
        @endphp

        @foreach($steps as $step)
        <div class="bg-click-white rounded-2xl p-6 border-4 border-black-charcoal shadow-brutal transform hover:scale-105 hover:-rotate-2 transition relative">
            <div class="absolute inset-0 grunge-texture opacity-10 rounded-2xl"></div>
            
            <!-- Number Badge -->
            <div class="absolute -top-4 -left-4 {{ $step['color'] }} w-12 h-12 rounded-full border-4 border-black-charcoal flex items-center justify-center shadow-brutal">
                <span class="font-poppins font-black text-2xl text-black-charcoal">{{ $step['num'] }}</span>
            </div>

            <div class="relative pt-4">
                <div class="text-5xl mb-4 text-center">{{ $step['icon'] }}</div>
                <h3 class="font-poppins font-black text-xl text-black-charcoal mb-2 text-center">
                    {{ $step['title'] }}
                </h3>
                <p class="font-poppins text-sm text-gray-600 text-center">
                    {{ $step['desc'] }}
                </p>
            </div>
        </div>
        @endforeach
    </div>

    <!-- CTA Button -->
    <div class="text-center mt-12">
        <button class="bg-black-charcoal hover:bg-click-lime text-click-white hover:text-black-charcoal px-12 py-5 rounded-2xl font-poppins font-black text-xl transform hover:scale-105 transition shadow-brutal-lg border-4 border-black-charcoal group inline-flex items-center gap-3">
            <span class="text-2xl">📱</span>
            PESAN SEKARANG VIA WHATSAPP
        </button>
    </div>
</section>

<!-- Kata Pelanggan -->
<section class="bg-gray-50 py-16">
    <div class="container mx-auto px-4">
        <div class="mb-12 text-center">
            <h2 class="font-poppins font-black text-4xl md:text-5xl text-black-charcoal inline-block">
                KATA PELANGGAN KAMI
            </h2>
            <div class="bg-hot-pink h-2 w-32 mt-2 rounded-full mx-auto"></div>
            <p class="font-poppins text-lg text-gray-600 mt-4">
                Apa kata mereka yang sudah order?
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-6 max-w-6xl mx-auto">
            @foreach($testimonials as $index => $testi)
            <div class="bg-click-white rounded-2xl p-6 border-4 border-black-charcoal shadow-brutal transform hover:scale-105 transition">
                <div class="absolute inset-0 grunge-texture opacity-10 rounded-2xl"></div>
                
                <!-- Rating Stars -->
                <div class="flex gap-1 mb-4">
                    @for($i = 0; $i < $testi['rating']; $i++)
                    <span class="text-2xl">⭐</span>
                    @endfor
                </div>

                <!-- Testimonial Text -->
                <p class="font-poppins text-gray-700 mb-6 italic">
                    "{{ $testi['text'] }}"
                </p>

                <!-- Customer Info -->
                <div class="border-t-2 border-gray-200 pt-4">
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 bg-click-lime rounded-full border-3 border-black-charcoal flex items-center justify-center text-2xl">
                            👤
                        </div>
                        <div>
                            <p class="font-poppins font-black text-black-charcoal">
                                {{ $testi['name'] }}
                            </p>
                            <p class="font-poppins text-sm text-gray-500">
                                {{ $testi['company'] }}
                            </p>
                        </div>
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

{{-- MODAL DETAIL PRODUK --}}
@include('components.produkdetail')

@endsection

