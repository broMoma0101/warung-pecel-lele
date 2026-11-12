
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Warung Pecel Lele Enak')</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        html {
            scroll-behavior: smooth;
        }
    </style>
</head>

<body class="bg-[#FFF8EB] text-gray-800">

    <!-- Navbar -->
    <nav class="bg-[#183D2B] text-white sticky top-0 z-50 shadow-lg">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">

            <a href="{{ route('home') }}" class="text-2xl font-bold text-orange-400">
                Pecel Lele <span class="text-white">Enak.</span>
            </a>

            <div class="hidden md:flex items-center gap-8 text-sm font-medium">
                <a href="{{ route('home') }}" class="hover:text-orange-400">Home</a>
                <a href="{{ route('menu') }}#menu" class="hover:text-orange-400">Menu</a>
                <a href="{{ route('home') }}#tentang" class="hover:text-orange-400">Tentang Kami</a>
                <a href="{{ route('home') }}#kontak" class="hover:text-orange-400">Kontak</a>
            </div>

            <a href="{{ route('home') }}#menu"
                class="bg-orange-500 hover:bg-orange-600 px-5 py-2 rounded-full text-sm font-semibold">
                Pesan Sekarang
            </a>

        </div>
    </nav>

    <!-- Isi Halaman -->
    @yield('content')

    <!-- Footer -->
    <footer id="kontak" class="bg-[#183D2B] text-white mt-16">
        <div class="max-w-7xl mx-auto px-6 py-12 grid md:grid-cols-3 gap-10">

            <div>
                <h2 class="text-2xl font-bold text-orange-400">
                    Pecel Lele Enak.
                </h2>
                <p class="text-gray-300 text-sm mt-4 leading-7">
                    Menyajikan makanan tradisional Indonesia
                    dengan cita rasa lezat, harga terjangkau,
                    dan pelayanan terbaik.
                </p>
            </div>

            <div>
                <h3 class="font-bold text-lg mb-4">Navigasi</h3>
                <div class="flex flex-col gap-3 text-gray-300 text-sm">
                    <a href="{{ route('home') }}">Home</a>
                    <a href="{{ route('home') }}#menu">Menu</a>
                    <a href="{{ route('home') }}#tentang">Tentang Kami</a>
                </div>
            </div>

            <div>
                <h3 class="font-bold text-lg mb-4">Hubungi Kami</h3>
                <p class="text-gray-300 text-sm leading-7">
                    Alamat: Isi alamat warung kamu
                    <br>
                    WhatsApp: Isi nomor WhatsApp
                    <br>
                    Jam Buka: 10.00 - 22.00 WIB
                </p>
            </div>

        </div>

        <div class="border-t border-gray-600 text-center py-5 text-sm text-gray-300">
            &copy; {{ date('Y') }} Warung Pecel Lele Enak.
            All Rights Reserved.
        </div>
    </footer>

</body>
</html>
