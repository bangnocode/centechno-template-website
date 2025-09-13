<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aurum Dining</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .font-luxury {
            font-family: 'Playfair Display', serif;
        }
    </style>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Playfair+Display:wght@600;700&display=swap"
        rel="stylesheet">
</head>

<body class="bg-[#0f0f0f] text-gray-200">

    <!-- Navbar Premium Flowbite -->
    <nav class="bg-black fixed w-full z-50 transition-all duration-300">
        <div class="max-w-7xl flex flex-wrap items-center justify-between mx-auto px-6 py-4">

            <!-- Logo -->
            <a href="#" class="flex items-center">
                <span class="self-center text-2xl font-serif font-bold tracking-wider text-[#d4af37]">AURUM</span>
            </a>

            <!-- Mobile Toggle -->
            <button data-collapse-toggle="navbar-menu" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-gray-300 rounded-lg md:hidden hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-[#d4af37]"
                aria-controls="navbar-menu" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>

            <!-- Menu -->
            <div class="hidden w-full md:flex md:w-auto" id="navbar-menu">
                <ul
    class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-700 rounded-lg bg-black/90 
           md:space-x-10 md:flex-row md:mt-0 md:border-0 md:bg-transparent">

    <li><a href="{{ url('/aurum-dining') }}"
           class="block py-2 px-3 rounded text-[#d4af37] transition">Home</a></li>

    <li><a href="{{ url('/aurum-dining/menu') }}"
           class="block py-2 px-3 text-white rounded hover:text-[#d4af37] transition">Menu</a></li>

    <li><a href="{{ url('/aurum-dining#about') }}"
           class="block py-2 px-3 text-white rounded hover:text-[#d4af37] transition">Tentang</a></li>

    <li><a href="{{ url('/aurum-dining/galeri') }}"
           class="block py-2 px-3 text-white rounded hover:text-[#d4af37] transition">Galeri</a></li>

    <li>
        <a href="{{ url('/aurum-dining#reservasi') }}"
           class="block py-2 px-4 bg-[#d4af37] text-black font-semibold rounded-full hover:bg-yellow-500 transition">
            Reservasi
        </a>
    </li>
</ul>

            </div>
        </div>
    </nav>


    <!-- Hero -->
    <section id="home"
        class="relative h-screen flex items-center justify-center bg-[url('https://images.unsplash.com/photo-1528605248644-14dd04022da1?auto=format&fit=crop&w=1000&q=80')] bg-cover bg-center">
        <div class="absolute inset-0 bg-black/70"></div>
        <div class="relative text-center text-white px-6 max-w-3xl">
            <h1 class="text-5xl md:text-7xl font-luxury font-bold mb-6">Luxury Dining Experience</h1>
            <p class="text-lg md:text-2xl mb-8 text-gray-300">Seni kuliner mewah dengan atmosfer elegan</p>
            <a href="#reservasi"
                class="bg-[#d4af37] hover:bg-yellow-500 text-black px-8 py-3 rounded-full font-semibold">Reservasi
                Sekarang</a>
        </div>
    </section>

    <!-- Highlights -->
    <section class="py-20 px-6 max-w-7xl mx-auto grid sm:grid-cols-2 md:grid-cols-3 gap-12 text-center">
        <div>
            <div class="text-[#d4af37] text-5xl mb-4">🥂</div>
            <h3 class="text-xl font-luxury mb-2">Eksklusif</h3>
            <p class="text-gray-400">Atmosfer private & elegan untuk setiap momen.</p>
        </div>
        <div>
            <div class="text-[#d4af37] text-5xl mb-4">👨‍🍳</div>
            <h3 class="text-xl font-luxury mb-2">Chef Michelin</h3>
            <p class="text-gray-400">Dipimpin chef berkelas dunia.</p>
        </div>
        <div>
            <div class="text-[#d4af37] text-5xl mb-4">🍷</div>
            <h3 class="text-xl font-luxury mb-2">Wine Premium</h3>
            <p class="text-gray-400">Pilihan wine terbaik internasional.</p>
        </div>
    </section>

    <!-- Menu -->
    <section id="menu-section" class="py-20 px-6 bg-[#1a1a1a]">
        <h2 class="text-3xl font-luxury text-center mb-12 text-[#d4af37]">Signature Menu</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10 max-w-7xl mx-auto">
            <div class="bg-[#0f0f0f] rounded-2xl shadow-lg overflow-hidden hover:scale-105 transition">
                <img src="https://source.unsplash.com/600x400/?lobster" class="w-full h-56 object-cover" />
                <div class="p-6">
                    <h3 class="text-xl font-luxury mb-2">Lobster Thermidor</h3>
                    <p class="text-gray-400 mb-3">Lobster segar dengan saus creamy.</p>
                    <span class="text-lg font-semibold text-[#d4af37]">Rp 450K</span>
                </div>
            </div>
            <div class="bg-[#0f0f0f] rounded-2xl shadow-lg overflow-hidden hover:scale-105 transition">
                <img src="https://source.unsplash.com/600x400/?wagyu" class="w-full h-56 object-cover" />
                <div class="p-6">
                    <h3 class="text-xl font-luxury mb-2">Wagyu A5 Steak</h3>
                    <p class="text-gray-400 mb-3">Daging wagyu Jepang terbaik.</p>
                    <span class="text-lg font-semibold text-[#d4af37]">Rp 1.200K</span>
                </div>
            </div>
            <div class="bg-[#0f0f0f] rounded-2xl shadow-lg overflow-hidden hover:scale-105 transition">
                <img src="https://source.unsplash.com/600x400/?dessert" class="w-full h-56 object-cover" />
                <div class="p-6">
                    <h3 class="text-xl font-luxury mb-2">Gold Soufflé</h3>
                    <p class="text-gray-400 mb-3">Dessert mewah dengan emas asli.</p>
                    <span class="text-lg font-semibold text-[#d4af37]">Rp 250K</span>
                </div>
            </div>
        </div>

        <a href="#reservasi"
            class="block py-3 px-6 mt-12 max-w-max bg-[#d4af37] mx-auto text-black font-semibold rounded-2xl hover:bg-yellow-500 transition">
            Other Menu
        </a>
    </section>

    <!-- About -->
    <section id="about" class="relative py-20 px-6 max-w-7xl mx-auto grid md:grid-cols-2 gap-12 items-center">
        <!-- Image -->
        <div class="relative">
            <img src="https://images.unsplash.com/photo-1528605248644-14dd04022da1?auto=format&fit=crop&w=1000&q=80"
                class="rounded-3xl shadow-2xl object-cover w-full h-full" />
            <!-- Overlay Accent -->
            <div class="absolute inset-0 bg-gradient-to-tr from-black/40 to-transparent rounded-3xl"></div>
        </div>

        <!-- Text Content -->
        <div class="relative">
            <h2 class="text-4xl md:text-5xl font-serif font-bold tracking-wide text-white mb-6">
                Tentang <span class="text-[#d4af37]">Aurum Dining</span>
            </h2>
            <div class="w-20 h-[3px] bg-[#d4af37] mb-6"></div>
            <p class="text-lg text-gray-300 leading-relaxed mb-4">
                Sejak <span class="text-[#d4af37] font-semibold">2015</span>, Aurum Dining menghadirkan pengalaman
                kuliner eksklusif dengan sentuhan seni kelas dunia.
            </p>
            <p class="text-lg text-gray-400 leading-relaxed">
                Setiap detail dirancang untuk menciptakan suasana <span class="italic">elegan</span>, <span
                    class="italic">intimate</span>, dan penuh <span class="text-[#d4af37] font-medium">kemewahan</span>.
            </p>
        </div>
    </section>


    <!-- Reservasi CTA -->
    <section id="reservasi" class="py-20 px-6 bg-[#1a1a1a] text-center">
        <div class="max-w-3xl mx-auto bg-[#0f0f0f] p-10 rounded-2xl shadow-xl">
            <h2 class="text-3xl font-luxury text-[#d4af37] mb-6">Reservasi Eksklusif</h2>
            <p class="text-gray-400 mb-8">Booking meja Anda untuk pengalaman kuliner tak terlupakan.</p>
            <div class="flex flex-col sm:flex-row justify-center gap-6">
                <a href="https://wa.me/6281288888888" target="_blank"
                    class="flex-1 bg-[#25D366] hover:bg-green-500 text-white px-6 py-4 rounded-lg font-semibold">📱
                    WhatsApp</a>
                <a href="tel:+6281288888888"
                    class="flex-1 bg-[#d4af37] hover:bg-yellow-500 text-black px-6 py-4 rounded-lg font-semibold">📞
                    Telepon</a>
                <a href="mailto:contact@aurumdining.com"
                    class="flex-1 bg-gray-700 hover:bg-gray-600 text-white px-6 py-4 rounded-lg font-semibold">✉️
                    Email</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-black text-gray-400 py-12 text-center px-6">
        <div class="mb-4">
            <span class="text-2xl font-luxury text-[#d4af37]">AURUM</span>
        </div>
        <p class="mb-2">Jl. Kemewahan No. 88, Jakarta</p>
        <p class="mb-4">✉️ contact@aurumdining.com | 📞 0812-8888-8888</p>
        <div class="flex justify-center space-x-6 text-[#d4af37] text-xl">
            <a href="#">🌐</a>
            <a href="#">📷</a>
            <a href="#">🐦</a>
        </div>
        <p class="mt-6 text-sm text-gray-600">&copy; 2025 Aurum Dining. All rights reserved.</p>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script>
    </script>
</body>

</html>