<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centechno</title>
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
                <span class="self-center text-2xl font-serif font-bold tracking-wider text-[#d4af37]">CENTECHNO</span>
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

                    <li><a href="{{ url('/template-ct/mp/1') }}"
                            class="block py-2 px-3 rounded text-[#d4af37] transition">Home</a></li>

                    <li><a href="{{ url('/template-ct/mp/1/menu') }}"
                            class="block py-2 px-3 text-white rounded hover:text-[#d4af37] transition">Menu</a></li>

                    <li><a href="{{ url('/template-ct/mp/1#about') }}"
                            class="block py-2 px-3 text-white rounded hover:text-[#d4af37] transition">Tentang</a></li>

                    <li><a href="{{ url('/template-ct/mp/1/galeri') }}"
                            class="block py-2 px-3 text-white rounded hover:text-[#d4af37] transition">Galeri</a></li>

                    <li>
                        <a href="{{ url('/template-ct/mp/1#reservasi') }}"
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
            <!-- Item -->
            @foreach ($menu_aurum_dining as $menu)
                <div
                    class="bg-black/40 backdrop-blur-md rounded-2xl shadow-xl overflow-hidden hover:scale-105 transition transform duration-500">
                    <img src="{{ asset($menu->asset) }}" alt="{{ $menu->nama_menu }}"
                        class="w-full h-60 object-cover rounded-t-2xl" />
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-white mb-2">{{ $menu->nama_menu }}</h3>
                        <p class="text-gray-400 text-sm mb-4">{{ $menu->deskripsi_menu }}</p>
                        <span class="text-[#d4af37] font-bold text-lg">Rp {{ number_format($menu->harga, 0, ',', '.') }}</span>
                    </div>
                </div>
            @endforeach
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
                Tentang <span class="text-[#d4af37]">Centechno</span>
            </h2>
            <div class="w-20 h-[3px] bg-[#d4af37] mb-6"></div>
            <p class="text-lg text-gray-300 leading-relaxed mb-4">
                Sejak <span class="text-[#d4af37] font-semibold">2015</span>, Centechno menghadirkan pengalaman
                kuliner eksklusif dengan sentuhan seni kelas dunia.
            </p>
            <p class="text-lg text-gray-400 leading-relaxed">
                Setiap detail dirancang untuk menciptakan suasana <span class="italic">elegan</span>, <span
                    class="italic">intimate</span>, dan penuh <span
                    class="text-[#d4af37] font-medium">kemewahan</span>.
            </p>
        </div>
    </section>


    <!-- Reservasi CTA -->
    <section id="reservasi" class="py-20 px-6 bg-[#1a1a1a] text-center">
        <div class="max-w-4xl mx-auto">
            <div
                class="bg-gradient-to-br from-[#0f0f0f] to-[#1a1a1a] p-12 rounded-3xl shadow-2xl border border-gray-800">
                <div class="mb-10">
                    <h2 class="text-4xl font-bold text-[#d4af37] mb-4 tracking-wide">Reservasi Eksklusif</h2>
                    <div class="w-24 h-1 bg-gradient-to-r from-[#d4af37] to-yellow-500 mx-auto mb-6"></div>
                    <p class="text-gray-300 text-lg leading-relaxed max-w-2xl mx-auto">
                        Booking meja Anda untuk pengalaman kuliner tak terlupakan di Centechno
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-3xl mx-auto">
                    <!-- WhatsApp -->
                    <a href="https://wa.me/6281288888888" target="_blank"
                        class="group bg-[#25D366] hover:bg-green-500 text-white p-6 rounded-xl font-semibold transition-all duration-300 hover:scale-105 hover:shadow-lg">
                        <div class="flex flex-col items-center space-y-3">
                            <svg class="w-8 h-8 group-hover:scale-110 transition-transform duration-300"
                                fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.485 3.515" />
                            </svg>
                            <span class="text-sm font-medium">WhatsApp</span>
                        </div>
                    </a>

                    <!-- Telepon -->
                    <a href="tel:+6281288888888"
                        class="group bg-[#d4af37] hover:bg-yellow-500 text-black p-6 rounded-xl font-semibold transition-all duration-300 hover:scale-105 hover:shadow-lg">
                        <div class="flex flex-col items-center space-y-3">
                            <svg class="w-8 h-8 group-hover:scale-110 transition-transform duration-300"
                                fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M20.01 15.38c-1.23 0-2.42-.2-3.53-.56a.977.977 0 00-1.01.24l-1.57 1.97c-2.83-1.35-5.48-3.9-6.89-6.83l1.95-1.66c.27-.28.35-.67.24-1.02-.37-1.11-.56-2.3-.56-3.53 0-.54-.45-.99-.99-.99H4.19C3.65 3 3 3.24 3 3.99 3 13.28 10.73 21 20.01 21c.71 0 .99-.63.99-1.18v-3.45c0-.54-.45-.99-.99-.99z" />
                            </svg>
                            <span class="text-sm font-medium">Telepon</span>
                        </div>
                    </a>

                    <!-- Email -->
                    <a href="#"
                        class="group bg-gray-700 hover:bg-gray-600 text-white p-6 rounded-xl font-semibold transition-all duration-300 hover:scale-105 hover:shadow-lg">
                        <div class="flex flex-col items-center space-y-3">
                            <svg class="w-8 h-8 group-hover:scale-110 transition-transform duration-300"
                                fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
                            </svg>
                            <span class="text-sm font-medium">Email</span>
                        </div>
                    </a>
                </div>

                <!-- Additional Info -->
                <div class="mt-10 pt-8 border-t border-gray-800">
                    <div
                        class="flex flex-col md:flex-row justify-center items-center space-y-4 md:space-y-0 md:space-x-8 text-gray-400 text-sm">
                        <div class="flex items-center space-x-2">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" />
                            </svg>
                            <span>Reservasi 24 jam sebelumnya</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z" />
                                <path d="M12.5 7H11v6l5.25 3.15.75-1.23-4.5-2.67z" />
                            </svg>
                            <span>Buka: 18:00 - 24:00</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <x-footer_aurum_dining></x-footer_aurum_dining>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script></script>
</body>

</html>
