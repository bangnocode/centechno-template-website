<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centechno</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
</head>

<body class="bg-neutral-950 text-white font-sans">

    <!-- Navbar with Flowbite -->
    <nav class="bg-black/90 shadow-md sticky top-0 z-50 backdrop-blur border-b border-neutral-800">
        <div class="max-w-7xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="#home" class="flex items-center">
                <span
                    class="self-center text-lg sm:text-xl md:text-2xl font-extrabold whitespace-nowrap text-red-600 tracking-wide">Centechno</span>
            </a>
            <button data-collapse-toggle="navbar-default" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-gray-400 rounded-lg md:hidden hover:bg-neutral-800 focus:outline-none focus:ring-2 focus:ring-red-600"
                aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                    </path>
                </svg>
            </button>
            <div class="hidden w-full md:flex md:w-auto" id="navbar-default">
                <ul
                    class="flex flex-col p-4 mt-4 border border-neutral-800 rounded-lg bg-black/95 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-transparent uppercase text-xs sm:text-sm font-semibold">
                    <li><a href="#home" class="block py-2 px-3 hover:text-red-500">Home</a></li>
                    <li><a href="#about" class="block py-2 px-3 hover:text-red-500">Tentang</a></li>
                    <li><a href="#services" class="block py-2 px-3 hover:text-red-500">Layanan</a></li>
                    <li><a href="#products" class="block py-2 px-3 hover:text-red-500">Produk</a></li>
                    <li><a href="#gallery" class="block py-2 px-3 hover:text-red-500">Galeri</a></li>
                    <li><a href="#testimoni" class="block py-2 px-3 hover:text-red-500">Testimoni</a></li>
                    <li><a href="#promo" class="block py-2 px-3 hover:text-red-500">Promo</a></li>
                    <li><a href="#contact" class="block py-2 px-3 hover:text-red-500">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero -->
    <section id="home" class="relative min-h-screen flex items-center justify-center bg-cover bg-center"
        style="background-image: url('https://picsum.photos/400/300?random=4')">
        <div class="absolute inset-0 bg-gradient-to-b from-black/80 via-black/60 to-black/80"></div>
        <div class="relative text-center z-10 max-w-2xl px-4 animate-fadeIn">
            <h2 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-red-500 leading-snug">Servis Cepat, Harga
                Jelas,<br />Motor Sehat</h2>
            <p class="mt-3 text-sm sm:text-base md:text-lg text-gray-300">Percayakan motor Anda kepada mekanik
                profesional kami</p>
            <a href="#contact"
                class="inline-block mt-5 bg-red-600 hover:bg-red-700 text-white font-semibold px-5 sm:px-7 py-2.5 rounded-full shadow-lg transition text-sm sm:text-base">Booking
                Sekarang</a>
        </div>
    </section>

    <!-- Tentang Kami -->
    <section id="about" class="py-16 px-4 bg-neutral-900">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-red-500 mb-5">Tentang Kami</h2>
            <p class="text-gray-300 leading-relaxed text-sm sm:text-base md:text-lg">Sejak 2010, Centechno
                hadir memberikan solusi servis motor harian, modifikasi, dan penjualan sparepart. Dengan tim mekanik
                berpengalaman dan fasilitas modern, kami berkomitmen menjaga motor Anda tetap prima dan aman di jalan.
            </p>
        </div>
    </section>

    <!-- Layanan -->
    <section id="services" class="py-16 px-4 bg-neutral-950">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-center text-red-500 mb-10">Layanan Kami</h2>
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-neutral-900 p-6 rounded-xl shadow-md hover:shadow-red-600/20 transition">
                    <h3 class="text-lg font-semibold mb-2">Servis Ringan</h3>
                    <p class="text-gray-400 text-sm">Pengecekan rutin, ganti oli, dan perawatan ringan untuk motor Anda.
                    </p>
                </div>
                <div class="bg-neutral-900 p-6 rounded-xl shadow-md hover:shadow-red-600/20 transition">
                    <h3 class="text-lg font-semibold mb-2">Servis Besar</h3>
                    <p class="text-gray-400 text-sm">Overhaul mesin, servis berkala lengkap, dan perbaikan menyeluruh.
                    </p>
                </div>
                <div class="bg-neutral-900 p-6 rounded-xl shadow-md hover:shadow-red-600/20 transition">
                    <h3 class="text-lg font-semibold mb-2">Modifikasi</h3>
                    <p class="text-gray-400 text-sm">Kustomisasi motor sesuai gaya Anda dengan sparepart dan aksesoris
                        berkualitas.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Produk -->
    <section id="products" class="py-16 px-4 bg-neutral-900">
        <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-center text-red-500 mb-10">Produk</h2>
        <div class="max-w-4xl mx-auto text-center text-gray-300">
            <p class="text-sm sm:text-base md:text-lg">Kami menyediakan berbagai sparepart dan aksesoris motor original
                dan aftermarket. (Galeri produk bisa ditampilkan di sini).</p>
            <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-6 max-w-5xl mx-auto mt-8">
                <div class="bg-neutral-900 p-4 rounded-xl shadow-md">
                    <img src="https://picsum.photos/400/300?random=1" alt="Produk 1" class="rounded-lg mb-3">
                    <h3 class="font-semibold">Sparepart 1</h3>
                    <p class="text-gray-400 text-sm">Deskripsi singkat produk.</p>
                </div>
                <div class="bg-neutral-900 p-4 rounded-xl shadow-md">
                    <img src="https://picsum.photos/400/300?random=2" alt="Produk 2" class="rounded-lg mb-3">
                    <h3 class="font-semibold">Sparepart 2</h3>
                    <p class="text-gray-400 text-sm">Deskripsi singkat produk.</p>
                </div>
                <div class="bg-neutral-900 p-4 rounded-xl shadow-md">
                    <img src="https://picsum.photos/400/300?random=3" alt="Produk 3" class="rounded-lg mb-3">
                    <h3 class="font-semibold">Sparepart 3</h3>
                    <p class="text-gray-400 text-sm">Deskripsi singkat produk.</p>
                </div>
            </div>

        </div>
    </section>

    <!-- Galeri -->
    <section id="gallery" class="py-16 px-4 bg-neutral-950">
        <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-center text-red-500 mb-10">Galeri</h2>
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4 max-w-6xl mx-auto">
            <img src="https://picsum.photos/400/300?random=1" class="rounded-lg shadow-md" alt="Foto 1">
            <img src="https://picsum.photos/400/300?random=2" class="rounded-lg shadow-md" alt="Foto 2">
            <img src="https://picsum.photos/400/300?random=3" class="rounded-lg shadow-md" alt="Foto 3">
            <img src="https://picsum.photos/400/300?random=4" class="rounded-lg shadow-md" alt="Foto 4">
            <img src="https://picsum.photos/400/300?random=5" class="rounded-lg shadow-md" alt="Foto 5">
            <img src="https://picsum.photos/400/300?random=6" class="rounded-lg shadow-md" alt="Foto 6">
        </div>

    </section>

    <!-- Testimoni -->
    <section id="testimoni" class="py-16 px-4 bg-neutral-900">
        <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-center text-red-500 mb-10">Testimoni</h2>
        <div class="max-w-4xl mx-auto grid gap-4 sm:grid-cols-2">
            <div class="bg-neutral-800 p-5 rounded-xl shadow">
                <p class="italic text-gray-300 text-sm">“Servis cepat dan mekaniknya ramah, harga juga transparan.
                    Rekomendasi banget!”</p>
                <span class="block mt-3 text-red-400 font-semibold text-xs">– Andi, pelanggan</span>
            </div>
            <div class="bg-neutral-800 p-5 rounded-xl shadow">
                <p class="italic text-gray-300 text-sm">“Motor saya jadi lebih nyaman dipakai setelah tune up di sini.
                    Terbaik!”</p>
                <span class="block mt-3 text-red-400 font-semibold text-xs">– Budi, pelanggan</span>
            </div>
        </div>
    </section>

    <!-- Promo -->
    <section id="promo" class="py-16 px-4 bg-neutral-950">
        <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-center text-red-500 mb-10">Promo</h2>
        <div class="max-w-3xl mx-auto text-center text-gray-300">
            <p class="text-sm sm:text-base md:text-lg">Diskon <span class="font-bold text-red-400">20%</span> untuk
                servis besar setiap akhir bulan! Segera booking sebelum kuota habis.</p>
        </div>
    </section>

    <!-- Kontak -->
<section id="contact" class="py-16 px-4 bg-neutral-900 relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-br from-red-500/10 to-transparent"></div>
        <div class="absolute top-10 left-10 w-20 h-20 bg-red-500/10 rounded-full blur-xl"></div>
        <div class="absolute bottom-20 right-20 w-32 h-32 bg-red-500/10 rounded-full blur-2xl"></div>
    </div>

    <div class="relative z-10">
        <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-center text-red-500 mb-10 relative">
            Kontak & Lokasi
            <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 w-20 h-1 bg-gradient-to-r from-red-500 to-red-600 rounded-full"></div>
        </h2>
        
        <div class="max-w-6xl mx-auto grid gap-8 md:grid-cols-2 items-start">
            <!-- Grid Kontak -->
            <div class="grid gap-6 sm:grid-cols-2">
                <!-- WhatsApp -->
                <div class="bg-neutral-800 p-6 rounded-xl shadow-lg border border-neutral-700 text-center hover:shadow-red-600/20 hover:border-red-500/30 transition-all duration-300 transform hover:-translate-y-1 group">
                    <div class="w-16 h-16 mx-auto mb-4 bg-green-500/20 rounded-full flex items-center justify-center group-hover:bg-green-500/30 transition-colors">
                        <svg class="w-8 h-8 text-green-400" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.890-5.335 11.893-11.893A11.821 11.821 0 0020.465 3.516"/>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-white mb-2">WhatsApp</h3>
                    <p class="text-gray-400 text-sm mb-3">0812-3456-7890</p>
                    <a href="https://wa.me/6281234567890" target="_blank"
                        class="inline-block bg-gradient-to-r from-red-600 to-red-700 hover:from-red-700 hover:to-red-800 text-white px-6 py-2 rounded-full text-xs font-medium transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-red-600/30">
                        Chat Sekarang
                    </a>
                </div>

                <!-- Telepon -->
                <div class="bg-neutral-800 p-6 rounded-xl shadow-lg border border-neutral-700 text-center hover:shadow-red-600/20 hover:border-red-500/30 transition-all duration-300 transform hover:-translate-y-1 group">
                    <div class="w-16 h-16 mx-auto mb-4 bg-blue-500/20 rounded-full flex items-center justify-center group-hover:bg-blue-500/30 transition-colors">
                        <svg class="w-8 h-8 text-blue-400" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-white mb-2">Telepon</h3>
                    <p class="text-gray-400 text-sm mb-3">(021) 123-456</p>
                    <a href="tel:+6281234567890"
                        class="inline-block bg-gradient-to-r from-red-600 to-red-700 hover:from-red-700 hover:to-red-800 text-white px-6 py-2 rounded-full text-xs font-medium transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-red-600/30">
                        Panggil
                    </a>
                </div>

                <!-- Email -->
                <div class="bg-neutral-800 p-6 rounded-xl shadow-lg border border-neutral-700 text-center hover:shadow-red-600/20 hover:border-red-500/30 transition-all duration-300 transform hover:-translate-y-1 group">
                    <div class="w-16 h-16 mx-auto mb-4 bg-purple-500/20 rounded-full flex items-center justify-center group-hover:bg-purple-500/30 transition-colors">
                        <svg class="w-8 h-8 text-purple-400" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-white mb-2">Email</h3>
                    <p class="text-gray-400 text-sm mb-3">info@centechno.com</p>
                    <a href="mailto:info@centechno.com"
                        class="inline-block bg-gradient-to-r from-red-600 to-red-700 hover:from-red-700 hover:to-red-800 text-white px-6 py-2 rounded-full text-xs font-medium transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-red-600/30">
                        Kirim Email
                    </a>
                </div>

                <!-- Instagram -->
                <div class="bg-neutral-800 p-6 rounded-xl shadow-lg border border-neutral-700 text-center hover:shadow-red-600/20 hover:border-red-500/30 transition-all duration-300 transform hover:-translate-y-1 group">
                    <div class="w-16 h-16 mx-auto mb-4 bg-pink-500/20 rounded-full flex items-center justify-center group-hover:bg-pink-500/30 transition-colors">
                        <svg class="w-8 h-8 text-pink-400" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4s1.791-4 4-4 4 1.79 4 4-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-white mb-2">Instagram</h3>
                    <p class="text-gray-400 text-sm mb-3">@centechno</p>
                    <a href="https://instagram.com/centechno" target="_blank"
                        class="inline-block bg-gradient-to-r from-red-600 to-red-700 hover:from-red-700 hover:to-red-800 text-white px-6 py-2 rounded-full text-xs font-medium transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-red-600/30">
                        Lihat IG
                    </a>
                </div>
            </div>

            <!-- Map -->
            <div class="relative">
                <div class="relative overflow-hidden rounded-xl shadow-2xl border border-neutral-700 group">
                    <div class="absolute inset-0 bg-gradient-to-t from-neutral-900/20 to-transparent z-10 pointer-events-none"></div>
                    <iframe class="w-full h-64 md:h-80 transition-transform duration-300 group-hover:scale-105" 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.521260322283!2d106.8195613507864!3d-6.194741395493371!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5390917b759%3A0x6b45e67356080477!2sBekasi%2C%20West%20Java!5e0!3m2!1sen!2sid!4v1609459821123!5m2!1sen!2sid"
                            allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="mt-6 p-4 bg-neutral-800 rounded-xl border border-neutral-700 shadow-lg">
                    <div class="flex items-start space-x-3">
                        <div class="w-8 h-8 bg-red-500/20 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                            <svg class="w-4 h-4 text-red-400" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-white mb-1">Alamat Centechno</h4>
                            <p class="text-gray-300 text-sm sm:text-base leading-relaxed">
                                Jl. Raya Otomotif No. 123, Jakarta
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



    <!-- Footer -->
    <footer class="bg-black/90 py-6 text-center text-gray-400 text-xs sm:text-sm">
        <p>© 2025 Centechno | All Rights Reserved</p>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</body>

</html>