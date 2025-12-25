@extends('layouts.app')

@section('title', 'Produk - Cipta Imaji')

@section('content')

@php
// Data Produk berdasarkan Kategori
$products = [
    'instan' => [
        [
            'name' => 'Korek Cricket Custom',
            'price' => 25000,
            'sold' => 150,
            'image' => 'korek.jpg',
            'desc' => 'Korek api custom dengan logo perusahaan. Minimal order 100pcs.',
            'stock' => 'Ready Stock'
        ],
        [
            'name' => 'Stiker Vinyl A4',
            'price' => 15000,
            'sold' => 200,
            'image' => 'stiker-vinyl.jpg',
            'desc' => 'Stiker vinyl glossy ukuran A4. Tahan air dan UV.',
            'stock' => 'Ready Stock'
        ],
        [
            'name' => 'ID Card Standar',
            'price' => 5000,
            'sold' => 500,
            'image' => 'idcard.jpg',
            'desc' => 'ID Card ukuran standar dengan cetak full color.',
            'stock' => 'Ready Stock'
        ],
        [
            'name' => 'Pin Button 58mm',
            'price' => 3000,
            'sold' => 300,
            'image' => 'pin-button.jpg',
            'desc' => 'Pin button diameter 58mm dengan desain custom.',
            'stock' => 'Ready Stock'
        ],
    ],
    'non-instan' => [
        [
            'name' => 'Banner Outdoor 3x1m',
            'price' => 150000,
            'sold' => 89,
            'image' => 'banner-outdoor.jpg',
            'desc' => 'Banner outdoor flexi dengan grommets. Tahan cuaca ekstrem.',
            'stock' => '3-5 Hari'
        ],
        [
            'name' => 'Plakat Akrilik Trophy',
            'price' => 200000,
            'sold' => 65,
            'image' => 'plakat-akrilik.jpg',
            'desc' => 'Plakat akrilik premium dengan base kayu. Cocok untuk award.',
            'stock' => '5-7 Hari'
        ],
        [
            'name' => 'Kalender Meja 2025',
            'price' => 75000,
            'sold' => 120,
            'image' => 'kalender-custom.jpg',
            'desc' => 'Kalender meja custom dengan desain perusahaan Anda.',
            'stock' => '7-10 Hari'
        ],
        [
            'name' => 'Buku Nota Custom',
            'price' => 50000,
            'sold' => 180,
            'image' => 'buku-nota.jpg',
            'desc' => 'Buku nota 2 ply dengan logo perusahaan. Minimal 5 buku.',
            'stock' => '5-7 Hari'
        ],
    ],
    'custom' => [
        [
            'name' => 'Tumbler Custom Print',
            'price' => 85000,
            'sold' => 95,
            'image' => 'tumbler-custom.jpg',
            'desc' => 'Tumbler stainless steel dengan print full color custom.',
            'stock' => '7-14 Hari'
        ],
        [
            'name' => 'Jersey Custom Sublim',
            'price' => 120000,
            'sold' => 75,
            'image' => 'jersey-custom.jpg',
            'desc' => 'Jersey olahraga dengan printing sublimasi. Desain bebas.',
            'stock' => '10-14 Hari'
        ],
        [
            'name' => 'Mug Custom Foto',
            'price' => 35000,
            'sold' => 250,
            'image' => 'mug-custom.jpg',
            'desc' => 'Mug keramik dengan foto dan desain custom Anda.',
            'stock' => '5-7 Hari'
        ],
        [
            'name' => 'Tote Bag Custom',
            'price' => 45000,
            'sold' => 150,
            'image' => 'tote-bag.jpg',
            'desc' => 'Tote bag canvas dengan sablon atau print DTF custom.',
            'stock' => '7-10 Hari'
        ],
    ]
];
@endphp

<!-- Hero Banner -->
<section class="bg-black-charcoal py-12 relative overflow-hidden">
    <div class="absolute inset-0 grunge-texture opacity-20"></div>
    <div class="absolute top-0 right-0 w-96 h-96 bg-click-lime opacity-10 rounded-full blur-3xl"></div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-3xl">
            <div class="inline-block bg-click-lime px-4 py-2 rounded-lg border-3 border-black-charcoal/30 mb-4">
                <p class="font-poppins font-black text-black-charcoal text-xs">🛍️ KATALOG PRODUK</p>
            </div>
            <h1 class="font-poppins font-black text-5xl md:text-6xl text-click-white mb-4">
                TEMUKAN PRODUK
                <span class="block text-click-lime">YANG KAMU CARI</span>
            </h1>
            <p class="font-poppins text-lg text-gray-300">
                Pilih dari ratusan produk berkualitas dengan harga terbaik
            </p>
        </div>
    </div>
</section>

<!-- Search & Filter -->
<section class="container mx-auto px-4 py-8">
    <div class="bg-click-white rounded-2xl p-6 border-4 border-black-charcoal shadow-brutal">
        <div class="flex flex-col md:flex-row gap-4">
            <!-- Search -->
            <div class="flex-1">
                <input 
                    type="text" 
                    placeholder="Cari produk..." 
                    class="w-full px-4 py-3 bg-gray-50 border-3 border-gray-200 rounded-xl font-poppins font-semibold focus:outline-none focus:border-click-lime transition"
                    id="searchInput"
                >
            </div>
            <!-- Sort -->
            <select class="px-6 py-3 bg-gray-50 border-3 border-gray-200 rounded-xl font-poppins font-semibold focus:outline-none focus:border-click-lime transition">
                <option>Terpopuler</option>
                <option>Harga Terendah</option>
                <option>Harga Tertinggi</option>
                <option>Terbaru</option>
            </select>
        </div>
    </div>
</section>

<!-- Tabs Kategori -->
<section class="container mx-auto px-4 py-8">
    <div class="flex justify-center gap-3 flex-wrap mb-8">
        <button 
            class="tab-btn active px-8 py-3 rounded-xl font-poppins font-black text-base border-4 border-black-charcoal shadow-brutal transition"
            data-tab="instan"
        >
            ⚡ PRODUK INSTAN
        </button>
        <button 
            class="tab-btn px-8 py-3 rounded-xl font-poppins font-black text-base border-4 border-black-charcoal shadow-brutal transition"
            data-tab="non-instan"
        >
            📦 PRODUK NON-INSTAN
        </button>
        <button 
            class="tab-btn px-8 py-3 rounded-xl font-poppins font-black text-base border-4 border-black-charcoal shadow-brutal transition"
            data-tab="custom"
        >
            🎨 PRODUK CUSTOM
        </button>
    </div>

    <!-- Product Grids -->
    @foreach(['instan', 'non-instan', 'custom'] as $category)
    <div class="tab-content {{ $category === 'instan' ? '' : 'hidden' }}" data-category="{{ $category }}">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($products[$category] as $product)
            <div class="product-card group">
                <div class="bg-click-white rounded-2xl overflow-hidden border-4 border-black-charcoal shadow-brutal hover:shadow-brutal-lg transform hover:-translate-y-2 transition">
                    <!-- Product Image -->
                    <div class="relative aspect-square bg-gray-100 overflow-hidden">
                        @if(file_exists(public_path('images/' . $product['image'])))
                            <img src="{{ asset('images/' . $product['image']) }}" 
                                 alt="{{ $product['name'] }}" 
                                 class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                        @else
                            <div class="w-full h-full flex items-center justify-center bg-gray-100">
                                <div class="text-center p-4">
                                    <div class="text-7xl mb-3 opacity-30">📦</div>
                                    <p class="font-poppins font-bold text-sm text-gray-400">No Image</p>
                                </div>
                            </div>
                        @endif
                        
                        <!-- Stock Badge -->
                        <div class="absolute top-3 left-3 bg-click-lime px-3 py-1 rounded-lg border-2 border-black-charcoal">
                            <span class="font-poppins font-bold text-black-charcoal text-xs">
                                {{ $product['stock'] }}
                            </span>
                        </div>

                        <!-- Sold Badge -->
                        <div class="absolute top-3 right-3 bg-black-charcoal px-3 py-1 rounded-lg border-2 border-click-lime">
                            <span class="font-poppins font-bold text-click-lime text-xs">
                                🔥 {{ $product['sold'] }}
                            </span>
                        </div>
                    </div>

                    <!-- Product Info -->
                    <div class="p-5">
                        <h3 class="font-poppins font-bold text-black-charcoal text-lg mb-2 line-clamp-1">
                            {{ $product['name'] }}
                        </h3>
                        
                        <p class="font-poppins text-sm text-gray-600 mb-4 line-clamp-2 h-10">
                            {{ $product['desc'] }}
                        </p>
                        
                        <div class="mb-4">
                            <span class="font-poppins font-black text-2xl text-black-charcoal">
                                Rp {{ number_format($product['price'], 0, ',', '.') }}
                            </span>
                        </div>

                       <button 
    onclick="openModal('{{ $product['name'] }}', {{ $product['price'] }}, '{{ $product['desc'] }}')"
    class="w-full bg-black-charcoal hover:bg-click-lime text-click-white hover:text-black-charcoal py-3 rounded-xl font-poppins font-black text-base transform hover:scale-105 transition shadow-brutal border-4 border-black-charcoal flex items-center justify-center gap-2"
>
    <span class="text-xl">📱</span>
    PESAN SEKARANG
</button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @endforeach
</section>

<!-- CTA Banner -->
<section class="container mx-auto px-4 py-16">
    <div class="bg-black-charcoal p-12 rounded-3xl border-8 border-click-lime shadow-brutal-xl relative overflow-hidden">
        <div class="absolute inset-0 grunge-texture opacity-20"></div>
        <div class="absolute top-0 right-0 w-64 h-64 bg-click-lime opacity-10 rounded-full blur-3xl"></div>
        
        <div class="relative z-10 text-center max-w-2xl mx-auto">
            <h2 class="font-poppins font-black text-4xl md:text-5xl text-click-white mb-4">
                TIDAK MENEMUKAN PRODUK?
            </h2>
            <p class="font-poppins text-lg text-gray-300 mb-8">
                Hubungi kami untuk produk custom atau konsultasi gratis!
            </p>
            <button 
                onclick="konsultasiWhatsApp()"
                class="bg-click-lime hover:bg-click-white text-black-charcoal px-12 py-5 rounded-2xl font-poppins font-black text-xl transform hover:scale-105 transition shadow-brutal-lg border-4 border-black-charcoal inline-flex items-center gap-3"
            >
                <span class="text-2xl">💬</span>
                KONSULTASI GRATIS
            </button>
        </div>
    </div>
</section>

<script>
// Tab Switching
document.querySelectorAll('.tab-btn').forEach(btn => {
    btn.addEventListener('click', function() {
        const tab = this.getAttribute('data-tab');
        
        // Update button states
        document.querySelectorAll('.tab-btn').forEach(b => {
            b.classList.remove('active', 'bg-click-lime', 'text-black-charcoal');
            b.classList.add('bg-click-white', 'text-black-charcoal');
        });
        this.classList.add('active', 'bg-click-lime', 'text-black-charcoal');
        this.classList.remove('bg-click-white');
        
        // Update content
        document.querySelectorAll('.tab-content').forEach(content => {
            content.classList.add('hidden');
        });
        document.querySelector(`[data-category="${tab}"]`).classList.remove('hidden');
    });
});

// Search Filter
document.getElementById('searchInput').addEventListener('input', function(e) {
    const searchTerm = e.target.value.toLowerCase();
    document.querySelectorAll('.product-card').forEach(card => {
        const productName = card.querySelector('h3').textContent.toLowerCase();
        if (productName.includes(searchTerm)) {
            card.style.display = 'block';
        } else {
            card.style.display = 'none';
        }
    });
});

// WhatsApp Functions
function pesanWhatsApp(productName, price) {
    const phoneNumber = '6285314150100'; // Ganti dengan nomor WhatsApp lu
    const message = `Halo, saya ingin memesan produk:\n\n*${productName}*\nHarga: Rp ${price}\n\nMohon info lebih lanjut. Terima kasih!`;
    const whatsappUrl = `https://wa.me/${phoneNumber}?text=${encodeURIComponent(message)}`;
    window.open(whatsappUrl, '_blank');
}

function konsultasiWhatsApp() {
    const phoneNumber = '6285314150100'; // Ganti dengan nomor WhatsApp lu
    const message = `Halo, saya ingin konsultasi mengenai produk custom atau produk yang tidak ada di katalog. Terima kasih!`;
    const whatsappUrl = `https://wa.me/${phoneNumber}?text=${encodeURIComponent(message)}`;
    window.open(whatsappUrl, '_blank');
}

// Initial state
document.querySelector('.tab-btn.active').classList.add('bg-click-lime', 'text-black-charcoal');
</script>

<style>
.tab-btn {
    background-color: white;
    color: #171718;
}

.tab-btn.active {
    background-color: #d2f801;
    color: #171718;
}

.tab-btn:hover {
    transform: scale(1.05);
}
</style>

{{-- Include Modal Component --}}
@include('components.produkdetail')

@endsection