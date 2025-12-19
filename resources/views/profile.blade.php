@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-10 max-w-3xl">

    <div class="bg-cobalt-blue border-4 border-black-charcoal rounded-2xl shadow-brutal-lg p-6 relative overflow-hidden">
        <div class="absolute inset-0 grunge-texture opacity-10"></div>

        <!-- HEADER PROFILE -->
        <div class="flex items-center gap-6 mb-6 relative z-10">
            <div class="bg-click-lime w-20 h-20 rounded-xl flex items-center justify-center text-4xl border-4 border-black-charcoal shadow-brutal">
                👤
            </div>
            <div>
                <h1 class="font-poppins font-black text-3xl text-click-white">
                    Nama User
                </h1>
                <p class="text-click-white/80 text-sm">
                    user@email.com
                </p>
            </div>
        </div>

        <!-- INFO -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 relative z-10">
            <div class="bg-black-charcoal p-4 rounded-xl border-3 border-click-lime shadow-brutal">
                <p class="text-click-white text-sm font-bold">No HP</p>
                <p class="text-click-white/80 text-sm">08xxxxxxxxxx</p>
            </div>

            <div class="bg-black-charcoal p-4 rounded-xl border-3 border-hot-pink shadow-brutal">
                <p class="text-click-white text-sm font-bold">Alamat</p>
                <p class="text-click-white/80 text-sm">
                    Bandung, Jawa Barat
                </p>
            </div>
        </div>

        <!-- BUTTON -->
        <div class="flex gap-3 mt-6 relative z-10">
            <a href="#"
               class="bg-click-lime text-black-charcoal px-6 py-2 rounded-xl font-black shadow-brutal border-3 border-black-charcoal hover:scale-105 transition">
                EDIT PROFILE
            </a>

            <a href="#"
               class="bg-hot-pink text-click-white px-6 py-2 rounded-xl font-black shadow-brutal border-3 border-black-charcoal hover:scale-105 transition">
                LOGOUT
            </a>
        </div>

    </div>

</div>
@endsection
