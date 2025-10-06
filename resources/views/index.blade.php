<!DOCTYPE html>
<html lang="id">

<head>
    <!-- Basic Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- SEO Meta Tags -->
    <title>Centechno</title>
    <meta name="description"
        content="Centechno menyediakan layanan pembuatan website modern, profesional, dan siap pakai. Mulai dari template siap pakai hingga custom sesuai kebutuhan bisnis.">
    <meta name="keywords" content="website, jasa pembuatan website, website profesional, template website, centechno">
    <meta name="author" content="Centechno">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('favicon.ico') }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:title" content="Centechno - Jasa Pembuatan Website Profesional">
    <meta property="og:description"
        content="Centechno menyediakan layanan pembuatan website modern, profesional, dan siap pakai.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('img/logo-ct.png') }}"> <!-- Ganti sesuai image promosi -->

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Centechno - Jasa Pembuatan Website Profesional">
    <meta name="twitter:description"
        content="Centechno menyediakan layanan pembuatan website modern, profesional, dan siap pakai.">
    <meta name="twitter:image" content="{{ asset('img/logo-ct.png') }}"> <!-- Ganti sesuai image promosi -->

    <!-- Styles & Scripts -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="js/tailwind-config-index.js"></script>
    <link rel="stylesheet" href="style/style_index.css">

    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>


<body class="bg-white">
    <!-- Navigation -->
    <nav class="fixed w-full bg-white/95 backdrop-blur-md shadow-sm z-50 border-b border-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-4">
                <!-- Logo -->
                <div class="flex items-center">
                    <img src="{{ asset('img/logo-ct.webp') }}" class="w-11 h-11" alt="">
                    <h1 class="text-2xl font-bold text-blue-600">
                        Centechno
                    </h1>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex space-x-8">
                    <a href="javascript:void(0);" onclick="scrollToSection('home', event)"
                        class="text-slate-700 hover:text-blue-600 transition-colors duration-300 font-medium relative group">
                        Beranda
                        <span
                            class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-600 transition-all duration-300 group-hover:w-full"></span>
                    </a>
                    <a href="javascript:void(0);" onclick="scrollToSection('about', event)"
                        class="text-slate-700 hover:text-blue-600 transition-colors duration-300 font-medium relative group">
                        Tentang
                        <span
                            class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-600 transition-all duration-300 group-hover:w-full"></span>
                    </a>
                    <a href="javascript:void(0);" onclick="scrollToSection('services', event)"
                        class="text-slate-700 hover:text-blue-600 transition-colors duration-300 font-medium relative group">
                        Layanan
                        <span
                            class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-600 transition-all duration-300 group-hover:w-full"></span>
                    </a>
                    <a href="javascript:void(0);" onclick="scrollToSection('template', event)"
                        class="text-slate-700 hover:text-blue-600 transition-colors duration-300 font-medium relative group">
                        Template
                        <span
                            class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-600 transition-all duration-300 group-hover:w-full"></span>
                    </a>
                    <a href="javascript:void(0);" onclick="scrollToSection('survei', event)"
                        class="text-slate-700 hover:text-blue-600 transition-colors duration-300 font-medium relative group">
                        Survei
                        <span
                            class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-600 transition-all duration-300 group-hover:w-full"></span>
                    </a>
                    <a href="javascript:void(0);" onclick="scrollToSection('contact', event)"
                        class="text-slate-700 hover:text-blue-600 transition-colors duration-300 font-medium relative group">
                        Kontak
                        <span
                            class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-600 transition-all duration-300 group-hover:w-full"></span>
                    </a>
                </div>

                <!-- CTA Button Desktop -->
                <div class="hidden md:block">
                    <a href="javascript:void(0);" onclick="scrollToSection('contact', event)"
                        class="inline-flex items-center px-6 py-2 bg-blue-600 text-white rounded-lg font-medium hover:bg-blue-700 transition-all duration-300 hover:scale-105 shadow-sm">
                        Konsultasi Gratis
                        <svg class="w-4 h-4 ml-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <button class="md:hidden p-2 rounded-lg hover:bg-slate-100 transition-colors duration-200"
                    onclick="toggleMenu()" id="mobile-menu-button">
                    <svg class="w-6 h-6 text-slate-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        id="menu-icon">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                    <svg class="w-6 h-6 text-slate-700 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        id="close-icon">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div class="md:hidden bg-white/95 backdrop-blur-md border-t border-slate-100 hidden" id="mobile-menu">
            <div class="px-4 py-6 space-y-4">
                <a href="javascript:void(0);" onclick="scrollToSection('home', event); closeMenu();"
                    class="block px-4 py-3 text-slate-700 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-all duration-200 font-medium">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-3 text-slate-400" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                        </svg>
                        Beranda
                    </div>
                </a>
                <a href="javascript:void(0);" onclick="scrollToSection('about', event); closeMenu();"
                    class="block px-4 py-3 text-slate-700 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-all duration-200 font-medium">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-3 text-slate-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                clip-rule="evenodd" />
                        </svg>
                        Tentang
                    </div>
                </a>
                <a href="javascript:void(0);" onclick="scrollToSection('services', event); closeMenu();"
                    class="block px-4 py-3 text-slate-700 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-all duration-200 font-medium">
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-tools w-5 h-5 mr-3 text-slate-400" viewBox="0 0 16 16">
                            <path
                                d="M1 0 0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.27 3.27a.997.997 0 0 0 1.414 0l1.586-1.586a.997.997 0 0 0 0-1.414l-3.27-3.27a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3q0-.405-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814zm9.646 10.646a.5.5 0 0 1 .708 0l2.914 2.915a.5.5 0 0 1-.707.707l-2.915-2.914a.5.5 0 0 1 0-.708M3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026z" />
                        </svg>
                        Layanan
                    </div>
                </a>
                <a href="javascript:void(0);" onclick="scrollToSection('template', event); closeMenu();"
                    class="block px-4 py-3 text-slate-700 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-all duration-200 font-medium">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-3 text-slate-400" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        Template
                    </div>
                </a>
                <a href="javascript:void(0);" onclick="scrollToSection('survei', event); closeMenu();"
                    class="block px-4 py-3 text-slate-700 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-all duration-200 font-medium">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-3 text-slate-400" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M4 3a1 1 0 011-1h10a1 1 0 011 1v14a1 1 0 01-1 1H5a1 1 0 01-1-1V3zm2 2v2h8V5H6zm0 4v2h8V9H6zm0 4v2h5v-2H6z" />
                        </svg>
                        Survei
                    </div>
                </a>
                <a href="javascript:void(0);" onclick="scrollToSection('contact', event); closeMenu();"
                    class="block px-4 py-3 text-slate-700 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-all duration-200 font-medium">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-3 text-slate-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                        </svg>
                        Kontak
                    </div>
                </a>

                <!-- Mobile CTA -->
                <div class="pt-4 border-t border-slate-200">
                    <a href="javascript:void(0);" onclick="scrollToSection('contact', event); closeMenu();"
                        class="flex items-center justify-center w-full px-4 py-3 bg-blue-600 text-white rounded-lg font-medium hover:bg-blue-700 transition-all duration-200">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.890-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488" />
                        </svg>
                        Konsultasi WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="h-screen flex items-center bg-gradient-to-br from-blue-50 to-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-6 leading-snug">
                        Tingkatkan <span class="text-primary">Kepercayaan</span>
                        Bisnis dengan Website Profesional
                    </h2>
                    <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                        Kami hadirkan website company profile modern dengan desain elegan, harga terjangkau, dan
                        langsung siap online.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#contact"
                            class="bg-primary text-white px-8 py-3 rounded-lg font-semibold hover:bg-secondary transition-colors text-center shadow-md">
                            Konsultasi Gratis
                        </a>
                        <a href="#services"
                            class="border-2 border-primary text-primary px-8 py-3 rounded-lg font-semibold hover:bg-primary hover:text-white transition-colors text-center">
                            Lihat Paket
                        </a>
                    </div>
                </div>
                <div class="hidden lg:flex justify-center">
                    <img src="{{ asset('img/logo-ct.webp') }}" class="" alt="">
                </div>
            </div>
        </div>
    </section>


    <!-- About Section -->
    <section id="about" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">Tentang Centechno</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Centechno menyediakan website company profile modern, baik template siap pakai maupun custom,
                    lengkap dengan domain & hosting gratis agar bisnis Anda siap online dengan mudah dan terpercaya.
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Harga Terjangkau -->
                <div class="text-center p-6">
                    <div class="w-16 h-16 bg-primary rounded-full flex items-center justify-center mx-auto mb-4">
                        <!-- Icon Tag Harga -->
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path d="M20 12l-8-8H6a2 2 0 0 0-2 2v6l8 8a2 2 0 0 0 2.8 0l5.2-5.2a2 2 0 0 0 0-2.8z" />
                            <circle cx="7.5" cy="7.5" r="1.5" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Harga Terjangkau</h3>
                    <p class="text-gray-600">Mulai Rp189.000, website profesional siap online untuk bisnis Anda.</p>
                </div>

                <!-- Desain Modern -->
                <div class="text-center p-6">
                    <div class="w-16 h-16 bg-primary rounded-full flex items-center justify-center mx-auto mb-4">
                        <!-- Icon Monitor -->
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <rect x="2" y="3" width="20" height="14" rx="2" ry="2" />
                            <line x1="8" y1="21" x2="16" y2="21" />
                            <line x1="12" y1="17" x2="12" y2="21" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Desain Modern</h3>
                    <p class="text-gray-600">Template elegan atau desain custom sesuai identitas brand Anda.</p>
                </div>

                <!-- Gratis Maintenance -->
                <div class="text-center p-6">
                    <div class="w-16 h-16 bg-primary rounded-full flex items-center justify-center mx-auto mb-4">
                        <!-- Icon Tools -->
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path
                                d="M14.7 6.3a1 1 0 0 1 1.4 0l1.6 1.6a1 1 0 0 1 0 1.4L9.4 17.6a1 1 0 0 1-.7.3H6v-2.7a1 1 0 0 1 .3-.7l8.4-8.4z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Gratis Maintenance</h3>
                    <p class="text-gray-600">Kami bantu update konten website tanpa biaya tambahan.</p>
                </div>
            </div>

        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">Layanan Kami</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Pilih paket website sesuai kebutuhan bisnis Anda. Semua layanan sudah termasuk domain & hosting
                    gratis.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- Paket Website 1 Page -->
                <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-lg transition-all">
                    <div class="w-12 h-12 bg-primary rounded-lg flex items-center justify-center mb-6">
                        <!-- Icon Document -->
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path d="M7 2h8l5 5v15a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1z" />
                        </svg>
                    </div>

                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Website Single Page</h3>
                    <p class="text-gray-600 mb-6">
                        Cocok untuk usaha kecil atau profil singkat bisnis.
                    </p>

                    <!-- Fitur -->
                    <ul class="text-sm text-gray-500 space-y-2">
                        <li>• 1 Halaman website</li>
                        <li>• Desain simple & profesional</li>
                        <li>• Gratis domain .my.id & hosting 1 Tahun <br> (Domain lain bisa ditanyakan ke admin)</li>
                        <li>• Gratis update konten sesuai usaha</li>
                    </ul>

                    <!-- Harga -->
                    <div class="mt-6">
                        <span class="text-gray-400 line-through mr-2">Rp259.000</span>
                        <span class="text-xl font-bold text-primary">Rp189.000</span>
                    </div>
                </div>


                <!-- Paket Website Multi Page -->
                <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-lg transition-shadow">
                    <div class="w-12 h-12 bg-primary rounded-lg flex items-center justify-center mb-6">
                        <!-- Icon Layout -->
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <rect x="3" y="3" width="7" height="7" />
                            <rect x="14" y="3" width="7" height="7" />
                            <rect x="14" y="14" width="7" height="7" />
                            <rect x="3" y="14" width="7" height="7" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Website Multi Page</h3>
                    <p class="text-gray-600 mb-4">Ideal untuk bisnis yang membutuhkan informasi lebih lengkap.</p>
                    <ul class="text-sm text-gray-500 space-y-2">
                        <li>• Hingga 5 halaman</li>
                        <li>• Desain modern & responsif</li>
                        <li>• Gratis domain .my.id & hosting 1 Tahun <br> (Domain lain bisa ditanyakan ke admin)</li>
                        <li>• Gratis update konten sesuai usaha</li>
                    </ul>
                    <div class="mt-6">
                        <span class="text-gray-400 line-through mr-2">Rp739.000</span>
                        <span class="text-xl font-bold text-primary">Rp589.000</span>
                    </div>
                </div>

                <!-- Custom Website -->
                <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-lg transition-shadow">
                    <div class="w-12 h-12 bg-primary rounded-lg flex items-center justify-center mb-6">
                        <!-- Icon Code -->
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path d="M16 18l6-6-6-6M8 6l-6 6 6 6" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Custom Website</h3>
                    <p class="text-gray-600 mb-4">Didesain khusus sesuai kebutuhan & identitas brand Anda.</p>
                    <ul class="text-sm text-gray-500 space-y-2">
                        <li>• Desain fleksibel sesuai request</li>
                        <li>• Fitur tambahan sesuai kebutuhan bisnis</li>
                        <li>• Gratis domain .my.id & hosting 1 Tahun <br> (Domain lain bisa ditanyakan ke admin)</li>
                        <li>• Gratis update konten sesuai usaha</li>
                    </ul>
                    <p class="mt-6 text-lg font-bold text-primary">Harga fleksibel <br> <span class="text-sm">(Mulai
                            dari Rp189.000)</span></p>
                </div>
            </div>
        </div>
    </section>


    <!-- Portfolio Section -->
    <section id="template" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">Template Website</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Berikut beberapa template website yang sudah kami sediakan, bisa disesuaikan untuk bisnis Anda.
                </p>
            </div>
            <h2 class="text-xl lg:text-2xl font-bold text-gray-900 mb-4">Template Single Page</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">

                <!-- Savana Digital -->
                <a href="{{ url('/template-ct/sp/1') }}" target="_blank"
                    class="group block bg-white rounded-xl shadow-md hover:shadow-xl transition overflow-hidden">
                    <img src="{{ asset('img/page-savana-digital.webp') }}" alt="Savana Digital"
                        class="w-full h-48 object-cover group-hover:scale-105 transition">
                    <div class="p-6">
                        <p class="text-gray-600">Template landing page digital agency modern.</p>
                    </div>
                </a>

                <!-- Noir Atelier -->
                <a href="{{ url('/template-ct/sp/3') }}" target="_blank"
                    class="group block bg-white rounded-xl shadow-md hover:shadow-xl transition overflow-hidden">
                    <img src="{{ asset('img/page-noir.webp') }}" alt="Noir Atelier"
                        class="w-full h-48 object-cover group-hover:scale-105 transition">
                    <div class="p-6">
                        <p class="text-gray-600">Template elegan untuk butik atau brand fashion.</p>
                    </div>
                </a>

                <!-- Bengkel Sejahtera -->
                <a href="{{ url('/template-ct/sp/4') }}" target="_blank"
                    class="group block bg-white rounded-xl shadow-md hover:shadow-xl transition overflow-hidden">
                    <img src="{{ asset('img/page-bengkel-sejahtera.webp') }}" alt="Bengkel Sejahtera"
                        class="w-full h-48 object-cover group-hover:scale-105 transition">
                    <div class="p-6">
                        <p class="text-gray-600">Template website bengkel dengan info layanan & kontak.</p>
                    </div>
                </a>

                <!-- Usaha Kami -->
                <a href="{{ url('/template-ct/sp/2') }}" target="_blank"
                    class="group block bg-white rounded-xl shadow-md hover:shadow-xl transition overflow-hidden">
                    <img src="{{ asset('img/page-usaha-kami.webp') }}" alt="Usaha Kami"
                        class="w-full h-48 object-cover group-hover:scale-105 transition">
                    <div class="p-6">
                        <p class="text-gray-600">Template company profile sederhana tapi profesional.</p>
                    </div>
                </a>

            </div>

            <h2 class="text-xl lg:text-2xl font-bold text-gray-900 mb-4">Template Multi Page</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- Aurum Dining -->
                <a href="{{ url('/template-ct/mp/1') }}" target="_blank"
                    class="group block bg-white rounded-xl shadow-md hover:shadow-xl transition overflow-hidden">
                    <img src="{{ asset('img/page-aurum-dining.webp') }}" alt="Aurum Dining"
                        class="w-full h-48 object-cover group-hover:scale-105 transition">
                    <div class="p-6">
                        <p class="text-gray-600">Template website restoran elegan dengan menu & galeri.</p>
                    </div>
                </a>

                {{-- <!-- Dewan Ambalan Esemkasa -->
                <a href="{{ url('/da-esemkasa') }}" target="_blank"
                    class="group block bg-white rounded-xl shadow-md hover:shadow-xl transition overflow-hidden">
                    <img src="{{ asset('img/page-da-esemkasa.png') }}" alt="Aurum Dining"
                        class="w-full h-48 object-cover group-hover:scale-105 transition">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-2 group-hover:text-[#d4af37] transition">
                            Dewan Ambalan Esemkasa
                        </h3>
                        <p class="text-gray-600">Template website organisasi dengan Beranda, Kegiatan, Galeri, Berita</p>
                    </div>
                </a> --}}

            </div>
        </div>
    </section>

    <!-- Survei Section -->
    <section id="survei" class="py-20 bg-gray-50">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">
                    Survei Pengunjung
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Kami menghargai setiap masukan Anda. Silakan isi formulir berikut agar kami dapat memahami kebutuhan
                    dan minat pengunjung dengan lebih baik.
                </p>
            </div>

            <!-- Formulir Survei -->
            <div class="max-w-2xl mx-auto">
                <form class="bg-white rounded-lg shadow-lg p-8" id="form_survei">
                    @csrf

                    <!-- Nama -->
                    <div class="mb-6">
                        <label for="nama" class="block text-sm font-semibold text-gray-700 mb-2">
                            Nama <span class="text-red-500">*</span>
                        </label>
                        <input type="text" id="nama" name="nama" required maxlength="100"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200"
                            placeholder="Masukkan nama lengkap Anda">
                    </div>

                    <!-- Nomor Telepon -->
                    <div class="mb-6">
                        <label for="telepon" class="block text-sm font-semibold text-gray-700 mb-2">
                            Nomor Telepon <span class="text-red-500">*</span>
                        </label>
                        <input type="tel" id="telepon" name="nomor_telepon" required maxlength="15"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200"
                            placeholder="Contoh: 08123456789" pattern="[0-9+\-\s\(\)]+">
                    </div>

                    <!-- Website Seperti Apa Yang Anda Sukai -->
                    <div class="mb-8">
                        <label for="website_preference" class="block text-sm font-semibold text-gray-700 mb-2">
                            Website Seperti Apa Yang Anda Sukai? <span class="text-red-500">*</span>
                        </label>
                        <textarea id="website_preference" name="deskripsi_web" required rows="5"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200 resize-vertical"
                            placeholder="Ceritakan preferensi Anda tentang desain website, fitur yang diinginkan, warna, layout, atau hal lain yang Anda sukai dari sebuah website..."></textarea>
                        <p class="text-sm text-gray-500 mt-2">
                            Contoh: Website dengan desain minimalis, warna soft, mudah navigasi, loading cepat, dll.
                        </p>
                    </div>

                    <!-- Tombol Kirim -->
                    <div class="text-center">
                        <button type="submit"
                            class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-8 rounded-lg transition duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                            Kirim Survei
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-white">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">
                    Hubungi Kami
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Kami spesialis <span class="font-semibold text-primary">pembuatan website profesional</span>
                    dan penyedia <span class="font-semibold text-primary">template website modern</span>.
                    Konsultasikan kebutuhan website Anda bersama tim kami.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
                <!-- WhatsApp -->
                <div
                    class="group bg-white p-8 rounded-2xl shadow-sm hover:shadow-lg transition-all duration-300 border border-slate-100 text-center">
                    <div
                        class="w-16 h-16 bg-green-500 rounded-xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            class="bi bi-whatsapp text-white" viewBox="0 0 16 16">
                            <path
                                d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-slate-900 mb-2">WhatsApp</h3>
                    <p class="text-slate-600 mb-4">Diskusi cepat tentang website atau template</p>
                    <a href="https://wa.me/6285187563635" target="_blank"
                        class="inline-flex items-center px-5 py-2 bg-green-500 text-white rounded-lg font-medium hover:bg-green-600 transition-colors">
                        Chat Sekarang
                    </a>
                </div>

                <!-- Email -->
                <div
                    class="group bg-white p-8 rounded-2xl shadow-sm hover:shadow-lg transition-all duration-300 border border-slate-100 text-center">
                    <div
                        class="w-16 h-16 bg-slate-600 rounded-xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-slate-900 mb-2">Email</h3>
                    <p class="text-slate-600 mb-4">Kirimkan detail kebutuhan website Anda</p>
                    <button onclick="contactWarning()"
                        class="inline-flex items-center px-5 py-2 bg-slate-600 text-white rounded-lg font-medium hover:bg-slate-700 transition-colors">
                        Kirim Email
                    </button>
                </div>

                <!-- Social Media -->
                <div
                    class="group bg-white p-8 rounded-2xl shadow-sm hover:shadow-lg transition-all duration-300 border border-slate-100">
                    <h3 class="text-xl font-semibold text-slate-900 mb-4">Ikuti Kami</h3>
                    <p class="text-slate-600 mb-6">Dapatkan update promo & template website terbaru</p>
                    <div class="flex space-x-3">
                        <button onclick="contactWarning()"
                            class="w-10 h-10 bg-blue-500 rounded-lg flex items-center justify-center text-white hover:bg-blue-600 transition-colors">
                            <!-- Facebook -->
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M22 12a10 10 0 10-11.5 9.9v-7h-2v-3h2v-2.3c0-2 1.2-3.1 3-3.1.9 0 1.8.1 1.8.1v2h-1c-1 0-1.3.6-1.3 1.2V12h2.2l-.4 3h-1.8v7A10 10 0 0022 12" />
                            </svg>
                        </button>
                        <button onclick="contactWarning()"
                            class="w-10 h-10 bg-pink-500 rounded-lg flex items-center justify-center text-white hover:bg-pink-600 transition-colors">
                            <!-- Instagram -->
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M7 2C4.2 2 2 4.2 2 7v10c0 2.8 2.2 5 5 5h10c2.8 0 5-2.2 5-5V7c0-2.8-2.2-5-5-5H7zm10 2c1.7 0 3 1.3 3 3v10c0
              1.7-1.3 3-3 3H7c-1.7 0-3-1.3-3-3V7c0-1.7 1.3-3 3-3h10zm-5
              3a5 5 0 100 10 5 5 0 000-10zm0 2a3 3 0 110 6 3 3 0 010-6zm4.8-.9a1.2 1.2 0 100 2.4 1.2 1.2 0 000-2.4z" />
                            </svg>
                        </button>
                        <button onclick="contactWarning()"
                            class="w-10 h-10 bg-red-500 rounded-lg flex items-center justify-center text-white hover:bg-red-600 transition-colors">
                            <!-- YouTube -->
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.5 6.2a3 3 0 00-2.1-2.1C19.5 3.5 12 3.5 12 3.5s-7.5 0-9.4.6A3 3 0 00.5 6.2C0 8.1 0 12 0 12s0 3.9.5
              5.8a3 3 0 002.1 2.1c1.9.5 9.4.5 9.4.5s7.5 0 9.4-.5a3 3 0 002.1-2.1c.5-1.9.5-5.8.5-5.8s0-3.9-.5-5.8zM9.5
              15.6V8.4L15.8 12l-6.3 3.6z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Footer -->
    <footer class="bg-gradient-to-br from-slate-900 via-slate-800 to-slate-900 text-white relative overflow-hidden">
        <!-- Background decoration -->
        <div class="absolute inset-0 bg-gradient-to-r from-blue-600/10 to-purple-600/10"></div>
        <div
            class="absolute top-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-blue-500/50 to-transparent">
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <!-- Main Footer Content -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 mb-12">

                <!-- Company Info -->
                <div class="lg:col-span-5 space-y-6">
                    <div>
                        <h3
                            class="text-3xl font-bold bg-gradient-to-r from-blue-400 to-purple-400 bg-clip-text text-transparent mb-4">
                            Centechno
                        </h3>
                        <p class="text-slate-300 text-lg leading-relaxed max-w-md">
                            Kami fokus pada <span class="font-semibold text-blue-400">jasa pembuatan website
                                profesional</span>
                            dan <span class="font-semibold text-purple-400">template website siap pakai</span> untuk
                            mendukung
                            bisnis Anda tampil maksimal di era digital.
                        </p>
                    </div>

                    <!-- Social Media -->
                    <div>
                        <h4 class="font-semibold mb-4 text-slate-200">Ikuti Kami</h4>
                        <div class="flex space-x-4">
                            <!-- Instagram -->
                            <button onclick="contactWarning()" class="group">
                                <div
                                    class="w-10 h-10 bg-slate-700/50 rounded-lg flex items-center justify-center group-hover:bg-pink-500 transition-all duration-300 group-hover:scale-110">
                                    <svg class="w-5 h-5 text-slate-400 group-hover:text-white" fill="currentColor"
                                        viewBox="0 0 24 24">
                                        <path d="M7 2C4.2 2 2 4.2 2 7v10c0 2.8 2.2 5 5 5h10c2.8 0 5-2.2 5-5V7c0-2.8-2.2-5-5-5H7zm10 2c1.7 0
                    3 1.3 3 3v10c0 1.7-1.3 3-3 3H7c-1.7 0-3-1.3-3-3V7c0-1.7 1.3-3 3-3h10zm-5
                    3a5 5 0 100 10 5 5 0 000-10zm0 2a3 3 0 110 6 3 3 0 010-6zm4.8-.9a1.2
                    1.2 0 100 2.4 1.2 1.2 0 000-2.4z" />
                                    </svg>
                                </div>
                            </button>
                            <!-- Facebook -->
                            <button onclick="contactWarning()" class="group">
                                <div
                                    class="w-10 h-10 bg-slate-700/50 rounded-lg flex items-center justify-center group-hover:bg-blue-600 transition-all duration-300 group-hover:scale-110">
                                    <svg class="w-5 h-5 text-slate-400 group-hover:text-white" fill="currentColor"
                                        viewBox="0 0 24 24">
                                        <path d="M22 12a10 10 0 10-11.5 9.9v-7h-2v-3h2v-2.3c0-2 1.2-3.1 3-3.1.9 0 1.8.1 1.8.1v2h-1c-1
                  0-1.3.6-1.3 1.2V12h2.2l-.4 3h-1.8v7A10 10 0 0022 12" />
                                    </svg>
                                </div>
                            </button>
                            <!-- YouTube -->
                            <button onclick="contactWarning()" class="group">
                                <div
                                    class="w-10 h-10 bg-slate-700/50 rounded-lg flex items-center justify-center group-hover:bg-red-600 transition-all duration-300 group-hover:scale-110">
                                    <svg class="w-5 h-5 text-slate-400 group-hover:text-white" fill="currentColor"
                                        viewBox="0 0 24 24">
                                        <path d="M23.5 6.2a3 3 0 00-2.1-2.1C19.5 3.5 12 3.5 12 3.5s-7.5 0-9.4.6A3 3 0 00.5
                    6.2C0 8.1 0 12 0 12s0 3.9.5 5.8a3 3 0 002.1 2.1c1.9.5 9.4.5 9.4.5s7.5
                    0 9.4-.5a3 3 0 002.1-2.1c.5-1.9.5-5.8.5-5.8s0-3.9-.5-5.8zM9.5
                    15.6V8.4L15.8 12l-6.3 3.6z" />
                                    </svg>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="lg:col-span-2">
                    <h4 class="text-xl font-semibold mb-6 text-slate-200">Navigasi</h4>
                    <ul class="space-y-4">
                        <li><a href="#home"
                                class="text-slate-400 hover:text-blue-400 transition-colors duration-300 flex items-center group">
                                <span
                                    class="w-1 h-1 bg-blue-400 rounded-full mr-3 opacity-0 group-hover:opacity-100 transition-opacity"></span>
                                Beranda
                            </a></li>
                        <li><a href="#services"
                                class="text-slate-400 hover:text-blue-400 transition-colors duration-300 flex items-center group">
                                <span
                                    class="w-1 h-1 bg-blue-400 rounded-full mr-3 opacity-0 group-hover:opacity-100 transition-opacity"></span>
                                Layanan
                            </a></li>
                        <li><a href="#pricing"
                                class="text-slate-400 hover:text-blue-400 transition-colors duration-300 flex items-center group">
                                <span
                                    class="w-1 h-1 bg-blue-400 rounded-full mr-3 opacity-0 group-hover:opacity-100 transition-opacity"></span>
                                Paket Harga
                            </a></li>
                        <li><a href="#contact"
                                class="text-slate-400 hover:text-blue-400 transition-colors duration-300 flex items-center group">
                                <span
                                    class="w-1 h-1 bg-blue-400 rounded-full mr-3 opacity-0 group-hover:opacity-100 transition-opacity"></span>
                                Kontak
                            </a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div class="lg:col-span-3">
                    <h4 class="text-xl font-semibold mb-6 text-slate-200">Kontak Kami</h4>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <div
                                class="w-6 h-6 bg-blue-600/20 rounded flex items-center justify-center mr-3 mt-0.5 flex-shrink-0">
                                <svg class="w-4 h-4 text-blue-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                </svg>
                            </div>
                            <button onclick="contactWarning()"
                                class="text-slate-400 hover:text-blue-400 transition-colors">
                                support@centechno.com
                            </button>
                        </li>
                        <li class="flex items-start">
                            <div class="w-6 h-6 bg-blue-600/20 rounded flex items-center justify-center mr-3 mt-0.5">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                    class="bi bi-whatsapp w-4 h-4 text-blue-400" viewBox="0 0 16 16">
                                    <path
                                        d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
                                </svg>
                            </div>
                            <a href="tel:+6281234567890" class="text-slate-400 hover:text-blue-400 transition-colors">
                                +62 812-3456-7890
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Bottom Bar -->
            <div class="border-t border-slate-700/50 pt-8">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <p class="text-slate-400 text-sm">
                        © <span id="year">2024</span> Centechno. Jasa Pembuatan Website & Template. All rights
                        reserved.
                    </p>
                    <div class="flex space-x-6 mt-4 md:mt-0">
                        <a href="#" class="text-slate-400 hover:text-blue-400 text-sm transition-colors">Privacy
                            Policy</a>
                        <a href="#" class="text-slate-400 hover:text-blue-400 text-sm transition-colors">Terms
                            of Service</a>
                        <a href="#"
                            class="text-slate-400 hover:text-blue-400 text-sm transition-colors">Sitemap</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="js/index_script.js"></script>
    <script>
        function scrollToSection(id) {
            const section = document.getElementById(id);
            if (section) {
                section.scrollIntoView({
                    behavior: 'smooth'
                });
                history.replaceState(null, null, ' ');
            }
        }

        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('#form_survei').submit(function(e) {
                e.preventDefault();

                $.ajax({
                    url: "/survei",
                    type: "POST",
                    data: $(this).serialize(),
                    dataType: "json",

                    // 🔹 Tampilkan loading sebelum request dikirim
                    beforeSend: function() {
                        Swal.fire({
                            title: 'Mengirim survei...',
                            text: 'Mohon tunggu sebentar',
                            allowOutsideClick: false,
                            didOpen: () => {
                                Swal.showLoading();
                            }
                        });
                    },

                    success: function() {
                        Swal.fire("Survei Berhasil Dikirim!",
                            "Terima Kasih Sudah Mengisi Survei!", "success");
                        $('#form_survei')[0].reset();
                    },

                    error: function(xhr) {
                        Swal.fire("Gagal!", "Terjadi Kesalahan", "error");
                        console.log("Error:", xhr.status, xhr.responseText);
                    }
                });
            });
        });
    </script>
</body>

</html>
