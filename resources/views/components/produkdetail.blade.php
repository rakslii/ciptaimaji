{{-- FILE: resources/views/components/produkdetail.blade.php --}}

<div id="productModal" class="hidden fixed inset-0 bg-black/80 z-50 flex items-center justify-center p-4">
    <div class="bg-white rounded-3xl max-w-6xl w-full max-h-[90vh] overflow-y-auto border-8 border-black shadow-xl">
        <div class="p-8">

            <!-- HEADER -->
            <div class="flex justify-between items-start mb-6">
                <div>
                    <h2 id="modalTitle" class="font-black text-3xl mb-2"></h2>
                    <p id="modalDesc" class="text-gray-600"></p>
                </div>
                <button onclick="closeModal()" class="text-4xl text-gray-400 hover:text-red-500 font-bold">&times;</button>
            </div>

            <div class="grid md:grid-cols-2 gap-8">

                <!-- LEFT -->
                <div>
                    <div class="space-y-4 bg-gray-50 p-6 rounded-2xl border-4 border-black">
                        <div>
                            <label class="font-bold text-sm">Bahan</label>
                            <select id="material" class="w-full px-4 py-3 rounded-xl border-2">
                                <option>PVC Board Sign A3 Glossy</option>
                                <option>PVC Board Sign A2 Glossy</option>
                                <option>Flexi Korea Premium</option>
                            </select>
                        </div>

                        <div>
                            <label class="font-bold text-sm">Jumlah</label>
                            <input type="number" id="quantity" value="1" min="1"
                                onchange="calculateTotal()"
                                class="w-full px-4 py-3 rounded-xl border-2">
                        </div>

                        <div>
                            <label class="font-bold text-sm">Harga Satuan</label>
                            <input id="priceDisplay" readonly
                                class="w-full px-4 py-3 bg-gray-200 rounded-xl border-2 font-bold">
                        </div>

                        <div>
                            <label class="font-bold text-sm">Catatan</label>
                            <textarea id="notes" rows="3"
                                class="w-full px-4 py-3 rounded-xl border-2"
                                placeholder="Opsional..."></textarea>
                        </div>
                    </div>
                </div>

                <!-- RIGHT -->
                <div class="space-y-6">

                    <!-- UPLOAD -->
                    <div class="bg-gray-50 p-6 rounded-2xl border-4 border-black text-center">
                        <p class="font-bold mb-3">Upload Design</p>

                        <input type="file" id="fileInput" accept="image/*"
                            onchange="handleFileSelect(event)"
                            class="hidden">

                        <div id="uploadPlaceholder">
                            <button onclick="fileInput.click()"
                                class="bg-black text-white px-6 py-2 rounded-lg font-bold">
                                Upload File
                            </button>
                        </div>

                        <!-- PREVIEW -->
                        <div id="imagePreview" class="hidden mt-4">
                            <img id="previewImg"
                                class="max-h-64 mx-auto rounded-xl border-4 border-black mb-3">
                            <p id="fileName" class="font-bold text-sm"></p>
                            <button onclick="removeFile()"
                                class="mt-2 bg-red-500 text-white px-4 py-2 rounded-lg font-bold">
                                Hapus File
                            </button>
                        </div>
                    </div>

                    <!-- CHECKOUT -->
                    <div class="bg-lime-200/40 p-6 rounded-2xl border-4 border-black">
                        <div class="flex justify-between mb-4">
                            <span class="font-bold">Total</span>
                            <span id="totalPrice" class="text-3xl font-black text-red-600">Rp 0</span>
                        </div>

                        <div class="grid grid-cols-2 gap-4">
                            <button onclick="addToCart()"
                                class="bg-yellow-400 border-4 border-black py-3 rounded-xl font-black">
                                🛒 Keranjang
                            </button>

                            <button onclick="checkout()"
                                class="bg-black text-white py-3 rounded-xl font-black">
                                🟢 WhatsApp
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<script>
let currentProduct = { name:'', price:0, desc:'', link:'' };
let uploadedFile = null;

// OPEN MODAL
function openModal(name, price, desc, link) {
    currentProduct = { name, price, desc, link };
    modalTitle.textContent = name;
    modalDesc.textContent = desc;
    priceDisplay.value = 'Rp ' + price.toLocaleString('id-ID');
    productModal.classList.remove('hidden');
    calculateTotal();
}

// CLOSE
function closeModal() {
    productModal.classList.add('hidden');
    resetForm();
}

// TOTAL
function calculateTotal() {
    const qty = quantity.value || 1;
    totalPrice.textContent = 'Rp ' + (currentProduct.price * qty).toLocaleString('id-ID');
}

// UPLOAD + PREVIEW
function handleFileSelect(e) {
    uploadedFile = e.target.files[0];
    if (!uploadedFile) return;

    fileName.textContent = uploadedFile.name;
    uploadPlaceholder.classList.add('hidden');
    imagePreview.classList.remove('hidden');

    const reader = new FileReader();
    reader.onload = e => previewImg.src = e.target.result;
    reader.readAsDataURL(uploadedFile);
}

function removeFile() {
    uploadedFile = null;
    fileInput.value = '';
    uploadPlaceholder.classList.remove('hidden');
    imagePreview.classList.add('hidden');
}

// RESET
function resetForm() {
    quantity.value = 1;
    notes.value = '';
    material.selectedIndex = 0;
    removeFile();
}

// KERANJANG (CONTOH SIMPLE)
function addToCart() {
    alert('Produk masuk keranjang 🛒 (tinggal sambungin ke session / localStorage)');
}

// WHATSAPP
function checkout() {
    if (!uploadedFile) {
        alert('Upload design dulu!');
        return;
    }

    const phone = '6285971620263'; // 085971620263
    let msg = `*PESANAN BARU*\n\n`;
    msg += `*Produk:* ${currentProduct.name}\n`;
    msg += `*Bahan:* ${material.value}\n`;
    msg += `*Jumlah:* ${quantity.value}\n`;
    msg += `*Total:* ${totalPrice.textContent}\n`;
    msg += `*Link:* ${currentProduct.link}\n`;
    msg += `*File:* ${uploadedFile.name}\n`;
    msg += `*Catatan:* ${notes.value || '-'}\n\n`;
    msg += `Mohon diproses 🙏`;

    window.open(`https://wa.me/${phone}?text=${encodeURIComponent(msg)}`, '_blank');
    closeModal();
}
</script>
