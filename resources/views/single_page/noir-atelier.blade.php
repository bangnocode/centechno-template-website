<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Centechno</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script>
        // Dark mode (optional) — mengikuti preferensi sistem, bisa ditoggle via tombol
        if (
            localStorage.getItem("theme") === "dark" ||
            (!("theme" in localStorage) && window.matchMedia("(prefers-color-scheme: dark)").matches)
        ) {
            document.documentElement.classList.add("dark");
        } else {
            document.documentElement.classList.remove("dark");
        }
    </script>
    <style>
        /* Masonry helper untuk gambar: hindari pecah antar kolom */
        .avoid-break {
            break-inside: avoid;
        }

        /* Hilangkan default scrollbar Firefox */
        .scrollbar-modern {
            scrollbar-width: thin;
            scrollbar-color: #888 transparent;
        }

        /* Webkit (Chrome, Edge, Safari) */
        .scrollbar-modern::-webkit-scrollbar {
            height: 8px;
            /* untuk horizontal */
        }

        .scrollbar-modern::-webkit-scrollbar-track {
            background: transparent;
        }

        .scrollbar-modern::-webkit-scrollbar-thumb {
            background: linear-gradient(90deg, #000, #444);
            border-radius: 9999px;
        }

        .scrollbar-modern::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(90deg, #111, #555);
        }
    </style>
</head>

<body class="bg-white text-gray-900 dark:bg-gray-950 dark:text-gray-100 antialiased">
    <!-- NAVBAR -->
    <nav
        class="fixed inset-x-0 top-0 z-50 bg-white/70 dark:bg-gray-900/50 backdrop-blur-xl border-b border-gray-200/60 dark:border-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-16 flex items-center justify-between">
            <a href="#home" class="text-2xl tracking-widest font-extrabold">CENTECHNO</a>
            <div class="hidden md:flex items-center gap-8 text-sm uppercase tracking-wide">
                <a href="#keunggulan" class="hover:opacity-80">Keunggulan</a>
                <a href="#produk" class="hover:opacity-80">Produk</a>
                <a href="#testimoni" class="hover:opacity-80">Testimoni</a>
                <a href="#kontak" class="hover:opacity-80">Kontak</a>
            </div>
        </div>
        <!-- Mobile menu -->
        <div id="mobile-menu" class="hidden px-4 pb-4 md:hidden">
            <a href="#keunggulan" class="block py-2">Keunggulan</a>
            <a href="#produk" class="block py-2">Produk</a>
            <a href="#testimoni" class="block py-2">Testimoni</a>
            <a href="#kontak" class="block py-2">Kontak</a>
        </div>
    </nav>

    <!-- HERO: Split Layout -->
    <section id="home" class="pt-16">
        <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-0 min-h-[80vh]">
            <!-- Left (copy) -->
            <div class="flex items-center bg-white dark:bg-gray-950">
                <div class="px-6 sm:px-10 lg:px-14 py-14">
                    <span class="inline-block text-xs tracking-[0.28em] uppercase text-gray-500 dark:text-gray-400">New
                        Season 2025</span>
                    <h1 class="mt-4 text-4xl sm:text-5xl lg:text-6xl font-extrabold leading-[1.1]">Sculpted <span
                            class="text-gray-400">Silhouettes</span><br />Modern <span
                            class="text-gray-400">Elegance</span></h1>
                    <p class="mt-6 text-base sm:text-lg text-gray-600 dark:text-gray-300 max-w-xl">CENTECHNO
                        menghadirkan koleksi premium yang memadukan craftsmanship tinggi, garis minimalis, dan estetika
                        editorial yang abadi.</p>
                    <div class="mt-8 flex flex-wrap gap-3">
                        <a href="#produk"
                            class="inline-flex items-center justify-center px-6 py-3 rounded-full border border-gray-300 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-800 transition">Belanja
                            Produk</a>
                    </div>
                </div>
            </div>
            <!-- Right (image) -->
            <div class="relative">
                <img src="https://images.unsplash.com/photo-1515378791036-0648a3ef77b2?q=80&w=1600&auto=format&fit=crop"
                    alt="Hero Model" class="absolute inset-0 w-full h-full object-cover" />
                <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
            </div>
        </div>
    </section>

    <!-- KEUNGGULAN: Premium Horizontal Cards -->
    <section id="keunggulan" class="py-20 bg-white dark:bg-gray-950">
        <div class="max-w-7xl mx-auto px-6">

            <div class="flex items-end justify-between mb-10">
                <h2 class="text-3xl sm:text-4xl font-bold tracking-tight">Mengapa Memilih CENTECHNO</h2>
                <span class="text-sm text-gray-500 dark:text-gray-400">Geser →</span>
            </div>

            <!-- scroll container -->
            <div class="flex gap-6 overflow-x-auto snap-x snap-mandatory pb-6 scrollbar-modern">

                <!-- Card -->
                <article
                    class="min-w-[280px] sm:min-w-[340px] snap-start p-8 rounded-3xl 
        bg-white/80 dark:bg-gray-900/80 backdrop-blur 
        border border-gray-200/50 dark:border-gray-800/50
        shadow-lg hover:shadow-xl hover:border-gray-400/60 
        transition duration-300 relative group">

                    <div
                        class="flex items-center justify-center w-12 h-12 rounded-xl bg-black text-white mb-6 group-hover:scale-105 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" stroke="currentColor"
                            stroke-width="2" viewBox="0 0 24 24">
                            <path d="M12 3v18M3 12h18" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Material Premium</h3>
                    <p class="text-gray-600 dark:text-gray-400 leading-relaxed">
                        Kami memilih silk, cashmere, dan full-grain leather dengan standar internasional.
                    </p>
                </article>

                <article
                    class="min-w-[280px] sm:min-w-[340px] snap-start p-8 rounded-3xl 
        bg-white/80 dark:bg-gray-900/80 backdrop-blur 
        border border-gray-200/50 dark:border-gray-800/50
        shadow-lg hover:shadow-xl hover:border-gray-400/60 
        transition duration-300 relative group">

                    <div
                        class="flex items-center justify-center w-12 h-12 rounded-xl bg-black text-white mb-6 group-hover:scale-105 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" stroke="currentColor"
                            stroke-width="2" viewBox="0 0 24 24">
                            <path d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Konstruksi Presisi</h3>
                    <p class="text-gray-600 dark:text-gray-400 leading-relaxed">
                        Cutting & stitching detail menghasilkan siluet tegas dan sempurna.
                    </p>
                </article>

                <article
                    class="min-w-[280px] sm:min-w-[340px] snap-start p-8 rounded-3xl 
        bg-white/80 dark:bg-gray-900/80 backdrop-blur 
        border border-gray-200/50 dark:border-gray-800/50
        shadow-lg hover:shadow-xl hover:border-gray-400/60 
        transition duration-300 relative group">

                    <div
                        class="flex items-center justify-center w-12 h-12 rounded-xl bg-black text-white mb-6 group-hover:scale-105 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" stroke="currentColor"
                            stroke-width="2" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="10" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Desain Timeless</h3>
                    <p class="text-gray-600 dark:text-gray-400 leading-relaxed">
                        Estetika minimalis modern yang tak lekang oleh tren musiman.
                    </p>
                </article>

                <article
                    class="min-w-[280px] sm:min-w-[340px] snap-start p-8 rounded-3xl 
        bg-white/80 dark:bg-gray-900/80 backdrop-blur 
        border border-gray-200/50 dark:border-gray-800/50
        shadow-lg hover:shadow-xl hover:border-gray-400/60 
        transition duration-300 relative group">

                    <div
                        class="flex items-center justify-center w-12 h-12 rounded-xl bg-black text-white mb-6 group-hover:scale-105 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" stroke="currentColor"
                            stroke-width="2" viewBox="0 0 24 24">
                            <path d="M20 21V7a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v14" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Edisi Terbatas</h3>
                    <p class="text-gray-600 dark:text-gray-400 leading-relaxed">
                        Produksi terbatas untuk menjaga eksklusivitas & nilai investasi fashion Anda.
                    </p>
                </article>

            </div>
        </div>
    </section>


    <!-- PRODUK: Cards 3D Hover -->
    <section id="produk" class="py-20 bg-gray-50 dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-3xl sm:text-4xl font-bold text-center mb-12">Produk Unggulan</h2>
            <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-4">
                <!-- product card -->
                <div
                    class="group relative p-6 rounded-2xl bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 shadow transition will-change-transform hover:-translate-y-1 hover:shadow-2xl">
                    <img src="https://images.unsplash.com/photo-1520975922284-0f154a6e8492?q=80&w=800&auto=format&fit=crop"
                        alt="Evening Gown" class="w-full h-56 object-cover rounded-xl mb-5" />
                    <h3 class="text-lg font-semibold">Evening Gown</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">Rp 8.500.000</p>
                    <div class="flex items-center justify-between">
                        <button class="px-5 py-2 rounded-full bg-gray-900 text-white hover:bg-black">Beli</button>
                    </div>
                </div>
                <div
                    class="group relative p-6 rounded-2xl bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 shadow transition hover:-translate-y-1 hover:shadow-2xl">
                    <img src="https://images.unsplash.com/photo-1509631179647-0177331693ae?q=80&w=800&auto=format&fit=crop"
                        alt="Silk Blazer" class="w-full h-56 object-cover rounded-xl mb-5" />
                    <h3 class="text-lg font-semibold">Silk Blazer</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">Rp 6.200.000</p>
                    <div class="flex items-center justify-between">
                        <button class="px-5 py-2 rounded-full bg-gray-900 text-white hover:bg-black">Beli</button>
                    </div>
                </div>
                <div
                    class="group relative p-6 rounded-2xl bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 shadow transition hover:-translate-y-1 hover:shadow-2xl">
                    <img src="https://images.unsplash.com/photo-1512436991641-6745cdb1723f?q=80&w=800&auto=format&fit=crop"
                        alt="Leather Tote" class="w-full h-56 object-cover rounded-xl mb-5" />
                    <h3 class="text-lg font-semibold">Leather Tote</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">Rp 12.000.000</p>
                    <div class="flex items-center justify-between">
                        <button class="px-5 py-2 rounded-full bg-gray-900 text-white hover:bg-black">Beli</button>
                    </div>
                </div>
                <div
                    class="group relative p-6 rounded-2xl bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 shadow transition hover:-translate-y-1 hover:shadow-2xl">
                    <img src="https://images.unsplash.com/photo-1519741497674-611481863552?q=80&w=800&auto=format&fit=crop"
                        alt="Classic Heels" class="w-full h-56 object-cover rounded-xl mb-5" />
                    <h3 class="text-lg font-semibold">Classic Heels</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">Rp 5.400.000</p>
                    <div class="flex items-center justify-between">
                        <button class="px-5 py-2 rounded-full bg-gray-900 text-white hover:bg-black">Beli</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- TESTIMONI: Grid Premium -->
    <section id="testimoni" class="py-20 bg-gray-50 dark:bg-gray-950">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-3xl sm:text-4xl font-bold text-center mb-14">Apa Kata Mereka</h2>

            <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
                <!-- Card 1 -->
                <article class="bg-white dark:bg-gray-900 p-8 rounded-2xl shadow-lg hover:shadow-xl transition">
                    <div class="flex items-center gap-4 mb-6">
                        <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Amelia"
                            class="w-14 h-14 rounded-full object-cover border border-gray-200 dark:border-gray-700">
                        <div>
                            <h3 class="font-semibold text-lg">Amelia</h3>
                            <p class="text-sm text-gray-500 dark:text-gray-400">Jakarta</p>
                        </div>
                    </div>
                    <blockquote class="text-gray-700 dark:text-gray-300 italic leading-relaxed">“CENTECHNO
                        menyatukan kemewahan dan kenyamanan yang jarang saya temukan. Setiap potongan terasa istimewa.”
                    </blockquote>
                </article>

                <!-- Card 2 -->
                <article class="bg-white dark:bg-gray-900 p-8 rounded-2xl shadow-lg hover:shadow-xl transition">
                    <div class="flex items-center gap-4 mb-6">
                        <img src="https://randomuser.me/api/portraits/women/45.jpg" alt="Nadine"
                            class="w-14 h-14 rounded-full object-cover border border-gray-200 dark:border-gray-700">
                        <div>
                            <h3 class="font-semibold text-lg">Nadine</h3>
                            <p class="text-sm text-gray-500 dark:text-gray-400">Surabaya</p>
                        </div>
                    </div>
                    <blockquote class="text-gray-700 dark:text-gray-300 italic leading-relaxed">“Detail konstruksinya
                        rapi sekali. Siluetnya membentuk tubuh dengan indah.”</blockquote>
                </article>

                <!-- Card 3 -->
                <article class="bg-white dark:bg-gray-900 p-8 rounded-2xl shadow-lg hover:shadow-xl transition">
                    <div class="flex items-center gap-4 mb-6">
                        <img src="https://randomuser.me/api/portraits/women/12.jpg" alt="Clara"
                            class="w-14 h-14 rounded-full object-cover border border-gray-200 dark:border-gray-700">
                        <div>
                            <h3 class="font-semibold text-lg">Clara</h3>
                            <p class="text-sm text-gray-500 dark:text-gray-400">Bandung</p>
                        </div>
                    </div>
                    <blockquote class="text-gray-700 dark:text-gray-300 italic leading-relaxed">“Desainnya timeless.
                        Saya bisa memakainya bertahun-tahun tanpa terlihat ketinggalan.”</blockquote>
                </article>
            </div>
        </div>
    </section>


    <!-- CTA Full Screen -->
    <section id="kontak" class="relative py-28 text-center text-white">
        <img src="https://images.unsplash.com/photo-1526045478516-99145907023c?q=80&w=1600&auto=format&fit=crop"
            alt="CTA" class="absolute inset-0 w-full h-full object-cover" />
        <div class="absolute inset-0 bg-black/60"></div>
        <div class="relative z-10 max-w-3xl mx-auto px-6">
            <h2 class="text-4xl sm:text-5xl font-extrabold leading-tight">Elevate Your Wardrobe</h2>
            <p class="mt-4 text-lg text-gray-200">Konsultasikan kebutuhan styling Anda dengan fashion advisor kami.</p>
            <div class="mt-8 flex flex-wrap items-center justify-center gap-3">
                <a href="mailto:contact@centechno.com"
                    class="px-8 py-3 rounded-full bg-white text-black font-semibold hover:bg-gray-100">Hubungi Kami</a>
                <a href="#produk" class="px-8 py-3 rounded-full border border-white/70 hover:bg-white/10">Lihat
                    Produk</a>
            </div>
        </div>
    </section>

    <!-- FOOTER Minimal -->
    <footer class="bg-black text-gray-400">
        <div class="max-w-7xl mx-auto px-6 py-12 grid gap-8 md:grid-cols-4">
            <div>
                <h3 class="text-white font-semibold mb-3 tracking-wider">CENTECHNO</h3>
                <p class="text-sm">Estetika editorial, konstruksi presisi, dan material premium.</p>
            </div>
            <div>
                <h4 class="text-white font-semibold mb-3">Menu</h4>
                <ul class="space-y-2 text-sm">
                    <li><a class="hover:text-white" href="#koleksi">Koleksi</a></li>
                    <li><a class="hover:text-white" href="#keunggulan">Keunggulan</a></li>
                    <li><a class="hover:text-white" href="#produk">Produk</a></li>
                    <li><a class="hover:text-white" href="#kontak">Kontak</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-white font-semibold mb-3">Kontak</h4>
                <ul class="space-y-2 text-sm">
                    <li>Email: contact@centechno.com</li>
                    <li>Telp: +62 812 3456 7890</li>
                    <li>Jakarta, Indonesia</li>
                </ul>
            </div>
            <div>
                <h4 class="text-white font-semibold mb-3">Ikuti Kami</h4>
                <div class="flex gap-4 text-sm">
                    <a href="#" class="hover:text-white">Instagram</a>
                    <a href="#" class="hover:text-white">Facebook</a>
                    <a href="#" class="hover:text-white">TikTok</a>
                </div>
            </div>
        </div>
        <div class="border-t border-white/10">
            <p class="max-w-7xl mx-auto px-6 py-6 text-xs tracking-wide text-center">© 2025 CENTECHNO. All rights
                reserved.</p>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script>
        // Theme toggle logic
        const themeToggleBtn = document.getElementById('theme-toggle');
        const darkIcon = document.getElementById('theme-toggle-dark-icon');
        const lightIcon = document.getElementById('theme-toggle-light-icon');

        function updateIcons() {
            if (document.documentElement.classList.contains('dark')) {
                lightIcon.classList.remove('hidden');
                darkIcon.classList.add('hidden');
            } else {
                darkIcon.classList.remove('hidden');
                lightIcon.classList.add('hidden');
            }
        }
        updateIcons();

        themeToggleBtn.addEventListener('click', () => {
            document.documentElement.classList.toggle('dark');
            localStorage.setItem('theme', document.documentElement.classList.contains('dark') ? 'dark' : 'light');
            updateIcons();
        });
    </script>
</body>

</html>
