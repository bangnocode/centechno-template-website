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
                            class="block py-2 px-3 text-white rounded hover:text-[#d4af37] transition">Home</a></li>

                    <li><a href="{{ url('/template-ct/mp/1/menu') }}"
                            class="block py-2 px-3 text-white rounded hover:text-[#d4af37] transition">Menu</a></li>

                    <li><a href="{{ url('/template-ct/mp/1#about') }}"
                            class="block py-2 px-3 text-white rounded hover:text-[#d4af37] transition">Tentang</a></li>

                    <li><a href="{{ url('/template-ct/mp/1/galeri') }}"
                            class="block py-2 px-3 rounded text-[#d4af37] transition">Galeri</a></li>

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

    <section id="gallery" class="py-36 px-6 max-w-7xl mx-auto">
        <!-- Heading -->
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-serif font-bold tracking-wide text-white">
                <span class="text-[#d4af37]">Galeri</span> Centechno
            </h2>
            <div class="w-24 h-[3px] bg-[#d4af37] mx-auto mt-4"></div>
            <p class="mt-6 text-gray-400 text-lg max-w-2xl mx-auto">
                Momen indah, hidangan premium, dan suasana eksklusif yang tercipta di Centechno.
            </p>
        </div>

        <!-- Gallery Grid -->
        <div class="grid gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5">
            <!-- Item -->
            @foreach ($menu_aurum_dining as $menu)
                <!-- Item -->
                <div class="relative group overflow-hidden rounded-2xl shadow-lg">
                    <img src="{{ asset($menu->asset) }}" alt="{{ $menu->nama_menu }}"
                        class="w-full h-64 object-cover transition-transform duration-700 group-hover:scale-110">
                    <div
                        class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                        <span class="text-white font-semibold text-lg tracking-wide">{{ $menu->nama_menu }}</span>
                    </div>
                </div>
            @endforeach

            <!-- Item -->
            <div class="relative group overflow-hidden rounded-2xl shadow-lg">
                <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?auto=format&fit=crop&w=900&q=80"
                    alt="Signature Dish"
                    class="w-full h-64 object-cover transition-transform duration-700 group-hover:scale-110">
                <div
                    class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                    <span class="text-white font-semibold text-lg tracking-wide">Signature Dish</span>
                </div>
            </div>

            <!-- Item -->
            <div class="relative group overflow-hidden rounded-2xl shadow-lg">
                <img src="https://images.unsplash.com/photo-1528605248644-14dd04022da1?auto=format&fit=crop&w=900&q=80"
                    alt="Ambience"
                    class="w-full h-64 object-cover transition-transform duration-700 group-hover:scale-110">
                <div
                    class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                    <span class="text-white font-semibold text-lg tracking-wide">Ambience</span>
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
