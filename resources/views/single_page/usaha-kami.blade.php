<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description"
        content="Profil usaha modern: katalog produk, tentang kami, testimoni, dan kontak. Desain premium, simple, profesional, dan mobile-first." />
    <meta name="theme-color" content="#0f172a" />
    <title>Centechno</title>

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: { inter: ['Inter', 'ui-sans-serif', 'system-ui', 'sans-serif'] },
                    colors: {
                        brand: {
                            50: '#eef2ff', 100: '#e0e7ff', 200: '#c7d2fe', 300: '#a5b4fc', 400: '#818cf8',
                            500: '#6366f1', 600: '#4f46e5', 700: '#4338ca', 800: '#3730a3', 900: '#312e81'
                        }
                    },
                    boxShadow: {
                        soft: '0 10px 30px rgba(2,6,23,0.08)'
                    }
                }
            }
        }
    </script>

    <!-- Flowbite -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
</head>

<body class="font-inter text-slate-800 bg-slate-50 selection:bg-brand-200 selection:text-brand-900">

    <!-- ===== Navbar ===== -->
    <nav id="navbar" class="fixed inset-x-0 top-0 z-50 transition-colors duration-300 border-b border-transparent">
        <div class="mx-auto max-w-7xl px-4">
            <div class="flex h-16 items-center justify-between">
                <a href="#home" class="flex items-center space-x-3">
                    <span
                        class="inline-flex h-9 w-9 items-center justify-center rounded-xl bg-white/10 ring-1 ring-white/20 backdrop-blur text-white">
                        <!-- Logo mark -->
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5" fill="currentColor">
                            <path
                                d="M12 2a10 10 0 1 0 10 10A10.011 10.011 0 0 0 12 2Zm0 4.5 5 3-5 3-5-3ZM7 12.5l5 3 5-3v3l-5 3-5-3Z" />
                        </svg>
                    </span>
                    <span class="text-lg font-semibold tracking-tight text-white" id="brand-name">Centechno</span>
                </a>

                <div class="hidden md:flex items-center space-x-8">
                    <a href="#produk" class="text-slate-200 hover:text-white">Produk</a>
                    <a href="#about" class="text-slate-200 hover:text-white">Tentang</a>
                    <a href="#testimoni" class="text-slate-200 hover:text-white">Testimoni</a>
                    <a href="#kontak" class="text-slate-200 hover:text-white">Kontak</a>
                    <a href="#kontak"
                        class="inline-flex items-center gap-2 rounded-lg bg-white/10 px-4 py-2 text-white ring-1 ring-white/20 hover:bg-white/20">
                        <!-- phone icon -->
                        <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M6.62 10.79a15.053 15.053 0 0 0 6.59 6.59l2.2-2.2a1 1 0 0 1 1.01-.24c1.12.37 2.33.57 3.58.57a1 1 0 0 1 1 1V20a1 1 0 0 1-1 1C10.85 21 3 13.15 3 3a1 1 0 0 1 1-1h3.5a1 1 0 0 1 1 1c0 1.25.2 2.46.57 3.58a1 1 0 0 1-.25 1.01l-2.2 2.2Z" />
                        </svg>
                        Hubungi
                    </a>
                </div>

                <button data-collapse-toggle="mobile-menu" type="button"
                    class="inline-flex md:hidden items-center justify-center rounded-lg p-2 text-white hover:bg-white/10 focus:outline-none"
                    aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Buka menu</span>
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden backdrop-blur bg-slate-900/80 border-t border-white/10">
            <div class="mx-auto max-w-7xl px-4 py-4 space-y-3">
                <a href="#produk" class="block rounded-lg px-3 py-2 text-slate-200 hover:bg-white/10">Produk</a>
                <a href="#about" class="block rounded-lg px-3 py-2 text-slate-200 hover:bg-white/10">Tentang</a>
                <a href="#testimoni" class="block rounded-lg px-3 py-2 text-slate-200 hover:bg-white/10">Testimoni</a>
                <a href="#kontak" class="block rounded-lg px-3 py-2 text-slate-200 hover:bg-white/10">Kontak</a>
                <a href="#kontak"
                    class="block rounded-lg px-3 py-2 text-white bg-brand-600 hover:bg-brand-700 text-center">Hubungi
                    Kami</a>
            </div>
        </div>
    </nav>

    <!-- ===== Hero ===== -->
    <section id="home"
        class="relative min-h-[92vh] flex items-center overflow-hidden bg-gradient-to-br from-slate-900 via-slate-800 to-slate-900 text-white">
        <!-- Decorative blobs -->
        <div class="pointer-events-none absolute inset-0 -z-10">
            <div class="absolute -top-24 -left-24 h-72 w-72 rounded-full bg-brand-600/30 blur-3xl"></div>
            <div class="absolute bottom-[-4rem] right-[-4rem] h-96 w-96 rounded-full bg-fuchsia-600/20 blur-3xl"></div>
        </div>

        <div class="mx-auto max-w-7xl px-4 py-28 grid md:grid-cols-2 gap-10 items-center">
            <div>
                <span
                    class="inline-flex items-center gap-2 rounded-full bg-white/10 px-3 py-1 text-xs font-medium ring-1 ring-white/20">
                    <span class="inline-block h-2 w-2 rounded-full bg-emerald-400"></span>
                    Siap melayani seluruh Indonesia
                </span>
                <h1 class="mt-4 text-4xl md:text-6xl font-extrabold leading-tight tracking-tight">
                    Produk Premium untuk <span class="text-brand-300">Brand</span> Anda
                </h1>
                <p class="mt-4 text-slate-300 text-lg md:text-xl">Kami membantu bisnis Anda tampil profesional melalui
                    rangkaian produk berkualitas dan layanan yang cepat serta ramah.</p>
                <div class="mt-8 flex flex-col sm:flex-row gap-3">
                    <a href="#produk"
                        class="inline-flex items-center justify-center rounded-lg bg-brand-600 px-6 py-3 font-semibold text-white hover:bg-brand-700 shadow-soft">Lihat
                        Produk</a>
                    <a href="#kontak"
                        class="inline-flex items-center justify-center rounded-lg bg-white/10 px-6 py-3 font-semibold text-white ring-1 ring-white/20 hover:bg-white/20">Hubungi
                        Kami</a>
                </div>
                <div class="mt-8 flex items-center gap-6 text-sm text-slate-300">
                    <div class="flex items-center gap-2">
                        <svg class="h-5 w-5 text-yellow-400" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M12 17.27 18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                        </svg>
                        4.9/5 rating pelanggan
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="h-5 w-5 text-emerald-400" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M9 16.2 4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4z" />
                        </svg>
                        Garansi kepuasan
                    </div>
                </div>
            </div>
            <div class="relative">
                <div
                    class="relative mx-auto w-full max-w-md rounded-2xl bg-white/5 p-3 ring-1 ring-white/10 backdrop-blur">
                    <img src="https://images.unsplash.com/photo-1557683316-973673baf926?q=80&w=1200&auto=format&fit=crop"
                        alt="Mockup" class="h-72 w-full rounded-xl object-cover">
                </div>
            </div>
        </div>
    </section>

    <!-- ===== Produk ===== -->
    <section id="produk" class="py-20">
        <div class="mx-auto max-w-7xl px-4">
            <div class="mb-12 flex items-end justify-between gap-6">
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold tracking-tight text-slate-900">Produk Unggulan</h2>
                    <p class="mt-2 text-slate-600">Kualitas premium dengan harga kompetitif. Semua produk tersedia ready
                        stock.</p>
                </div>
                <a href="#kontak"
                    class="hidden md:inline-flex items-center gap-2 rounded-lg bg-slate-900 px-4 py-2 text-white hover:bg-slate-800">
                    Konsultasi Gratis
                    <svg class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 4l1.41 1.41L8.83 10H20v2H8.83l4.58 4.59L12 18l-8-8z" />
                    </svg>
                </a>
            </div>

            <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                <!-- Card Item -->
                <article
                    class="group overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-soft transition hover:-translate-y-1">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?q=80&w=1200&auto=format&fit=crop"
                            alt="Produk A" class="h-52 w-full object-cover">
                        <span
                            class="absolute left-3 top-3 rounded-full bg-emerald-600 px-3 py-1 text-xs font-medium text-white">Best
                            Seller</span>
                    </div>
                    <div class="p-5">
                        <h3 class="text-lg font-semibold">Produk A — Paket Brand Kit</h3>
                        <p class="mt-1 text-sm text-slate-600">Paket lengkap untuk identitas brand: logo, kartu nama,
                            dan panduan singkat.</p>
                        <div class="mt-4 flex items-center justify-between">
                            <div class="text-brand-700 font-bold">Rp 1.500.000</div>
                            <div class="flex gap-2">
                                <a href="https://wa.me/628123456789" target="_blank"
                                    class="rounded-lg bg-brand-600 px-3 py-2 text-sm font-medium text-white hover:bg-brand-700">Pesan</a>
                                <a href="#kontak"
                                    class="rounded-lg bg-slate-100 px-3 py-2 text-sm font-medium text-slate-700 hover:bg-slate-200">Detail</a>
                            </div>
                        </div>
                    </div>
                </article>

                <article
                    class="group overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-soft transition hover:-translate-y-1">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1512436991641-6745cdb1723f?q=80&w=1200&auto=format&fit=crop"
                            alt="Produk B" class="h-52 w-full object-cover">
                        <span
                            class="absolute left-3 top-3 rounded-full bg-fuchsia-600 px-3 py-1 text-xs font-medium text-white">Baru</span>
                    </div>
                    <div class="p-5">
                        <h3 class="text-lg font-semibold">Produk B — Kemasan Premium</h3>
                        <p class="mt-1 text-sm text-slate-600">Desain kemasan eksklusif yang meningkatkan nilai jual
                            produk Anda.</p>
                        <div class="mt-4 flex items-center justify-between">
                            <div class="text-brand-700 font-bold">Rp 850.000</div>
                            <div class="flex gap-2">
                                <a href="https://wa.me/628123456789" target="_blank"
                                    class="rounded-lg bg-brand-600 px-3 py-2 text-sm font-medium text-white hover:bg-brand-700">Pesan</a>
                                <a href="#kontak"
                                    class="rounded-lg bg-slate-100 px-3 py-2 text-sm font-medium text-slate-700 hover:bg-slate-200">Detail</a>
                            </div>
                        </div>
                    </div>
                </article>

                <article
                    class="group overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-soft transition hover:-translate-y-1">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1526947425960-945c6e72858f?q=80&w=1200&auto=format&fit=crop"
                            alt="Produk C" class="h-52 w-full object-cover">
                    </div>
                    <div class="p-5">
                        <h3 class="text-lg font-semibold">Produk C — Materi Promosi</h3>
                        <p class="mt-1 text-sm text-slate-600">Bundle materi promosi (poster, brosur, konten sosial
                            media) siap pakai.</p>
                        <div class="mt-4 flex items-center justify-between">
                            <div class="text-brand-700 font-bold">Rp 1.200.000</div>
                            <div class="flex gap-2">
                                <a href="https://wa.me/628123456789" target="_blank"
                                    class="rounded-lg bg-brand-600 px-3 py-2 text-sm font-medium text-white hover:bg-brand-700">Pesan</a>
                                <a href="#kontak"
                                    class="rounded-lg bg-slate-100 px-3 py-2 text-sm font-medium text-slate-700 hover:bg-slate-200">Detail</a>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- ===== Tentang Kami ===== -->
    <section id="about" class="bg-white py-20">
        <div class="mx-auto max-w-7xl px-4 grid items-center gap-12 md:grid-cols-2">
            <div class="order-2 md:order-1">
                <h2 class="text-3xl md:text-4xl font-bold tracking-tight text-slate-900">Tentang Kami</h2>
                <p class="mt-4 text-slate-700">Berdiri sejak 2015, kami berkomitmen menghadirkan produk dan layanan yang
                    membantu bisnis bertumbuh. Tim kami terdiri dari profesional berpengalaman dalam branding dan
                    produksi.</p>
                <ul class="mt-6 space-y-3 text-slate-700">
                    <li class="flex items-start gap-3"><svg class="mt-1 h-5 w-5 text-emerald-600" viewBox="0 0 24 24"
                            fill="currentColor">
                            <path d="M9 16.2 4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4z" />
                        </svg> Fokus pada kualitas & ketepatan waktu</li>
                    <li class="flex items-start gap-3"><svg class="mt-1 h-5 w-5 text-emerald-600" viewBox="0 0 24 24"
                            fill="currentColor">
                            <path d="M9 16.2 4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4z" />
                        </svg> Dukungan purna jual responsif</li>
                    <li class="flex items-start gap-3"><svg class="mt-1 h-5 w-5 text-emerald-600" viewBox="0 0 24 24"
                            fill="currentColor">
                            <path d="M9 16.2 4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4z" />
                        </svg> Layanan pengiriman nasional</li>
                </ul>
                <div class="mt-8 grid grid-cols-3 gap-4 text-center">
                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-4">
                        <div class="text-2xl font-extrabold text-slate-900">10+</div>
                        <div class="text-xs text-slate-600">Tahun pengalaman</div>
                    </div>
                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-4">
                        <div class="text-2xl font-extrabold text-slate-900">500+</div>
                        <div class="text-xs text-slate-600">Klien puas</div>
                    </div>
                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-4">
                        <div class="text-2xl font-extrabold text-slate-900">1–3 hari</div>
                        <div class="text-xs text-slate-600">Waktu proses</div>
                    </div>
                </div>
            </div>
            <div class="order-1 md:order-2">
                <div class="relative mx-auto w-full max-w-lg">
                    <div
                        class="absolute -inset-4 -z-10 rounded-3xl bg-gradient-to-tr from-brand-300/30 to-fuchsia-300/30 blur-2xl">
                    </div>
                    <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?q=80&w=1200&auto=format&fit=crop"
                        alt="Tim Kami" class="rounded-3xl shadow-soft ring-1 ring-slate-200">
                </div>
            </div>
        </div>
    </section>

    <!-- ===== Testimoni (Carousel) ===== -->
    <section id="testimoni" class="bg-slate-50 py-20">
        <div class="mx-auto max-w-7xl px-4">
            <div class="mb-12 text-center">
                <h2 class="text-3xl md:text-4xl font-bold tracking-tight text-slate-900">Apa Kata Mereka</h2>
                <p class="mt-2 text-slate-600">Testimoni dari pelanggan kami di berbagai industri</p>
            </div>

            <div class="grid grid-cols-1 gap-5 md:grid-cols-3">
                <div class="max-w-md mx-auto">
                    <div class="bg-white shadow-lg rounded-2xl p-6 border border-gray-100">
                        <div class="flex items-center mb-4">
                            <img class="w-12 h-12 rounded-full border-2 border-brand-500"
                                src="https://randomuser.me/api/portraits/men/32.jpg" alt="User Photo">
                            <div class="ml-3">
                                <h3 class="text-lg font-semibold text-gray-800">Andi Pratama</h3>
                                <p class="text-sm text-gray-500">Customer</p>
                            </div>
                        </div>

                        <!-- Rating -->
                        <div class="flex items-center mb-3">
                            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.97a1 1 0 00.95.69h4.178c.969 0 1.371 1.24.588 1.81l-3.385 2.46a1 1 0 00-.364 1.118l1.287 3.97c.3.921-.755 1.688-1.54 1.118l-3.385-2.46a1 1 0 00-1.175 0l-3.385 2.46c-.784.57-1.838-.197-1.539-1.118l1.286-3.97a1 1 0 00-.364-1.118L2.045 9.397c-.783-.57-.38-1.81.588-1.81h4.178a1 1 0 00.95-.69l1.288-3.97z" />
                            </svg>
                            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.97a1 1 0 00.95.69h4.178c.969 0 1.371 1.24.588 1.81l-3.385 2.46a1 1 0 00-.364 1.118l1.287 3.97c.3.921-.755 1.688-1.54 1.118l-3.385-2.46a1 1 0 00-1.175 0l-3.385 2.46c-.784.57-1.838-.197-1.539-1.118l1.286-3.97a1 1 0 00-.364-1.118L2.045 9.397c-.783-.57-.38-1.81.588-1.81h4.178a1 1 0 00.95-.69l1.288-3.97z" />
                            </svg>
                            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.97a1 1 0 00.95.69h4.178c.969 0 1.371 1.24.588 1.81l-3.385 2.46a1 1 0 00-.364 1.118l1.287 3.97c.3.921-.755 1.688-1.54 1.118l-3.385-2.46a1 1 0 00-1.175 0l-3.385 2.46c-.784.57-1.838-.197-1.539-1.118l1.286-3.97a1 1 0 00-.364-1.118L2.045 9.397c-.783-.57-.38-1.81.588-1.81h4.178a1 1 0 00.95-.69l1.288-3.97z" />
                            </svg>
                            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.97a1 1 0 00.95.69h4.178c.969 0 1.371 1.24.588 1.81l-3.385 2.46a1 1 0 00-.364 1.118l1.287 3.97c.3.921-.755 1.688-1.54 1.118l-3.385-2.46a1 1 0 00-1.175 0l-3.385 2.46c-.784.57-1.838-.197-1.539-1.118l1.286-3.97a1 1 0 00-.364-1.118L2.045 9.397c-.783-.57-.38-1.81.588-1.81h4.178a1 1 0 00.95-.69l1.288-3.97z" />
                            </svg>
                            <svg class="w-5 h-5 text-gray-300" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.97a1 1 0 00.95.69h4.178c.969 0 1.371 1.24.588 1.81l-3.385 2.46a1 1 0 00-.364 1.118l1.287 3.97c.3.921-.755 1.688-1.54 1.118l-3.385-2.46a1 1 0 00-1.175 0l-3.385 2.46c-.784.57-1.838-.197-1.539-1.118l1.286-3.97a1 1 0 00-.364-1.118L2.045 9.397c-.783-.57-.38-1.81.588-1.81h4.178a1 1 0 00.95-.69l1.288-3.97z" />
                            </svg>
                        </div>

                        <!-- Review -->
                        <p class="text-gray-600 leading-relaxed">
                            "Pelayanan sangat memuaskan, produk berkualitas, dan pengiriman tepat waktu.
                            Saya pasti akan merekomendasikan usaha ini kepada teman-teman saya."
                        </p>
                    </div>
                </div>

                <div class="max-w-md mx-auto">
                    <div class="bg-white shadow-lg rounded-2xl p-6 border border-gray-100">
                        <div class="flex items-center mb-4">
                            <img class="w-12 h-12 rounded-full border-2 border-brand-500"
                                src="https://randomuser.me/api/portraits/men/32.jpg" alt="User Photo">
                            <div class="ml-3">
                                <h3 class="text-lg font-semibold text-gray-800">Andi Pratama</h3>
                                <p class="text-sm text-gray-500">Customer</p>
                            </div>
                        </div>

                        <!-- Rating -->
                        <div class="flex items-center mb-3">
                            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.97a1 1 0 00.95.69h4.178c.969 0 1.371 1.24.588 1.81l-3.385 2.46a1 1 0 00-.364 1.118l1.287 3.97c.3.921-.755 1.688-1.54 1.118l-3.385-2.46a1 1 0 00-1.175 0l-3.385 2.46c-.784.57-1.838-.197-1.539-1.118l1.286-3.97a1 1 0 00-.364-1.118L2.045 9.397c-.783-.57-.38-1.81.588-1.81h4.178a1 1 0 00.95-.69l1.288-3.97z" />
                            </svg>
                            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.97a1 1 0 00.95.69h4.178c.969 0 1.371 1.24.588 1.81l-3.385 2.46a1 1 0 00-.364 1.118l1.287 3.97c.3.921-.755 1.688-1.54 1.118l-3.385-2.46a1 1 0 00-1.175 0l-3.385 2.46c-.784.57-1.838-.197-1.539-1.118l1.286-3.97a1 1 0 00-.364-1.118L2.045 9.397c-.783-.57-.38-1.81.588-1.81h4.178a1 1 0 00.95-.69l1.288-3.97z" />
                            </svg>
                            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.97a1 1 0 00.95.69h4.178c.969 0 1.371 1.24.588 1.81l-3.385 2.46a1 1 0 00-.364 1.118l1.287 3.97c.3.921-.755 1.688-1.54 1.118l-3.385-2.46a1 1 0 00-1.175 0l-3.385 2.46c-.784.57-1.838-.197-1.539-1.118l1.286-3.97a1 1 0 00-.364-1.118L2.045 9.397c-.783-.57-.38-1.81.588-1.81h4.178a1 1 0 00.95-.69l1.288-3.97z" />
                            </svg>
                            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.97a1 1 0 00.95.69h4.178c.969 0 1.371 1.24.588 1.81l-3.385 2.46a1 1 0 00-.364 1.118l1.287 3.97c.3.921-.755 1.688-1.54 1.118l-3.385-2.46a1 1 0 00-1.175 0l-3.385 2.46c-.784.57-1.838-.197-1.539-1.118l1.286-3.97a1 1 0 00-.364-1.118L2.045 9.397c-.783-.57-.38-1.81.588-1.81h4.178a1 1 0 00.95-.69l1.288-3.97z" />
                            </svg>
                            <svg class="w-5 h-5 text-gray-300" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.97a1 1 0 00.95.69h4.178c.969 0 1.371 1.24.588 1.81l-3.385 2.46a1 1 0 00-.364 1.118l1.287 3.97c.3.921-.755 1.688-1.54 1.118l-3.385-2.46a1 1 0 00-1.175 0l-3.385 2.46c-.784.57-1.838-.197-1.539-1.118l1.286-3.97a1 1 0 00-.364-1.118L2.045 9.397c-.783-.57-.38-1.81.588-1.81h4.178a1 1 0 00.95-.69l1.288-3.97z" />
                            </svg>
                        </div>

                        <!-- Review -->
                        <p class="text-gray-600 leading-relaxed">
                            "Pelayanan sangat memuaskan, produk berkualitas, dan pengiriman tepat waktu.
                            Saya pasti akan merekomendasikan usaha ini kepada teman-teman saya."
                        </p>
                    </div>
                </div>

                <div class="max-w-md mx-auto">
                    <div class="bg-white shadow-lg rounded-2xl p-6 border border-gray-100">
                        <div class="flex items-center mb-4">
                            <img class="w-12 h-12 rounded-full border-2 border-brand-500"
                                src="https://randomuser.me/api/portraits/men/32.jpg" alt="User Photo">
                            <div class="ml-3">
                                <h3 class="text-lg font-semibold text-gray-800">Andi Pratama</h3>
                                <p class="text-sm text-gray-500">Customer</p>
                            </div>
                        </div>

                        <!-- Rating -->
                        <div class="flex items-center mb-3">
                            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.97a1 1 0 00.95.69h4.178c.969 0 1.371 1.24.588 1.81l-3.385 2.46a1 1 0 00-.364 1.118l1.287 3.97c.3.921-.755 1.688-1.54 1.118l-3.385-2.46a1 1 0 00-1.175 0l-3.385 2.46c-.784.57-1.838-.197-1.539-1.118l1.286-3.97a1 1 0 00-.364-1.118L2.045 9.397c-.783-.57-.38-1.81.588-1.81h4.178a1 1 0 00.95-.69l1.288-3.97z" />
                            </svg>
                            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.97a1 1 0 00.95.69h4.178c.969 0 1.371 1.24.588 1.81l-3.385 2.46a1 1 0 00-.364 1.118l1.287 3.97c.3.921-.755 1.688-1.54 1.118l-3.385-2.46a1 1 0 00-1.175 0l-3.385 2.46c-.784.57-1.838-.197-1.539-1.118l1.286-3.97a1 1 0 00-.364-1.118L2.045 9.397c-.783-.57-.38-1.81.588-1.81h4.178a1 1 0 00.95-.69l1.288-3.97z" />
                            </svg>
                            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.97a1 1 0 00.95.69h4.178c.969 0 1.371 1.24.588 1.81l-3.385 2.46a1 1 0 00-.364 1.118l1.287 3.97c.3.921-.755 1.688-1.54 1.118l-3.385-2.46a1 1 0 00-1.175 0l-3.385 2.46c-.784.57-1.838-.197-1.539-1.118l1.286-3.97a1 1 0 00-.364-1.118L2.045 9.397c-.783-.57-.38-1.81.588-1.81h4.178a1 1 0 00.95-.69l1.288-3.97z" />
                            </svg>
                            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.97a1 1 0 00.95.69h4.178c.969 0 1.371 1.24.588 1.81l-3.385 2.46a1 1 0 00-.364 1.118l1.287 3.97c.3.921-.755 1.688-1.54 1.118l-3.385-2.46a1 1 0 00-1.175 0l-3.385 2.46c-.784.57-1.838-.197-1.539-1.118l1.286-3.97a1 1 0 00-.364-1.118L2.045 9.397c-.783-.57-.38-1.81.588-1.81h4.178a1 1 0 00.95-.69l1.288-3.97z" />
                            </svg>
                            <svg class="w-5 h-5 text-gray-300" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.97a1 1 0 00.95.69h4.178c.969 0 1.371 1.24.588 1.81l-3.385 2.46a1 1 0 00-.364 1.118l1.287 3.97c.3.921-.755 1.688-1.54 1.118l-3.385-2.46a1 1 0 00-1.175 0l-3.385 2.46c-.784.57-1.838-.197-1.539-1.118l1.286-3.97a1 1 0 00-.364-1.118L2.045 9.397c-.783-.57-.38-1.81.588-1.81h4.178a1 1 0 00.95-.69l1.288-3.97z" />
                            </svg>
                        </div>

                        <!-- Review -->
                        <p class="text-gray-600 leading-relaxed">
                            "Pelayanan sangat memuaskan, produk berkualitas, dan pengiriman tepat waktu.
                            Saya pasti akan merekomendasikan usaha ini kepada teman-teman saya."
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- ===== Kontak ===== -->
    <section id="kontak" class="bg-white py-20">
        <div class="mx-auto max-w-7xl px-4">
            <div class="grid gap-10 lg:grid-cols-2">
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold tracking-tight text-slate-900">Hubungi Kami</h2>
                    <p class="mt-2 text-slate-600">Siap berdiskusi? Pilih kanal yang paling nyaman bagi Anda.</p>

                    <div class="mt-6 grid grid-cols-1 gap-4 sm:grid-cols-2">
                        <a href="https://wa.me/628123456789" target="_blank"
                            class="flex items-center gap-3 rounded-2xl border border-emerald-200 bg-emerald-50 px-4 py-4 text-emerald-800 hover:bg-emerald-100">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M.057 24l1.687-6.163A11.867 11.867 0 0 1 0 11.993C0 5.372 5.373 0 11.994 0c3.2 0 6.208 1.246 8.467 3.505a11.89 11.89 0 0 1 3.5 8.48c-.003 6.62-5.376 11.993-11.997 11.993a11.9 11.9 0 0 1-5.688-1.448L.057 24zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.593 5.448.003 9.897-4.442 9.9-9.89.002-5.462-4.415-9.88-9.877-9.882-5.46-.003-9.89 4.418-9.893 9.878a9.86 9.86 0 0 0 1.51 5.26l-.998 3.648 3.966-.997zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413z" />
                            </svg>
                            WhatsApp
                        </a>
                        <a href="mailto:info@centechno.com"
                            class="flex items-center gap-3 rounded-2xl border border-sky-200 bg-sky-50 px-4 py-4 text-sky-800 hover:bg-sky-100">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 13.065 1.5 6h21L12 13.065ZM1.5 7.875V18h21V7.875L12 15 1.5 7.875Z" />
                            </svg>
                            Email
                        </a>
                        <a href="tel:+628123456789"
                            class="flex items-center gap-3 rounded-2xl border border-slate-200 bg-slate-50 px-4 py-4 text-slate-800 hover:bg-slate-100">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M6.62 10.79a15.053 15.053 0 0 0 6.59 6.59l2.2-2.2a1 1 0 0 1 1.01-.24c1.12.37 2.33.57 3.58.57a1 1 0 0 1 1 1V20a1 1 0 0 1-1 1C10.85 21 3 13.15 3 3a1 1 0 0 1 1-1h3.5a1 1 0 0 1 1 1c0 1.25.2 2.46.57 3.58a1 1 0 0 1-.25 1.01l-2.2 2.2Z" />
                            </svg>
                            Telepon
                        </a>
                        <a href="https://g.co/kgs/placeholder" target="_blank"
                            class="flex items-center gap-3 rounded-2xl border border-rose-200 bg-rose-50 px-4 py-4 text-rose-800 hover:bg-rose-100">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M12 2C7.03 2 3 6.03 3 11c0 5.25 6.42 10.53 8.68 12.14.2.14.45.14.64 0C14.58 21.53 21 16.25 21 11c0-4.97-4.03-9-9-9Zm0 12.5c-1.93 0-3.5-1.57-3.5-3.5S10.07 7.5 12 7.5s3.5 1.57 3.5 3.5S13.93 14.5 12 14.5Z" />
                            </svg>
                            Google Maps
                        </a>
                    </div>

                    <p class="mt-6 text-sm text-slate-500">Jam operasional: Senin–Jumat 09.00–17.00 WIB</p>
                </div>

                <div class="overflow-hidden rounded-2xl ring-1 ring-slate-200">
                    <iframe title="Lokasi Centechno"
                        src="https://maps.google.com/maps?q=Jakarta&t=&z=13&ie=UTF8&iwloc=&output=embed" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade" class="h-[320px] w-full"></iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== Footer ===== -->
    <footer class="bg-slate-900 text-slate-300">
        <div class="mx-auto max-w-7xl px-4 py-14 grid gap-10 md:grid-cols-4">
            <div class="md:col-span-2">
                <div class="flex items-center gap-3">
                    <span
                        class="inline-flex h-9 w-9 items-center justify-center rounded-xl bg-white/10 ring-1 ring-white/20 text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5" fill="currentColor">
                            <path
                                d="M12 2a10 10 0 1 0 10 10A10.011 10.011 0 0 0 12 2Zm0 4.5 5 3-5 3-5-3ZM7 12.5l5 3 5-3v3l-5 3-5-3Z" />
                        </svg>
                    </span>
                    <span class="text-lg font-semibold text-white">Centechno</span>
                </div>
                <p class="mt-4 max-w-md text-slate-400">Mitra tepercaya untuk solusi produk dan branding bisnis Anda.
                    Menyediakan layanan profesional dengan standar kualitas tinggi.</p>
            </div>
            <div>
                <h4 class="font-semibold text-white">Navigasi</h4>
                <ul class="mt-4 space-y-2 text-slate-400">
                    <li><a href="#home" class="hover:text-white">Home</a></li>
                    <li><a href="#produk" class="hover:text-white">Produk</a></li>
                    <li><a href="#about" class="hover:text-white">Tentang</a></li>
                    <li><a href="#testimoni" class="hover:text-white">Testimoni</a></li>
                    <li><a href="#kontak" class="hover:text-white">Kontak</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-semibold text-white">Kontak</h4>
                <ul class="mt-4 space-y-2 text-slate-400">
                    <li>Email: info@centechno.com</li>
                    <li>Telp: +62 812-3456-7890</li>
                    <li>Alamat: Jakarta, Indonesia</li>
                </ul>
                <div class="mt-4 flex items-center gap-3">
                    <a href="#" aria-label="Instagram"
                        class="inline-flex h-9 w-9 items-center justify-center rounded-lg bg-white/10 text-white hover:bg-white/20">
                        <svg class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M7 2C4.24 2 2 4.24 2 7v10c0 2.76 2.24 5 5 5h10c2.76 0 5-2.24 5-5V7c0-2.76-2.24-5-5-5H7Zm0 2h10c1.66 0 3 1.34 3 3v10c0 1.66-1.34 3-3 3H7c-1.66 0-3-1.34-3-3V7c0-1.66 1.34-3 3-3Zm11 2a1 1 0 1 0 0 2 1 1 0 0 0 0-2ZM12 7a5 5 0 1 0 0 10 5 5 0 0 0 0-10Zm0 2a3 3 0 1 1 0 6 3 3 0 0 1 0-6Z" />
                        </svg>
                    </a>
                    <a href="#" aria-label="Facebook"
                        class="inline-flex h-9 w-9 items-center justify-center rounded-lg bg-white/10 text-white hover:bg-white/20">
                        <svg class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M22 12a10 10 0 1 0-11.5 9.9v-7h-2v-3h2v-2.3c0-2 1.2-3.1 3-3.1.9 0 1.8.16 1.8.16v2h-1c-1 0-1.3.62-1.3 1.25V12h2.2l-.35 3h-1.85v7A10 10 0 0 0 22 12Z" />
                        </svg>
                    </a>
                    <a href="#" aria-label="LinkedIn"
                        class="inline-flex h-9 w-9 items-center justify-center rounded-lg bg-white/10 text-white hover:bg-white/20">
                        <svg class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M19 3A2.94 2.94 0 0 1 22 6v12a2.94 2.94 0 0 1-3 3H5a2.94 2.94 0 0 1-3-3V6a2.94 2.94 0 0 1 3-3Zm-9.5 16v-7H7v7ZM7.75 8.5A1.25 1.25 0 1 0 6.5 7.25 1.25 1.25 0 0 0 7.75 8.5ZM18 19v-3.8c0-2.04-1.09-3-2.55-3a2.22 2.22 0 0 0-2 1.1h-.03V12h-2v7h2v-3.4c0-.9.17-1.78 1.29-1.78s1.21 1.09 1.21 1.84V19Z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="border-t border-slate-800">
            <div class="mx-auto max-w-7xl px-4 py-6 text-sm text-slate-500">© 2025 Centechno. All rights reserved.</div>
        </div>
    </footer>

    <!-- Floating WhatsApp CTA -->
    <a href="https://wa.me/628123456789" target="_blank"
        class="fixed bottom-5 right-5 inline-flex items-center gap-2 rounded-full bg-emerald-500 px-4 py-3 text-white shadow-lg hover:bg-emerald-600 focus:outline-none">
        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
            <path
                d="M.057 24l1.687-6.163A11.867 11.867 0 0 1 0 11.993C0 5.372 5.373 0 11.994 0c3.2 0 6.208 1.246 8.467 3.505a11.89 11.89 0 0 1 3.5 8.48c-.003 6.62-5.376 11.993-11.997 11.993a11.9 11.9 0 0 1-5.688-1.448L.057 24zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.593 5.448.003 9.897-4.442 9.9-9.89.002-5.462-4.415-9.88-9.877-9.882-5.46-.003-9.89 4.418-9.893 9.878a9.86 9.86 0 0 0 1.51 5.26l-.998 3.648 3.966-.997zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413z" />
        </svg>
        <span class="hidden sm:inline">Chat WhatsApp</span>
    </a>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script>
        // Navbar background change on scroll & hero visibility
        const navbar = document.getElementById('navbar');
        const brandName = document.getElementById('brand-name');
        function updateNavbar() {
            const scrolled = window.scrollY > 10;
            if (scrolled) {
                navbar.className = 'fixed inset-x-0 top-0 z-50 transition-colors duration-300 bg-slate-900/90 border-b border-white/10 backdrop-blur';
                brandName.classList.replace('text-white', 'text-slate-100');
            } else {
                navbar.className = 'fixed inset-x-0 top-0 z-50 transition-colors duration-300 border-b border-transparent';
                brandName.classList.add('text-white');
            }
        }
        updateNavbar();
        window.addEventListener('scroll', updateNavbar);

        // Close mobile menu after click (improves UX)
        const mobileMenu = document.getElementById('mobile-menu');
        mobileMenu?.querySelectorAll('a').forEach(a => a.addEventListener('click', () => {
            mobileMenu.classList.add('hidden');
        }));
    </script>
</body>

</html>