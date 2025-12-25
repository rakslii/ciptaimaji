<footer class="bg-black-charcoal border-t-4 border-click-lime relative overflow-hidden mt-20">
    <!-- Grunge Pattern -->
    <div class="absolute inset-0 opacity-5 grunge-texture"></div>
    
    <div class="container mx-auto px-4 py-12 relative z-10">
        <!-- Main Footer Content -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
            <!-- About -->
            <div>
                <h4 class="font-poppins font-black text-lg text-click-white mb-4">TENTANG KAMI</h4>
                <p class="text-click-white/70 text-sm leading-relaxed font-poppins mb-4">
                    Solusi printing terpercaya sejak 2010. Dari stiker sampai banner, kami sediain semuanya!
                </p>
            </div>

            <!-- Quick Links -->
            <div>
                <h4 class="font-poppins font-black text-lg text-click-white mb-4">LAYANAN</h4>
                <ul class="space-y-2">
                    @php
                    $services = ['Digital Printing', 'Offset Print', 'Cutting Laser', 'Banner & Spanduk'];
                    @endphp
                    @foreach($services as $service)
                    <li>
                        <a href="#" class="text-click-white/70 hover:text-click-lime transition font-poppins text-sm">
                            {{ $service }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>

            <!-- Contact -->
            <div>
                <h4 class="font-poppins font-black text-lg text-click-white mb-4">HUBUNGI KAMI</h4>
                <ul class="space-y-3 text-click-white/70 text-sm">
                    <li class="flex items-center gap-2">
                        <span>☎</span>
                        <span>(022) 25362571</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <span>📱</span>
                        <span>085314150100</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <span>📧</span>
                        <span class="text-xs">info@ciptaimaji.com</span>
                    </li>
                </ul>
            </div>

            <!-- Hours -->
            <div>
                <h4 class="font-poppins font-black text-lg text-click-white mb-4">JAM BUKA</h4>
                <div class="bg-click-lime/10 p-4 rounded-xl border-2 border-click-lime/30">
                    <p class="text-click-white font-poppins font-bold text-sm mb-1">SENIN - SABTU</p>
                    <p class="font-poppins font-black text-2xl text-click-lime">08.30-17.30</p>
                    <p class="text-click-white/70 font-poppins text-xs">WIB</p>
                </div>
            </div>
        </div>

        <!-- Bottom Bar -->
        <div class="border-t-2 border-click-white/10 pt-6 flex flex-col md:flex-row items-center justify-between gap-4">
            <!-- Copyright -->
            <div class="text-center md:text-left">
                <p class="text-click-white/70 font-poppins text-sm">
                    © 2024 <span class="text-click-lime font-bold">CIPTA IMAJI</span> - All Rights Reserved
                </p>
            </div>
            
            <!-- Social Media -->
            <div class="flex items-center gap-3">
                @php
                $socials = [
                    ['icon' => '📘', 'link' => '#'],
                    ['icon' => '📸', 'link' => '#'],
                    ['icon' => '💬', 'link' => 'https://wa.me/6285314150100']
                ];
                @endphp
                @foreach($socials as $social)
                <a href="{{ $social['link'] }}" target="_blank" class="w-10 h-10 bg-click-white/10 hover:bg-click-lime rounded-lg flex items-center justify-center transition text-xl">
                    {{ $social['icon'] }}
                </a>
                @endforeach
            </div>
        </div>
    </div>
</footer>