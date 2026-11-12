
@extends('layouts.app')

@section('title', 'Menu - Warung Pecel Lele Enak')

@section('content')

{{-- header menu --}}
<section class="bg-[#183D2B] text-white py-16">
    <div class="max-w-7xl mx-auto px-6 text-center">

        <span class="text-orange-400 font-semibold">
            PILIHAN MENU KAMI
        </span>

        <h1 class="text-4xl md:text-5xl font-bold mt-4">
            Menu Lezat Warung Kami
        </h1>

        <p class="text-gray-300 mt-5 max-w-2xl mx-auto leading-7">
            Nikmati berbagai hidangan khas Indonesia
            dengan cita rasa yang lezat, sambal khas,
            dan harga yang bersahabat.
        </p>

    </div>
</section>

{{-- kategori menu --}}
<section class="max-w-7xl mx-auto px-6 pt-12">

    <div class="text-center mb-8">
        <h2 class="text-2xl font-bold text-[#183D2B]">
            Kategori Menu
        </h2>
    </div>

    <div class="flex flex-wrap justify-center gap-4">

        <a href="#makanan"
            class="bg-[#183D2B] text-white px-6 py-3 rounded-full hover:bg-green-900">
            Semua Menu
        </a>

        <a href="#makanan"
            class="bg-orange-100 text-orange-700 px-6 py-3 rounded-full hover:bg-orange-200">
            Makanan
        </a>

        <a href="#minuman"
            class="bg-orange-100 text-orange-700 px-6 py-3 rounded-full hover:bg-orange-200">
            Minuman
        </a>

    </div>

</section>


{{-- daaftar makanan --}}
<section id="makanan" class="max-w-7xl mx-auto px-6 py-14">

    <div class="mb-8">
        <span class="text-orange-600 font-semibold">
            MAKANAN
        </span>

        <h2 class="text-3xl font-bold text-[#183D2B] mt-2">
            Menu Makanan
        </h2>

        <p class="text-gray-500 mt-2">
            Pilihan makanan spesial untuk menemani harimu.
        </p>
    </div>

    @php
        $makanan = [
            [
                'nama' => 'Pecel Lele',
                'harga' => 25000,
                'deskripsi' => 'Lele goreng, nasi hangat, sambal dan lalapan.',
                'gambar' => 'https://images.unsplash.com/photo-1515003197210-e0cd7184f8b5?w=700',
                'label' => 'Best Seller'
            ],
            [
                'nama' => 'Ayam Goreng',
                'harga' => 22000,
                'deskripsi' => 'Ayam goreng gurih dengan sambal dan lalapan.',
                'gambar' => 'https://images.unsplash.com/photo-1626082927389-6cd097cdc6ec?w=700',
                'label' => 'Favorit'
            ],
            [
                'nama' => 'Bebek Goreng',
                'harga' => 30000,
                'deskripsi' => 'Bebek goreng dengan bumbu rempah pilihan.',
                'gambar' => 'https://images.unsplash.com/photo-1547592180-85f173990554?w=700',
                'label' => 'Spesial'
            ],
            [
                'nama' => 'Nasi Goreng',
                'harga' => 20000,
                'deskripsi' => 'Nasi goreng dengan bumbu khas dan telur.',
                'gambar' => 'https://images.unsplash.com/photo-1512058564366-18510be2db19?w=700',
                'label' => 'Favorit'
            ],
            [
                'nama' => 'Nasi Bakar',
                'harga' => 27000,
                'deskripsi' => 'Nasi bakar dengan ayam suir dan rasa smoke yang enak.',
                'gambar' => 'https://images.unsplash.com/photo-1515003197210-e0cd7184f8b5?w=700',
                'label' => 'Spesial'
            ],
            [
                'nama' => 'Ayam Bakar',
                'harga' => 25000,
                'deskripsi' => 'Ayam bakar dengan bumbu kecap khas.',
                'gambar' => 'public/assets/ayambakar.jpg',
                'label' => 'Favorit'
            ],
        ];
    @endphp

    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">

        @foreach ($makanan as $item)

            <div class="bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition">

                <div class="relative">
                    <img
                        src="{{ $item['gambar'] }}"
                        alt="{{ $item['nama'] }}"
                        class="w-full h-56 object-cover"
                    >

                    <span class="absolute top-4 left-4 bg-orange-500 text-white text-xs font-semibold px-4 py-2 rounded-full">
                        {{ $item['label'] }}
                    </span>
                </div>

                <div class="p-6">

                    <h3 class="text-xl font-bold text-[#183D2B]">
                        {{ $item['nama'] }}
                    </h3>

                    <p class="text-gray-500 text-sm mt-3 leading-6">
                        {{ $item['deskripsi'] }}
                    </p>

                    <div class="flex justify-between items-center mt-6">

                        <span class="text-orange-600 text-xl font-bold">
                            Rp{{ number_format($item['harga'], 0, ',', '.') }}
                        </span>

                        <span class="text-xs bg-green-100 text-green-700 px-3 py-2 rounded-full">
                            Tersedia
                        </span>

                    </div>

                    <button
                        type="button"
                        disabled
                        class="w-full bg-[#183D2B] text-white py-3 rounded-xl mt-5 opacity-70 cursor-not-allowed">
                        Detail Menu (Segera Hadir)
                    </button>

                </div>

            </div>

        @endforeach

    </div>

</section>


<!-- DAFTAR MINUMAN -->
<section id="minuman" class="bg-[#F5EBD7] py-16">

    <div class="max-w-7xl mx-auto px-6">

        <div class="mb-8">
            <span class="text-orange-600 font-semibold">
                MINUMAN
            </span>

            <h2 class="text-3xl font-bold text-[#183D2B] mt-2">
                Menu Minuman
            </h2>

            <p class="text-gray-500 mt-2">
                Minuman segar untuk menemani hidanganmu.
            </p>
        </div>

        @php
            $minuman = [
                [
                    'nama' => 'Es Teh Manis',
                    'harga' => 5000,
                    'deskripsi' => 'Teh manis segar dengan es batu.',
                    'gambar' => 'https://images.unsplash.com/photo-1556679343-c7306c1976bc?w=700'
                ],
                [
                    'nama' => 'Es Jeruk',
                    'harga' => 8000,
                    'deskripsi' => 'Perasan jeruk segar yang menyegarkan.',
                    'gambar' => 'https://images.unsplash.com/photos/a-refreshing-orange-cocktail-with-lime-garnish-XxHlGkAlSoo'
                ],
                [
                    'nama' => 'Air Mineral',
                    'harga' => 4000,
                    'deskripsi' => 'Air mineral dingin untuk menemani makan.',
                    'gambar' => 'https://images.unsplash.com/photo-1548839140-29a749e1cf4d?w=700'
                ],
            ];
        @endphp

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">

            @foreach ($minuman as $item)

                <div class="bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition">

                    <img
                        src="{{ $item['gambar'] }}"
                        alt="{{ $item['nama'] }}"
                        class="w-full h-56 object-cover"
                    >

                    <div class="p-6">

                        <h3 class="text-xl font-bold text-[#183D2B]">
                            {{ $item['nama'] }}
                        </h3>

                        <p class="text-gray-500 text-sm mt-3 leading-6">
                            {{ $item['deskripsi'] }}
                        </p>

                        <div class="flex justify-between items-center mt-6">

                            <span class="text-orange-600 text-xl font-bold">
                                Rp{{ number_format($item['harga'], 0, ',', '.') }}
                            </span>

                            <span class="text-xs bg-green-100 text-green-700 px-3 py-2 rounded-full">
                                Tersedia
                            </span>

                        </div>

                        <button
                            type="button"
                            disabled
                            class="w-full bg-[#183D2B] text-white py-3 rounded-xl mt-5 opacity-70 cursor-not-allowed">
                            Detail Menu (Segera Hadir)
                        </button>

                    </div>

                </div>

            @endforeach

        </div>

    </div>

</section>


<!-- AJAKAN PESAN -->
<section class="bg-[#183D2B] py-16 text-center text-white">

    <div class="max-w-3xl mx-auto px-6">

        <h2 class="text-3xl md:text-4xl font-bold">
            Sudah Menemukan Menu Favoritmu?
        </h2>

        <p class="text-gray-300 mt-4 leading-7">
            Nikmati hidangan lezat dari Warung Pecel Lele Enak.
            Kami siap menyajikan makanan terbaik untukmu.
        </p>

        <a href="{{ route('home') }}"
            class="inline-block bg-orange-500 hover:bg-orange-600 px-8 py-3 rounded-full font-semibold mt-8">
            Kembali ke Home
        </a>

    </div>

</section>

@endsection
