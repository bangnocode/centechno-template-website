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
                            class="block py-2 px-3 text-white rounded hover:text-[#d4af37] transition">Home</a></li>

                    <li><a href="{{ url('/aurum-dining/menu') }}"
                            class="block py-2 px-3 rounded text-[#d4af37] transition">Menu</a></li>

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

    <section id="menu" class="py-36 px-6 max-w-7xl mx-auto">
        <!-- Heading -->
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-serif font-bold tracking-wide text-white">
                Menu <span class="text-[#d4af37]">Eksklusif</span>
            </h2>
            <div class="w-24 h-[3px] bg-[#d4af37] mx-auto mt-4"></div>
            <p class="mt-6 text-gray-400 text-lg max-w-2xl mx-auto">
                Hidangan terbaik kami, dipilih khusus untuk menghadirkan pengalaman kuliner premium penuh kemewahan.
            </p>
        </div>

        <!-- Menu Grid -->
        <div class="grid gap-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            <!-- Item -->
            <div
                class="bg-black/40 backdrop-blur-md rounded-2xl shadow-xl overflow-hidden hover:scale-105 transition transform duration-500">
                <img src="https://images.unsplash.com/photo-1600891964093-3cde3e2d8b7e?auto=format&fit=crop&w=800&q=80"
                    alt="Steak" class="w-full h-60 object-cover rounded-t-2xl" />
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-white mb-2">Wagyu Tenderloin</h3>
                    <p class="text-gray-400 text-sm mb-4">Steak premium dengan kualitas terbaik, disajikan dengan saus
                        spesial.</p>
                    <span class="text-[#d4af37] font-bold text-lg">Rp 850.000</span>
                </div>
            </div>

            <!-- Item -->
            <div
                class="bg-black/40 backdrop-blur-md rounded-2xl shadow-xl overflow-hidden hover:scale-105 transition transform duration-500">
                <img src="https://images.unsplash.com/photo-1625944195306-7d9f99b91a48?auto=format&fit=crop&w=800&q=80"
                    alt="Pasta" class="w-full h-60 object-cover rounded-t-2xl" />
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-white mb-2">Truffle Pasta</h3>
                    <p class="text-gray-400 text-sm mb-4">Pasta buatan tangan dengan aroma truffle dan taburan parmesan.
                    </p>
                    <span class="text-[#d4af37] font-bold text-lg">Rp 450.000</span>
                </div>
            </div>

            <!-- Item -->
            <div
                class="bg-black/40 backdrop-blur-md rounded-2xl shadow-xl overflow-hidden hover:scale-105 transition transform duration-500">
                <img src="https://images.unsplash.com/photo-1617196034846-9f1f4c857c3e?auto=format&fit=crop&w=800&q=80"
                    alt="Dessert" class="w-full h-60 object-cover rounded-t-2xl" />
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-white mb-2">Gold Chocolate Soufflé</h3>
                    <p class="text-gray-400 text-sm mb-4">Soufflé cokelat mewah dengan sentuhan edible gold di atasnya.
                    </p>
                    <span class="text-[#d4af37] font-bold text-lg">Rp 300.000</span>
                </div>
            </div>

            <!-- Item -->
            <div
                class="bg-black/40 backdrop-blur-md rounded-2xl shadow-xl overflow-hidden hover:scale-105 transition transform duration-500">
                <img src="https://images.unsplash.com/photo-1589308078059-be1415eab4c3?auto=format&fit=crop&w=800&q=80"
                    alt="Wine" class="w-full h-60 object-cover rounded-t-2xl" />
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-white mb-2">Red Wine Reserve</h3>
                    <p class="text-gray-400 text-sm mb-4">Pilihan wine terbaik dari koleksi eksklusif AURUM.</p>
                    <span class="text-[#d4af37] font-bold text-lg">Rp 1.200.000</span>
                </div>
            </div>
            <div
                class="bg-black/40 backdrop-blur-md rounded-2xl shadow-xl overflow-hidden hover:scale-105 transition transform duration-500">
                <img src="https://images.unsplash.com/photo-1600891964093-3cde3e2d8b7e?auto=format&fit=crop&w=800&q=80"
                    alt="Steak" class="w-full h-60 object-cover rounded-t-2xl" />
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-white mb-2">Wagyu Tenderloin</h3>
                    <p class="text-gray-400 text-sm mb-4">Steak premium dengan kualitas terbaik, disajikan dengan saus
                        spesial.</p>
                    <span class="text-[#d4af37] font-bold text-lg">Rp 850.000</span>
                </div>
            </div>

            <!-- Item -->
            <div
                class="bg-black/40 backdrop-blur-md rounded-2xl shadow-xl overflow-hidden hover:scale-105 transition transform duration-500">
                <img src="https://images.unsplash.com/photo-1625944195306-7d9f99b91a48?auto=format&fit=crop&w=800&q=80"
                    alt="Pasta" class="w-full h-60 object-cover rounded-t-2xl" />
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-white mb-2">Truffle Pasta</h3>
                    <p class="text-gray-400 text-sm mb-4">Pasta buatan tangan dengan aroma truffle dan taburan parmesan.
                    </p>
                    <span class="text-[#d4af37] font-bold text-lg">Rp 450.000</span>
                </div>
            </div>

            <!-- Item -->
            <div
                class="bg-black/40 backdrop-blur-md rounded-2xl shadow-xl overflow-hidden hover:scale-105 transition transform duration-500">
                <img src="https://images.unsplash.com/photo-1617196034846-9f1f4c857c3e?auto=format&fit=crop&w=800&q=80"
                    alt="Dessert" class="w-full h-60 object-cover rounded-t-2xl" />
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-white mb-2">Gold Chocolate Soufflé</h3>
                    <p class="text-gray-400 text-sm mb-4">Soufflé cokelat mewah dengan sentuhan edible gold di atasnya.
                    </p>
                    <span class="text-[#d4af37] font-bold text-lg">Rp 300.000</span>
                </div>
            </div>

            <!-- Item -->
            <div
                class="bg-black/40 backdrop-blur-md rounded-2xl shadow-xl overflow-hidden hover:scale-105 transition transform duration-500">
                <img src="https://images.unsplash.com/photo-1589308078059-be1415eab4c3?auto=format&fit=crop&w=800&q=80"
                    alt="Wine" class="w-full h-60 object-cover rounded-t-2xl" />
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-white mb-2">Red Wine Reserve</h3>
                    <p class="text-gray-400 text-sm mb-4">Pilihan wine terbaik dari koleksi eksklusif AURUM.</p>
                    <span class="text-[#d4af37] font-bold text-lg">Rp 1.200.000</span>
                </div>
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
    <script></script>
</body>

</html>
