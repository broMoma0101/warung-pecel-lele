
@extends('layouts.app')

@section('title', 'Home - Warung Pecel Lele Enak')

@section('content')

<!-- HERO SECTION -->
<section class="bg-[#183D2B] text-white">
    <div class="max-w-7xl mx-auto px-6 py-20 grid md:grid-cols-2 gap-12 items-center">

        <div>
            <span class="bg-orange-500/20 text-orange-400 px-4 py-2 rounded-full text-sm font-semibold">
                Kuliner Tradisional Indonesia
            </span>

            <h1 class="text-4xl md:text-6xl font-extrabold mt-6 leading-tight">
                Nikmati Lezatnya
                <span class="text-orange-400">Pecel Lele Enak!</span>
            </h1>

            <p class="text-gray-300 mt-6 leading-8">
                Nikmati sajian pecel lele dengan sambal khas,
                lalapan segar, dan nasi hangat.
                Rasa lezat dengan harga yang bersahabat.
            </p>

            <div class="flex flex-wrap gap-4 mt-8">
                <a href="#menu"
                    class="bg-orange-500 hover:bg-orange-600 px-7 py-3 rounded-full font-semibold">
                    Lihat Menu
                </a>

                <a href="#tentang"
                    class="border border-white hover:bg-white hover:text-green-900 px-7 py-3 rounded-full font-semibold">
                    Tentang Kami
                </a>
            </div>
        </div>

        <div>
            <img
                src="https://images.unsplash.com/photo-1547592180-85f173990554?w=900"
                alt="Hidangan makanan"
                class="rounded-3xl shadow-2xl w-full h-[380px] object-cover"
            >
        </div>

    </div>
</section>


<!-- KEUNGGULAN -->
<section class="max-w-7xl mx-auto px-6 py-16">

    <div class="text-center mb-12">
        <h2 class="text-3xl font-bold text-[#183D2B]">
            Kenapa Memilih Kami?
        </h2>

        <p class="text-gray-500 mt-3">
            Kami selalu memberikan yang terbaik untuk pelanggan.
        </p>
    </div>

    <div class="grid md:grid-cols-3 gap-8">

        <div class="bg-white p-8 rounded-2xl shadow-sm text-center">
            <div class="text-4xl mb-4">🍗</div>
            <h3 class="font-bold text-xl text-[#183D2B]">
                Rasa Berkualitas
            </h3>
            <p class="text-gray-500 text-sm mt-3 leading-7">
                Menggunakan bahan pilihan dan bumbu khas
                yang menghasilkan rasa lezat.
            </p>
        </div>

        <div class="bg-white p-8 rounded-2xl shadow-sm text-center">
            <div class="text-4xl mb-4">💰</div>
            <h3 class="font-bold text-xl text-[#183D2B]">
                Harga Terjangkau
            </h3>
            <p class="text-gray-500 text-sm mt-3 leading-7">
                Menyediakan makanan lezat dengan
                harga yang ramah di kantong.
            </p>
        </div>

        <div class="bg-white p-8 rounded-2xl shadow-sm text-center">
            <div class="text-4xl mb-4">⚡</div>
            <h3 class="font-bold text-xl text-[#183D2B]">
                Pelayanan Cepat
            </h3>
            <p class="text-gray-500 text-sm mt-3 leading-7">
                Memberikan pelayanan yang ramah
                dan cepat untuk setiap pelanggan.
            </p>
        </div>

    </div>

</section>


<!-- MENU UNGGULAN -->
<section id="menu" class="bg-[#F5EBD7] py-16">

    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center mb-12">
            <span class="text-orange-600 font-semibold">
                MENU FAVORIT
            </span>

            <h2 class="text-3xl font-bold text-[#183D2B] mt-2">
                Menu Pilihan Kami
            </h2>

            <p class="text-gray-500 mt-3">
                Pilihan makanan favorit pelanggan kami.
            </p>
        </div>

        <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-8">

            <!-- MENU 1 -->
            <div class="bg-white rounded-2xl overflow-hidden shadow-md">
                <img
                    src="https://images.unsplash.com/photo-1515003197210-e0cd7184f8b5?w=700"
                    class="w-full h-52 object-cover"
                    alt="Pecel Lele">

                <div class="p-6">
                    <h3 class="font-bold text-xl text-[#183D2B]">
                        Pecel Lele
                    </h3>

                    <p class="text-gray-500 text-sm mt-2">
                        Lele goreng, nasi hangat, sambal dan lalapan.
                    </p>

                    <div class="flex justify-between items-center mt-5">
                        <span class="text-orange-600 font-bold text-lg">
                            Rp25.000
                        </span>

                        <span class="bg-green-100 text-green-700 text-xs px-3 py-2 rounded-full">
                            Favorit
                        </span>
                    </div>
                </div>
            </div>


            <!-- MENU 2 -->
            <div class="bg-white rounded-2xl overflow-hidden shadow-md">
                <img
                    src="https://images.unsplash.com/photo-1626082927389-6cd097cdc6ec?w=700"
                    class="w-full h-52 object-cover"
                    alt="Ayam Goreng">

                <div class="p-6">
                    <h3 class="font-bold text-xl text-[#183D2B]">
                        Ayam Goreng
                    </h3>

                    <p class="text-gray-500 text-sm mt-2">
                        Ayam goreng gurih dengan sambal dan lalapan.
                    </p>

                    <div class="flex justify-between items-center mt-5">
                        <span class="text-orange-600 font-bold text-lg">
                            Rp22.000
                        </span>

                        <span class="bg-green-100 text-green-700 text-xs px-3 py-2 rounded-full">
                            Favorit
                        </span>
                    </div>
                </div>
            </div>


            <!-- MENU 3 -->
            <div class="bg-white rounded-2xl overflow-hidden shadow-md">
                <img
                    src="https://images.unsplash.com/photo-1512058564366-18510be2db19?w=700"
                    class="w-full h-52 object-cover"
                    alt="Nasi Goreng">

                <div class="p-6">
                    <h3 class="font-bold text-xl text-[#183D2B]">
                        Nasi Goreng
                    </h3>

                    <p class="text-gray-500 text-sm mt-2">
                        Nasi goreng dengan bumbu khas dan telur.
                    </p>

                    <div class="flex justify-between items-center mt-5">
                        <span class="text-orange-600 font-bold text-lg">
                            Rp20.000
                        </span>

                        <span class="bg-green-100 text-green-700 text-xs px-3 py-2 rounded-full">
                            Favorit
                        </span>
                    </div>
                </div>
            </div>

        </div>

    </div>

</section>


<!-- TENTANG KAMI -->
<section id="tentang" class="max-w-7xl mx-auto px-6 py-20">

    <div class="grid md:grid-cols-2 gap-12 items-center">

        <div>
            <img
                src="https://images.unsplash.com/photo-1547592180-85f173990554?w=900"
                alt="Hidangan Warung Pecel Lele"
                class="rounded-3xl w-full h-[350px] object-cover shadow-lg"
            >
        </div>

        <div>
            <span class="text-orange-600 font-semibold">
                TENTANG KAMI
            </span>

            <h2 class="text-3xl font-bold text-[#183D2B] mt-3">
                Cita Rasa Tradisional yang Selalu Istimewa
            </h2>

            <p class="text-gray-500 leading-8 mt-5">
                Warung Pecel Lele Enak merupakan tempat makan
                yang menyediakan berbagai hidangan khas Indonesia.
                Kami mengutamakan kualitas makanan, kebersihan,
                harga terjangkau, dan pelayanan terbaik.
            </p>

            <a href="#kontak"
                class="inline-block bg-[#183D2B] hover:bg-green-900 text-white px-7 py-3 rounded-full mt-7">
                Hubungi Kami
            </a>
        </div>

    </div>

</section>

@endsection
