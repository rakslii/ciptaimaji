@extends('layouts.app')

@section('title', 'Home - Cipta Imaji')

@section('content')

@php
$products = [
    [
        'name' => 'Korek Cricket Custom',
        'price' => 25000,
        'sold' => 150,
        'image' => 'korek.jpg',
        'description' => 'Korek api custom dengan desain sesuka hati! Cocok untuk souvenir, merchandise, atau hadiah spesial. Kualitas premium dengan cetak full color yang tajam dan tahan lama.',
        'specs' => [
            'Material: Plastik premium grade A',
            'Ukuran: Standard cricket (8cm x 2.5cm)',
            'Cetak: Full color digital printing',
            'Minimum Order: 50 pcs',
            'Waktu Produksi: 3-5 hari kerja'
        ],
        'features' => ['Desain Custom', 'Anti Air', 'Tahan Lama', 'Full Color']
    ],
    [
        'name' => 'Banner Outdoor Waterproof',
        'price' => 150000,
        'sold' => 89,
        'image' => 'banner-outdoor.jpg',
        'description' => 'Banner outdoor berkualitas tinggi dengan material waterproof. Sempurna untuk promosi outdoor, event, grand opening, dan kebutuhan advertising lainnya. Anti luntur dan tahan cuaca ekstrem!',
        'specs' => [
            'Material: Flexi China 280gsm',
            'Ukuran: Custom (mulai 1x1 meter)',
            'Cetak: Digital Eco-Solvent',
            'Finishing: Jahit tepi + ring',
            'Waktu Produksi: 1-2 hari kerja'
        ],
        'features' => ['Waterproof', 'Anti UV', 'Warna Tajam', 'Include Ring']
    ],
    [
        'name' => 'Plakat Akrilik Eksklusif',
        'price' => 200000,
        'sold' => 65,
        'image' => 'plakat-akrilik.jpg',
        'description' => 'Plakat akrilik premium dengan desain elegan dan modern. Cocok untuk penghargaan, award, apresiasi karyawan, atau kenang-kenangan event. Bahan berkualitas tinggi dengan finishing mengkilap!',
        'specs' => [
            'Material: Akrilik bening 5mm',
            'Ukuran: 20x30 cm (custom available)',
            'Cetak: UV Printing full color',
            'Bonus: Stand akrilik',
            'Waktu Produksi: 3-4 hari kerja'
        ],
        'features' => ['Premium Quality', 'UV Print', 'Include Stand', 'Custom Design']
    ],
    [
        'name' => 'Kalender Custom 2024',
        'price' => 75000,
        'sold' => 120,
        'image' => 'kalender-custom.jpg',
        'description' => 'Kalender custom dengan desain sesuai keinginan Anda. Tersedia berbagai model: kalender meja, kalender dinding, kalender duduk. Perfect untuk corporate gift atau merchandise perusahaan!',
        'specs' => [
            'Material: Art Paper 260gsm',
            'Ukuran: A4 / A5 / Custom',
            'Cetak: Offset full color',
            'Jilid: Wire-O / Spiral',
            'Minimum Order: 100 pcs'
        ],
        'features' => ['Custom Design', 'Premium Paper', 'Full Color', 'Various Sizes']
    ]
];

$testimonials = [
    ['name' => 'Budi Santoso', 'company' => 'PT. Maju Jaya', 'rating' => 5, 'text' => 'Kualitas cetak banner sangat memuaskan! Warna tajam dan bahan tahan lama. Pasti order lagi!'],
    ['name' => 'Siti Nurhaliza', 'company' => 'Toko Berkah', 'rating' => 5, 'text' => 'Pelayanan cepat dan hasil maksimal. Stiker vinyl-nya keren banget, tahan air pula!'],
    ['name' => 'Andi Wijaya', 'company' => 'Warung Nasi Padang', 'rating' => 5, 'text' => 'Harga terjangkau tapi kualitas premium. Spanduk untuk warung saya awet banget!']
];
@endphp

<!-- Hero Section -->
<section class="container mx-auto px-4 py-12 relative">
    <div class="absolute -top-20 -left-20 w-40 h-40 bg-hot-pink opacity-20 rounded-full blur-3xl animate-float"></div>
    <div class="absolute -top-10 right-20 w-60 h-60 bg-click-lime opacity-10 rounded-full blur-3xl animate-float" style="animation-delay: 1s;"></div>
    
    <div class="bg-gradient-to-br from-click-white to-gray-50 rounded-3xl overflow-hidden border-8 border-black-charcoal shadow-brutal-xl relative">
        <div class="grid md:grid-cols-2 gap-0">
            <div class="flex flex-col justify-center p-8 md:p-16 bg-click-white relative overflow-hidden">
                <div class="absolute inset-0 grunge-texture opacity-5"></div>
                <div class="absolute -right-20 -bottom-20 w-80 h-80 bg-click-lime opacity-5 rounded-full blur-3xl animate-pulse-glow"></div>
                
                <div class="inline-block w-fit mb-6 relative z-10 animate-slide-in">
                    <div class="bg-black-charcoal px-6 py-2 rounded-xl transform -rotate-2 shadow-neon border-4 border-click-lime hover:rotate-0 transition-transform cursor-pointer">
                        <p class="font-poppins font-black text-click-lime text-xs tracking-widest">⚡ TRUSTED SINCE 2010</p>
                    </div>
                </div>

                <div class="space-y-4 relative z-10">
                    <h1 class="font-poppins font-black text-5xl md:text-7xl text-black-charcoal leading-none">
                        PRINTING
                    </h1>
                    <h2 class="font-poppins font-black text-6xl md:text-8xl leading-none">
                        <span class="text-gradient-y2k drop-shadow-[5px_5px_0_rgba(23,23,24,0.3)]">POWERHOUSE</span>
                    </h2>
                    <div class="flex items-center gap-3 pt-4">
                        <div class="h-1 w-20 bg-black-charcoal"></div>
                        <p class="font-poppins font-bold text-xl text-gray-700">
                            Dari Stiker Sampai Spanduk Raksasa!
                        </p>
                    </div>
                </div>

                <div class="flex flex-col sm:flex-row gap-4 mt-10 relative z-10">
                    <button class="bg-black-charcoal hover:bg-click-lime text-click-white hover:text-black-charcoal px-8 py-5 rounded-2xl font-poppins font-black text-lg transform hover:scale-105 hover:-rotate-1 transition shadow-brutal-lg border-4 border-black-charcoal group">
                        <span class="inline-block group-hover:animate-bounce mr-2">💬</span>
                        KONSULTASI GRATIS
                    </button>
                    <button class="bg-click-white hover:bg-hot-pink text-black-charcoal hover:text-click-white px-8 py-5 rounded-2xl font-poppins font-black text-lg transform hover:scale-105 hover:rotate-1 transition shadow-brutal-lg border-4 border-black-charcoal">
                        📱 HUBUNGI KAMI
                    </button>
                </div>

                <div class="flex gap-6 mt-10 relative z-10">
                    <div class="flex items-center gap-2">
                        <span class="text-2xl">✓</span>
                        <span class="font-poppins font-bold text-sm text-gray-600">Fast Delivery</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="text-2xl">✓</span>
                        <span class="font-poppins font-bold text-sm text-gray-600">Premium Quality</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="text-2xl">✓</span>
                        <span class="font-poppins font-bold text-sm text-gray-600">Best Price</span>
                    </div>
                </div>
            </div>

            <div class="bg-black-charcoal p-8 md:p-16 flex flex-col justify-center relative overflow-hidden">
                <div class="absolute inset-0 grunge-texture opacity-20"></div>
                <div class="absolute top-10 right-10 w-40 h-40 bg-click-lime opacity-20 rounded-full blur-3xl animate-pulse-glow"></div>
                <div class="absolute bottom-10 left-10 w-32 h-32 bg-hot-pink opacity-20 rounded-full blur-2xl animate-pulse-glow" style="animation-delay: 1s;"></div>
                
                <div class="space-y-6 relative z-10">
                    <div class="bg-gradient-to-br from-click-lime to-yellow-300 p-8 rounded-3xl transform -rotate-2 shadow-brutal-lg border-4 border-black-charcoal/50 hover:rotate-0 transition-transform cursor-pointer">
                        <p class="font-poppins font-black text-xs text-black-charcoal/70 mb-2 tracking-widest">🕐 JAM OPERASIONAL</p>
                        <p class="font-poppins font-black text-5xl text-black-charcoal mb-1">08:30 - 17:30</p>
                        <p class="font-poppins font-bold text-lg text-black-charcoal/70">SENIN - SABTU</p>
                        <div class="mt-4 pt-4 border-t-2 border-black-charcoal/20">
                            <p class="font-poppins font-bold text-sm text-black-charcoal/70">Siap Melayani Anda! 🚀</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        @php
                        $services = [
                            ['name' => 'Digital Print', 'icon' => '🖨️'],
                            ['name' => 'Offset Print', 'icon' => '📄'],
                            ['name' => 'Laser Cut', 'icon' => '⚡'],
                            ['name' => 'Banner XL', 'icon' => '📢'],
                        ];
                        @endphp
                        
                        @foreach($services as $service)
                        <div class="bg-click-white/10 backdrop-blur-sm p-4 rounded-xl border-2 border-click-white/20 hover:border-click-lime hover:bg-click-white/20 transition group">
                            <span class="text-3xl block mb-2 group-hover:scale-125 transition-transform">{{ $service['icon'] }}</span>
                            <span class="font-poppins font-bold text-sm text-click-white block">{{ $service['name'] }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Products Grid with Modal -->
<section class="bg-gradient-to-b from-gray-50 to-gray-100 py-20 relative overflow-hidden">
    <div class="absolute top-20 left-10 w-80 h-80 bg-hot-pink opacity-5 rounded-full blur-3xl"></div>
    <div class="absolute bottom-20 right-10 w-80 h-80 bg-click-lime opacity-5 rounded-full blur-3xl"></div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="mb-16 text-center">
            <h2 class="font-poppins font-black text-5xl md:text-7xl text-black-charcoal inline-block relative">
                <span class="relative z-10">PRODUK FAVORIT</span>
                <div class="absolute -bottom-3 left-0 w-full h-3 bg-hot-pink opacity-30 blur-sm"></div>
            </h2>
            <p class="font-poppins text-xl text-gray-600 mt-6">
                Produk pilihan yang paling banyak dipesan
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            @foreach($products as $index => $product)
            <div class="group">
                <div class="bg-click-white rounded-3xl overflow-hidden border-4 border-black-charcoal shadow-brutal-lg hover:shadow-brutal-xl transform hover:-translate-y-4 hover:rotate-1 transition-all">
                    <div class="relative aspect-square bg-gradient-to-br from-gray-50 to-gray-100 overflow-hidden">
                        @if(file_exists(public_path('images/' . $product['image'])))
                            <img src="{{ asset('images/' . $product['image']) }}" 
                                 alt="{{ $product['name'] }}" 
                                 class="w-full h-full object-cover group-hover:scale-125 group-hover:rotate-3 transition-all duration-700">
                        @else
                            <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-gray-100 to-gray-200">
                                <div class="text-center p-6">
                                    <div class="text-8xl mb-4 opacity-20 group-hover:scale-125 transition-transform">📦</div>
                                    <p class="font-poppins font-bold text-sm text-gray-400">{{ $product['name'] }}</p>
                                </div>
                            </div>
                        @endif
                        
                        <div class="absolute top-4 right-4 bg-black-charcoal px-4 py-2 rounded-xl border-3 border-click-lime shadow-brutal transform rotate-3 group-hover:rotate-0 transition-transform">
                            <span class="font-poppins font-black text-click-lime text-sm">🔥 {{ $product['sold'] }}</span>
                        </div>
                    </div>

                    <div class="p-6">
                        <h3 class="font-poppins font-black text-black-charcoal text-xl mb-4 line-clamp-2 h-14 group-hover:text-hot-pink transition-colors">
                            {{ $product['name'] }}
                        </h3>
                        
                        <div class="mb-5">
                            <span class="font-poppins font-black text-3xl text-black-charcoal">
                                Rp {{ number_format($product['price'], 0, ',', '.') }}
                            </span>
                        </div>

                        <button onclick="openProductModal({{ $index }})" 
                            class="w-full bg-black-charcoal hover:bg-gradient-to-r hover:from-hot-pink hover:to-purple-grape text-click-lime hover:text-click-white py-4 rounded-2xl font-poppins font-black text-lg transform hover:scale-105 transition-all shadow-brutal border-4 border-black-charcoal group-hover:border-click-lime">
                            BELI SEKARANG →
                        </button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Product Modal -->
<div id="productModal" class="hidden fixed inset-0 bg-black/80 backdrop-blur-sm z-50 flex items-center justify-center p-4" onclick="closeProductModal(event)">
    <div class="bg-click-white rounded-3xl border-8 border-black-charcoal shadow-brutal-xl max-w-4xl w-full max-h-[90vh] overflow-y-auto relative" onclick="event.stopPropagation()">
        <!-- Close Button -->
        <button onclick="closeProductModal()" class="absolute top-6 right-6 bg-black-charcoal hover:bg-redline text-click-lime hover:text-click-white w-14 h-14 rounded-2xl border-4 border-click-lime hover:border-click-white flex items-center justify-center text-3xl font-bold transform hover:rotate-90 transition-all shadow-brutal z-10">
            ×
        </button>

        <div class="p-8 md:p-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Product Image -->
                <div class="relative">
                    <div id="modalImage" class="aspect-square bg-gradient-to-br from-gray-100 to-gray-200 rounded-3xl border-4 border-black-charcoal overflow-hidden shadow-brutal">
                        <!-- Image will be inserted by JavaScript -->
                    </div>
                    
                    <!-- Badge -->
                    <div id="modalBadge" class="absolute -top-4 -right-4 bg-click-lime px-6 py-3 rounded-2xl border-4 border-black-charcoal shadow-brutal transform rotate-6">
                        <span class="font-poppins font-black text-black-charcoal text-lg">🔥 BEST SELLER</span>
                    </div>
                </div>

                <!-- Product Info -->
                <div>
                    <div class="mb-6">
                        <h2 id="modalTitle" class="font-poppins font-black text-4xl text-black-charcoal mb-4">
                            <!-- Title will be inserted -->
                        </h2>
                        <div id="modalPrice" class="font-poppins font-black text-5xl text-hot-pink mb-4">
                            <!-- Price will be inserted -->
                        </div>
                        <p id="modalDescription" class="font-poppins text-lg text-gray-700 leading-relaxed">
                            <!-- Description will be inserted -->
                        </p>
                    </div>

                    <!-- Features -->
                    <div class="mb-6">
                        <h3 class="font-poppins font-black text-xl text-black-charcoal mb-4">✨ KEUNGGULAN</h3>
                        <div id="modalFeatures" class="grid grid-cols-2 gap-3">
                            <!-- Features will be inserted -->
                        </div>
                    </div>

                    <!-- Specifications -->
                    <div class="mb-8">
                        <h3 class="font-poppins font-black text-xl text-black-charcoal mb-4">📋 SPESIFIKASI</h3>
                        <div id="modalSpecs" class="space-y-2">
                            <!-- Specs will be inserted -->
                        </div>
                    </div>

                    <!-- CTA Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4">
                        <button class="flex-1 bg-gradient-to-r from-click-lime to-yellow-300 hover:from-yellow-300 hover:to-click-lime text-black-charcoal px-8 py-5 rounded-2xl font-poppins font-black text-xl transform hover:scale-105 transition-all shadow-brutal-lg border-4 border-black-charcoal group">
                            <span class="inline-block group-hover:animate-bounce mr-2">💬</span>
                            CHAT WHATSAPP
                        </button>
                        <button class="flex-1 bg-black-charcoal hover:bg-hot-pink text-click-lime hover:text-click-white px-8 py-5 rounded-2xl font-poppins font-black text-xl transform hover:scale-105 transition-all shadow-brutal-lg border-4 border-black-charcoal">
                            📞 TELEPON
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
const productsData = @json($products);

function openProductModal(index) {
    const product = productsData[index];
    const modal = document.getElementById('productModal');
    
    // Set product title
    document.getElementById('modalTitle').textContent = product.name;
    
    // Set product price
    document.getElementById('modalPrice').textContent = 
        'Rp ' + new Intl.NumberFormat('id-ID').format(product.price);
    
    // Set product description
    document.getElementById('modalDescription').textContent = product.description;
    
    // Set product image
    const imageContainer = document.getElementById('modalImage');
    imageContainer.innerHTML = `
        <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-gray-100 to-gray-200">
            <div class="text-center p-6">
                <div class="text-9xl mb-4 opacity-20">📦</div>
                <p class="font-poppins font-bold text-lg text-gray-400">${product.name}</p>
            </div>
        </div>
    `;
    
    // Set badge
    document.getElementById('modalBadge').innerHTML = 
        `<span class="font-poppins font-black text-black-charcoal text-lg">🔥 ${product.sold} Terjual</span>`;
    
    // Set features
    const featuresContainer = document.getElementById('modalFeatures');
    featuresContainer.innerHTML = product.features.map(feature => `
        <div class="bg-click-lime/20 px-4 py-3 rounded-xl border-2 border-black-charcoal/20">
            <span class="font-poppins font-bold text-sm text-black-charcoal">✓ ${feature}</span>
        </div>
    `).join('');
    
    // Set specifications
    const specsContainer = document.getElementById('modalSpecs');
    specsContainer.innerHTML = product.specs.map(spec => `
        <div class="flex items-start gap-3 pb-2 border-b border-gray-200">
            <span class="text-hot-pink text-xl flex-shrink-0">•</span>
            <span class="font-poppins text-base text-gray-700">${spec}</span>
        </div>
    `).join('');
    
    // Show modal with animation
    modal.classList.remove('hidden');
    setTimeout(() => {
        modal.classList.add('animate-in');
    }, 10);
    
    // Prevent body scroll
    document.body.style.overflow = 'hidden';
}

function closeProductModal(event) {
    if (event && event.target.id !== 'productModal') return;
    
    const modal = document.getElementById('productModal');
    modal.classList.add('hidden');
    modal.classList.remove('animate-in');
    
    // Restore body scroll
    document.body.style.overflow = '';
}

// Close modal on ESC key
document.addEventListener('keydown', function(event) {
    if (event.key === 'Escape') {
        closeProductModal();
    }
});
</script>

<style>
@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

@keyframes slideUp {
    from { 
        opacity: 0;
        transform: translateY(50px) scale(0.95);
    }
    to { 
        opacity: 1;
        transform: translateY(0) scale(1);
    }
}

#productModal.animate-in {
    animation: fadeIn 0.3s ease-out;
}

#productModal.animate-in > div {
    animation: slideUp 0.4s ease-out;
}
</style>

@endsection