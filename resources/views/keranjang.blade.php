@extends('layouts.app')

@section('title', 'Keranjang - Cipta Imaji')

@section('content')

<!-- Hero Banner -->
<section class="bg-black-charcoal py-12 relative overflow-hidden">
    <div class="absolute inset-0 grunge-texture opacity-20"></div>
    <div class="absolute top-0 right-0 w-96 h-96 bg-click-lime opacity-10 rounded-full blur-3xl"></div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-3xl">
            <div class="inline-block bg-click-lime px-4 py-2 rounded-lg border-3 border-black-charcoal/30 mb-4">
                <p class="font-poppins font-black text-black-charcoal text-xs">🛒 KERANJANG BELANJA</p>
            </div>
            <h1 class="font-poppins font-black text-5xl md:text-6xl text-click-white mb-4">
                KERANJANG
                <span class="block text-click-lime">BELANJA KAMU</span>
            </h1>
            <p class="font-poppins text-lg text-gray-300">
                Review pesanan kamu sebelum checkout
            </p>
        </div>
    </div>
</section>

<!-- Cart Content -->
<section class="container mx-auto px-4 py-12">
    <div class="grid lg:grid-cols-3 gap-8">
        <!-- Cart Items -->
        <div class="lg:col-span-2">
            <div class="bg-click-white rounded-2xl p-6 border-4 border-black-charcoal shadow-brutal mb-6">
                <div class="flex items-center justify-between mb-6">
                    <h2 class="font-poppins font-black text-2xl text-black-charcoal">
                        Item Keranjang (<span id="cart-count">0</span>)
                    </h2>
                    <button onclick="clearCart()" class="text-redline font-poppins font-bold text-sm hover:underline">
                        Hapus Semua
                    </button>
                </div>

                <!-- Cart Items Container -->
                <div id="cart-items" class="space-y-4">
                    <!-- Items will be inserted here by JavaScript -->
                </div>

                <!-- Empty State -->
                <div id="empty-state" class="text-center py-12">
                    <div class="text-8xl mb-4">🛒</div>
                    <h3 class="font-poppins font-black text-2xl text-black-charcoal mb-2">
                        Keranjang Masih Kosong
                    </h3>
                    <p class="font-poppins text-gray-600 mb-6">
                        Yuk mulai belanja dan tambahkan produk ke keranjang!
                    </p>
                    <a href="{{ route('produk') }}" class="inline-block bg-black-charcoal hover:bg-click-lime text-click-white hover:text-black-charcoal px-8 py-3 rounded-xl font-poppins font-black transform hover:scale-105 transition shadow-brutal border-4 border-black-charcoal">
                        MULAI BELANJA
                    </a>
                </div>
            </div>

            <!-- Continue Shopping -->
            <a href="{{ route('produk') }}" class="inline-flex items-center gap-2 text-black-charcoal font-poppins font-bold hover:text-click-lime transition">
                <span>←</span>
                <span>Lanjut Belanja</span>
            </a>
        </div>

        <!-- Order Summary -->
        <div class="lg:col-span-1">
            <div class="bg-click-white rounded-2xl p-6 border-4 border-black-charcoal shadow-brutal sticky top-24">
                <h3 class="font-poppins font-black text-xl text-black-charcoal mb-6">
                    Ringkasan Pesanan
                </h3>

                <div class="space-y-4 mb-6">
                    <div class="flex justify-between font-poppins">
                        <span class="text-gray-600">Subtotal (<span id="summary-count">0</span> item)</span>
                        <span class="font-bold text-black-charcoal">Rp <span id="subtotal">0</span></span>
                    </div>
                    <div class="flex justify-between font-poppins">
                        <span class="text-gray-600">Ongkir</span>
                        <span class="font-bold text-click-lime">GRATIS</span>
                    </div>
                    <div class="border-t-2 border-gray-200 pt-4 flex justify-between font-poppins">
                        <span class="font-black text-lg">Total</span>
                        <span class="font-black text-2xl text-black-charcoal">Rp <span id="total">0</span></span>
                    </div>
                </div>

                <button onclick="checkout()" id="checkout-btn" disabled class="w-full bg-black-charcoal text-click-white py-4 rounded-xl font-poppins font-black text-lg shadow-brutal border-4 border-black-charcoal mb-4 disabled:opacity-50 disabled:cursor-not-allowed hover:bg-click-lime hover:text-black-charcoal transition">
                    CHECKOUT SEKARANG
                </button>

                <!-- Promo Info -->
                <div class="bg-gray-50 p-4 rounded-xl">
                    <div class="flex items-start gap-3">
                        <span class="text-2xl">🎉</span>
                        <div>
                            <p class="font-poppins font-bold text-sm text-black-charcoal mb-1">
                                Promo Gratis Ongkir!
                            </p>
                            <p class="font-poppins text-xs text-gray-600">
                                Untuk pembelian minimal Rp 100.000
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Rekomendasi Produk -->
<section class="bg-gray-50 py-16">
    <div class="container mx-auto px-4">
        <div class="mb-8">
            <h2 class="font-poppins font-black text-3xl text-black-charcoal inline-block">
                KAMU MUNGKIN SUKA
            </h2>
            <div class="bg-hot-pink h-2 w-24 mt-2 rounded-full"></div>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            @php
            $recommendations = [
                ['name' => 'Stiker Vinyl A4', 'price' => 15000, 'image' => 'stiker-vinyl.jpg'],
                ['name' => 'Mug Custom Foto', 'price' => 35000, 'image' => 'mug-custom.jpg'],
                ['name' => 'Tote Bag Custom', 'price' => 45000, 'image' => 'tote-bag.jpg'],
                ['name' => 'Pin Button 58mm', 'price' => 3000, 'image' => 'pin-button.jpg'],
            ];
            @endphp

            @foreach($recommendations as $product)
            <div class="bg-click-white rounded-xl overflow-hidden border-4 border-black-charcoal shadow-brutal hover:shadow-brutal-lg transform hover:-translate-y-1 transition">
                <div class="aspect-square bg-gray-100"></div>
                <div class="p-4">
                    <h3 class="font-poppins font-bold text-sm text-black-charcoal mb-2 line-clamp-2">
                        {{ $product['name'] }}
                    </h3>
                    <p class="font-poppins font-black text-lg text-black-charcoal mb-3">
                        Rp {{ number_format($product['price'], 0, ',', '.') }}
                    </p>
                    <button onclick="addToCartQuick('{{ $product['name'] }}', {{ $product['price'] }}, '{{ $product['image'] }}')" class="w-full bg-black-charcoal hover:bg-click-lime text-click-white hover:text-black-charcoal py-2 rounded-lg font-poppins font-bold text-sm transition">
                        + KERANJANG
                    </button>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<script>
// Cart Data (In real app, use localStorage or backend)
let cart = JSON.parse(localStorage.getItem('cart')) || [];

// Initialize Cart
document.addEventListener('DOMContentLoaded', function() {
    updateCart();
});

// Update Cart Display
function updateCart() {
    const cartItemsContainer = document.getElementById('cart-items');
    const emptyState = document.getElementById('empty-state');
    const cartCount = document.getElementById('cart-count');
    const summaryCount = document.getElementById('summary-count');
    const checkoutBtn = document.getElementById('checkout-btn');
    
    if (cart.length === 0) {
        cartItemsContainer.classList.add('hidden');
        emptyState.classList.remove('hidden');
        checkoutBtn.disabled = true;
    } else {
        cartItemsContainer.classList.remove('hidden');
        emptyState.classList.add('hidden');
        checkoutBtn.disabled = false;
        
        cartItemsContainer.innerHTML = cart.map((item, index) => `
            <div class="flex gap-4 p-4 bg-gray-50 rounded-xl border-2 border-gray-200">
                <div class="w-24 h-24 bg-gray-200 rounded-lg flex-shrink-0">
                    <div class="w-full h-full flex items-center justify-center text-3xl">
                        📦
                    </div>
                </div>
                <div class="flex-1">
                    <h4 class="font-poppins font-bold text-black-charcoal mb-1">${item.name}</h4>
                    <p class="font-poppins font-black text-lg text-black-charcoal mb-2">
                        Rp ${item.price.toLocaleString('id-ID')}
                    </p>
                    <div class="flex items-center gap-3">
                        <button onclick="updateQuantity(${index}, -1)" class="w-8 h-8 bg-gray-200 hover:bg-gray-300 rounded-lg font-bold">-</button>
                        <span class="font-poppins font-bold w-8 text-center">${item.quantity}</span>
                        <button onclick="updateQuantity(${index}, 1)" class="w-8 h-8 bg-gray-200 hover:bg-gray-300 rounded-lg font-bold">+</button>
                    </div>
                </div>
                <div class="flex flex-col items-end justify-between">
                    <button onclick="removeFromCart(${index})" class="text-redline hover:text-red-700 font-bold">✕</button>
                    <p class="font-poppins font-black text-xl text-black-charcoal">
                        Rp ${(item.price * item.quantity).toLocaleString('id-ID')}
                    </p>
                </div>
            </div>
        `).join('');
    }
    
    cartCount.textContent = cart.length;
    summaryCount.textContent = cart.reduce((sum, item) => sum + item.quantity, 0);
    
    updateSummary();
    updateHeaderBadge();
}

// Update Summary
function updateSummary() {
    const subtotal = cart.reduce((sum, item) => sum + (item.price * item.quantity), 0);
    document.getElementById('subtotal').textContent = subtotal.toLocaleString('id-ID');
    document.getElementById('total').textContent = subtotal.toLocaleString('id-ID');
}

// Update Header Badge
function updateHeaderBadge() {
    const badge = document.querySelector('header .animate-pulse');
    if (badge) {
        const totalItems = cart.reduce((sum, item) => sum + item.quantity, 0);
        badge.textContent = totalItems;
    }
}

// Update Quantity
function updateQuantity(index, change) {
    cart[index].quantity += change;
    if (cart[index].quantity <= 0) {
        cart.splice(index, 1);
    }
    localStorage.setItem('cart', JSON.stringify(cart));
    updateCart();
}

// Remove from Cart
function removeFromCart(index) {
    if (confirm('Hapus item ini dari keranjang?')) {
        cart.splice(index, 1);
        localStorage.setItem('cart', JSON.stringify(cart));
        updateCart();
    }
}

// Clear Cart
function clearCart() {
    if (confirm('Hapus semua item dari keranjang?')) {
        cart = [];
        localStorage.setItem('cart', JSON.stringify(cart));
        updateCart();
    }
}

// Add to Cart Quick (from recommendations)
function addToCartQuick(name, price, image) {
    const existingItem = cart.find(item => item.name === name);
    
    if (existingItem) {
        existingItem.quantity += 1;
    } else {
        cart.push({ name, price, image, quantity: 1 });
    }
    
    localStorage.setItem('cart', JSON.stringify(cart));
    updateCart();
    
    // Show notification
    alert(`${name} ditambahkan ke keranjang!`);
}

// Checkout
function checkout() {
    if (cart.length === 0) return;
    
    const phoneNumber = '6285314150100'; // GANTI NOMOR WA LU
    let message = '*PESANAN BARU*\n\n';
    
    cart.forEach(item => {
        message += `*${item.name}*\n`;
        message += `Harga: Rp ${item.price.toLocaleString('id-ID')}\n`;
        message += `Jumlah: ${item.quantity}\n`;
        message += `Subtotal: Rp ${(item.price * item.quantity).toLocaleString('id-ID')}\n\n`;
    });
    
    const total = cart.reduce((sum, item) => sum + (item.price * item.quantity), 0);
    message += `*TOTAL: Rp ${total.toLocaleString('id-ID')}*\n\n`;
    message += `Mohon konfirmasi pesanan. Terima kasih!`;
    
    const whatsappUrl = `https://wa.me/${phoneNumber}?text=${encodeURIComponent(message)}`;
    window.open(whatsappUrl, '_blank');
}
</script>

@endsection