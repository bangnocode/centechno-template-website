<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description"
    content="Centechno — layanan desain grafis, branding, dan web untuk UMKM & bisnis. Logo, website, dan konten sosial media profesional.">
  <meta name="keywords" content="desain logo, branding UMKM, web design, social media content, studio desain">
  <meta name="author" content="Centechno">

  <title>Centechno</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
</head>

<body class="scroll-smooth">

  <nav id="main-navbar" class="fixed z-20 top-0 start-0 w-full transition-colors duration-300 bg-transparent">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
      <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
        <div class="h-8 w-8 bg-gradient-to-r from-blue-500 to-purple-600 rounded-lg flex items-center justify-center">
          <img src="{{asset('img/logo-ct.png')}}" alt="Logo Centechno" class="w-6 h-6">
        </div>
        <span class="self-center text-lg font-semibold whitespace-nowrap text-white">Centechno</span>
      </a>
      <button data-collapse-toggle="navbar-default" type="button"
        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-white md:hidden hover:bg-gray-100 hover:bg-opacity-10 rounded-lg transition-colors"
        aria-controls="navbar-default" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M1 1h15M1 7h15M1 13h15" />
        </svg>
      </button>
      <div class="hidden w-full md:block md:w-auto" id="navbar-default">
        <ul
          class="font-medium flex flex-col p-4 md:p-0 mt-4 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 border-t-white border-t">
          <li class="m-0">
            <a href="#home"
              class="block py-2 px-3 text-white rounded-sm md:bg-transparent md:p-0 hover:text-blue-300 transition-colors"
              aria-current="page">Home</a>
          </li>
          <li class="m-0">
            <a href="#layanan-kami"
              class="block py-2 px-3 text-white rounded-sm hover:bg-gray-100 hover:bg-opacity-10 md:hover:bg-transparent md:border-0 md:p-0 hover:text-blue-300 transition-colors">Layanan</a>
          </li>
          <li class="m-0">
            <a href="#tentang-kami"
              class="block py-2 px-3 text-white rounded-sm hover:bg-gray-100 hover:bg-opacity-10 md:hover:bg-transparent md:border-0 md:p-0 hover:text-blue-300 transition-colors">Tentang
              Kami</a>
          </li>
          <li class="m-0">
            <a href="#kontak"
              class="block py-2 px-3 text-white rounded-sm hover:bg-gray-100 hover:bg-opacity-10 md:hover:bg-transparent md:border-0 md:p-0 hover:text-blue-300 transition-colors">Kontak</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div id="home" class="h-screen w-full flex items-center justify-center bg-[url(./img/background.webp)] text-white bg-no-repeat bg-cover bg-center">
    <div class="container-banner text-center">
      <h1 class="text-2xl font-bold mb-6 px-6 md:text-4xl">Desain <span class="text-yellow-400">Cerdas</span> <br>
        Solusi
        Digital untuk Bisnis Anda</h1>
      <h2 class="text-base font-medium mx-12 mb-16 md:text-xl md:mx-16 xl:mx-64 lg:mx-32 text-gray-200">Kami membantu UMKM dan perusahaan membangun identitas visual yang kuat — dari logo, website hingga konten media sosial yang menarik pelanggan.</h2>
      <div class="flex justify-center">
        <a href="#layanan-kami"
          class="bg-transparent border-white border-2 hover:bg-white hover:text-blue-900 font-medium text-base py-4 px-6 rounded-full flex items-center gap-2 w-max transition-all duration-300">Lihat
          Layanan <svg class="w-5 h-5 animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
          </svg></a>
      </div>
    </div>
  </div>

  <br id="layanan-kami">
  <div class="p-10 sm:px-24 md:px-24 xl:px-52 bg-gray-50">
    <h1 class="text-center font-bold text-3xl mb-3 md:text-4xl">Layanan Kami</h1>
    <h2 class="text-center font-medium text-base mb-10 md:text-xl text-gray-600">Layanan profesional yang kami tawarkan untuk meningkatkan identitas dan penjualan bisnis Anda</h2>
    <div class="grid gap-8 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">

      <div
        class="card-product bg-white border-yellow-400 border-2 rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 pb-8"
        data-aos="fade-up" data-aos-offset="25">
        <div
          class="container-name-product bg-gradient-to-r from-blue-600 to-blue-800 px-8 py-6 rounded-t-lg text-center text-black">
          <h1 class="text-2xl"><b>Desain Logo & Branding</b></h1>
        </div>
        <div class="container-detail-product px-8 text-lg font-medium rounded-b-lg">
          <h1 class="font-bold mb-3 text-lg">Apa yang didapat :</h1>

          <h1 class="flex text-base items-center gap-2 mb-3">
            <div class="w-5 h-5 bg-green-500 rounded-full flex items-center justify-center">
              <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
            </div>3 konsep logo awal (pilih satu yang disempurnakan)
          </h1>

          <h1 class="flex text-base items-center gap-2 mb-3">
            <div class="w-5 h-5 bg-green-500 rounded-full flex items-center justify-center">
              <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
            </div>2x revisi final & delivery file vector (AI, SVG, PDF)
          </h1>

          <h1 class="flex text-base items-center gap-2 mb-3">
            <div class="w-5 h-5 bg-green-500 rounded-full flex items-center justify-center">
              <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
            </div>Logo versi warna & monokrom + favicon
          </h1>

          <h1 class="flex text-base items-center gap-2 mb-3">
            <div class="w-5 h-5 bg-green-500 rounded-full flex items-center justify-center">
              <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
            </div>Brand guideline singkat (warna & tipografi)
          </h1>
        </div>
        <div class="btn-contact-admin flex justify-center mt-12">
          <a href="#kontak"
            class="text-white font-semibold flex gap-3 text-base bg-green-600 hover:bg-green-700 py-4 px-5 rounded-lg justify-center items-center transition-colors">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
              <path
                d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884" />
            </svg>Hubungi Admin</a>
        </div>
      </div>

      <div
        class="card-product bg-white border-green-400 border-2 rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 pb-8"
        data-aos="fade-up" data-aos-offset="25">
        <div
          class="container-name-product bg-gradient-to-r from-blue-600 to-blue-800 px-8 py-6 rounded-t-lg text-center text-black">
          <h1 class="text-2xl"><b>Website & Landing Page</b></h1>
        </div>
        <div class="container-detail-product px-8 text-lg font-medium rounded-b-lg">
          <h1 class="font-bold mb-3 text-lg">Apa yang didapat :</h1>

          <h1 class="flex text-base items-center gap-2 mb-3">
            <div class="w-5 h-5 bg-green-500 rounded-full flex items-center justify-center">
              <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
            </div>Desain responsif 1 halaman (single page) atau landing page
          </h1>

          <h1 class="flex text-base items-center gap-2 mb-3">
            <div class="w-5 h-5 bg-green-500 rounded-full flex items-center justify-center">
              <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
            </div>Integrasi kontak & formulir WhatsApp / email
          </h1>

          <h1 class="flex text-base items-center gap-2 mb-3">
            <div class="w-5 h-5 bg-green-500 rounded-full flex items-center justify-center">
              <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
            </div>Optimasi SEO dasar & kecepatan (performance)
          </h1>

          <h1 class="flex text-base items-center gap-2 mb-3">
            <div class="w-5 h-5 bg-green-500 rounded-full flex items-center justify-center">
              <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
            </div>1 tahun hosting & domain .my.id (opsional paket)
          </h1>
        </div>
        <div class="btn-contact-admin flex justify-center mt-12">
          <a href="#kontak"
            class="text-white font-semibold flex gap-3 text-base bg-green-600 hover:bg-green-700 py-4 px-5 rounded-lg justify-center items-center transition-colors">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
              <path
                d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884" />
            </svg>Hubungi Admin</a>
        </div>
      </div>

      <div
        class="card-product bg-white border-blue-400 border-2 rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 pb-8"
        data-aos="fade-up" data-aos-offset="25">
        <div
          class="container-name-product bg-gradient-to-r from-blue-600 to-blue-800 px-8 py-6 rounded-t-lg text-center text-black">
          <h1 class="text-2xl"><b>Konten Sosial Media</b></h1>
        </div>
        <div class="container-detail-product px-8 text-lg font-medium rounded-b-lg">
          <h1 class="font-bold mb-3 text-lg">Apa yang didapat :</h1>

          <h1 class="flex text-base items-center gap-2 mb-3">
            <div class="w-5 h-5 bg-green-500 rounded-full flex items-center justify-center">
              <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
            </div>Template post & story (5 desain per paket)
          </h1>

          <h1 class="flex text-base items-center gap-2 mb-3">
            <div class="w-5 h-5 bg-green-500 rounded-full flex items-center justify-center">
              <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
            </div>Copywriting singkat & call-to-action
          </h1>

          <h1 class="flex text-base items-center gap-2 mb-3">
            <div class="w-5 h-5 bg-green-500 rounded-full flex items-center justify-center">
              <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
            </div>Format siap unggah (PNG / MP4 / Canva link)
          </h1>

          <h1 class="flex text-base items-center gap-2 mb-3">
            <div class="w-5 h-5 bg-green-500 rounded-full flex items-center justify-center">
              <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
            </div>Strategi caption & hashtag untuk jangkauan
          </h1>
        </div>
        <div class="btn-contact-admin flex justify-center mt-12">
          <a href="#kontak"
            class="text-white font-semibold flex gap-3 text-base bg-green-600 hover:bg-green-700 py-4 px-5 rounded-lg justify-center items-center transition-colors">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
              <path
                d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884" />
            </svg>Hubungi Admin</a>
        </div>
      </div>

    </div>
  </div>

  <br id="tentang-kami">
  <div class="px-12 py-20 bg-blue-800 bg-no-repeat bg-cover bg-right md:px-28">
    <h1 class="mb-6 font-bold text-3xl text-start md:text-4xl text-white">Tentang Kami</h1>
    <div class="container-about-us text-white grid grid-cols-1 items-center justify-center gap-16 lg:grid-cols-2">
      <div data-aos="fade-right" data-aos-offset="25" class="text-base md:text-lg">
        <p><span class="font-bold text-yellow-400">Centechno</span> adalah studio desain yang fokus membantu usaha kecil, UMKM, dan brand lokal tumbuh melalui identitas visual yang kuat dan solusi digital praktis. Kami menggabungkan estetika desain dengan tujuan pemasaran untuk menghasilkan aset yang bukan hanya cantik, tapi juga mendatangkan pelanggan.</p>
        <p class="mt-4">Tim kami terdiri dari desainer, developer, dan content creator yang berpengalaman — siap mendampingi dari konsep hingga publikasi.</p>
      </div>
      <img src="{{ asset('img/undraw_designer_efwz.svg') }}" class="w-96 mx-auto" alt="Ilustrasi designer">
    </div>

  </div>

  <div class="p-10 pt-20">
    <h1 class="font-bold text-3xl mb-3 text-center md:text-4xl">Pendapat Mereka</h1>
    <h2 class="font-medium text-base mb-10 text-center md:text-xl md:px-32 text-gray-600">Testimoni klien yang sudah menggunakan layanan kami</h2>

    <div class="grid grid-cols-1 gap-8 md:px-20 lg:grid-cols-3">

      <div class="review-1 bg-white shadow-lg hover:shadow-xl transition-shadow rounded-lg p-5 items-center"
        data-aos="fade-up-right" data-aos-offset="25">
        <div class="mb-4">
          <h1 class="font-medium text-base text-gray-700">
            "Hasil logo sangat profesional dan sesuai brief. Proses cepat, komunikasi mudah, dan revisi ditangani rapi."
          </h1>
        </div>
        <div class="flex gap-1">
          <div class="w-10 h-10 bg-gray-300 rounded-full flex items-center justify-center">
            <span class="text-gray-600 text-sm font-bold">AD</span>
          </div>
          <div class="">
            <h1 class="ms-1 font-bold text-base">Andi Darmawan</h1>
            <div class="bintang-rating flex">
              <svg class="w-4 h-4 text-yellow-400 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="currentColor" viewBox="0 0 22 20">
                <path
                  d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
              </svg>
              <!-- repeat 4 more -->
              <svg class="w-4 h-4 text-yellow-400 ms-1" fill="currentColor" viewBox="0 0 22 20"><path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/></svg>
              <svg class="w-4 h-4 text-yellow-400 ms-1" fill="currentColor" viewBox="0 0 22 20"><path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/></svg>
              <svg class="w-4 h-4 text-yellow-400 ms-1" fill="currentColor" viewBox="0 0 22 20"><path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/></svg>
              <svg class="w-4 h-4 text-yellow-400 ms-1" fill="currentColor" viewBox="0 0 22 20"><path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/></svg>
            </div>
          </div>
        </div>
      </div>

      <div class="review-1 bg-white shadow-lg hover:shadow-xl transition-shadow rounded-lg p-5 items-center"
        data-aos="fade-up-right" data-aos-offset="25">
        <div class="mb-4">
          <h1 class="font-medium text-base text-gray-700">
            "Bantu kami membuat website yang mudah digunakan, booking naik 40% dalam bulan pertama."
          </h1>
        </div>
        <div class="flex gap-1">
          <div class="w-10 h-10 bg-gray-300 rounded-full flex items-center justify-center">
            <span class="text-gray-600 text-sm font-bold">SR</span>
          </div>
          <div class="">
            <h1 class="ms-1 font-bold text-base">Siti Rahma</h1>
            <div class="bintang-rating flex">
              <svg class="w-4 h-4 text-yellow-400 ms-1" fill="currentColor" viewBox="0 0 22 20"><path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/></svg>
              <!-- repeat 4 more -->
              <svg class="w-4 h-4 text-yellow-400 ms-1" fill="currentColor" viewBox="0 0 22 20"><path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/></svg>
              <svg class="w-4 h-4 text-yellow-400 ms-1" fill="currentColor" viewBox="0 0 22 20"><path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/></svg>
              <svg class="w-4 h-4 text-yellow-400 ms-1" fill="currentColor" viewBox="0 0 22 20"><path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/></svg>
              <svg class="w-4 h-4 text-yellow-400 ms-1" fill="currentColor" viewBox="0 0 22 20"><path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/></svg>
            </div>
          </div>
        </div>
      </div>

      <div class="review-1 bg-white shadow-lg hover:shadow-xl transition-shadow rounded-lg p-5 items-center"
        data-aos="fade-up-right" data-aos-offset="25">
        <div class="mb-4">
          <h1 class="font-medium text-base text-gray-700">
            "Harga kompetitif dan hasil berkualitas. Timnya responsif dan paham brand kami."
          </h1>
        </div>
        <div class="flex gap-1">
          <div class="w-10 h-10 bg-gray-300 rounded-full flex items-center justify-center">
            <span class="text-gray-600 text-sm font-bold">BY</span>
          </div>
          <div class="">
            <h1 class="ms-1 font-bold text-base">Budi Yanto</h1>
            <div class="bintang-rating flex">
              <svg class="w-4 h-4 text-yellow-400 ms-1" fill="currentColor" viewBox="0 0 22 20"><path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/></svg>
              <!-- repeat 4 more -->
              <svg class="w-4 h-4 text-yellow-400 ms-1" fill="currentColor" viewBox="0 0 22 20"><path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/></svg>
              <svg class="w-4 h-4 text-yellow-400 ms-1" fill="currentColor" viewBox="0 0 22 20"><path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/></svg>
              <svg class="w-4 h-4 text-yellow-400 ms-1" fill="currentColor" viewBox="0 0 22 20"><path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/></svg>
              <svg class="w-4 h-4 text-yellow-400 ms-1" fill="currentColor" viewBox="0 0 22 20"><path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/></svg>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="px-10 py-20 md:px-32 lg:px-44 xl:px-64" id="kontak">
    <div class="appear-bottom-to-top">
      <h1 class="text-3xl font-bold text-center mb-4 md:text-4xl">Ada Pertanyaan?</h1>
      <h1 class="text-base text-center font-medium mb-8 md:text-xl text-gray-600">Hubungi admin kami lewat salah satu kontak di bawah — cepat & ramah.</h1>

      <a href="tel:+6281234567890" class="rounded-3xl" data-aos="fade-left" data-aos-offset="25">
        <div
          class="container-telp border-2 border-gray-200 hover:border-blue-400 hover:shadow-lg transition-all rounded-3xl p-4 mb-4 flex gap-2 items-center text-base md:text-lg">
          <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
            </path>
          </svg>
          (+62) 812-3456-7890
        </div>
      </a>

      <a href="https://wa.me/6281234567890" class="rounded-3xl" data-aos="fade-left" data-aos-offset="25">
        <div
          class="container-telp border-2 border-gray-200 hover:border-blue-400 hover:shadow-lg transition-all rounded-3xl p-4 mb-4 flex gap-2 items-center text-base md:text-lg">
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-5 h-5 text-green-600 bi bi-whatsapp"
            viewBox="0 0 16 16">
            <path
              d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592"/>
          </svg>
          Chat WhatsApp: (+62) 812-3456-7890
        </div>
      </a>

      <a href="mailto:contact@centechno.id" class="rounded-3xl" data-aos="fade-left" data-aos-offset="25">
        <div
          class="container-telp border-2 border-gray-200 hover:border-blue-400 hover:shadow-lg transition-all rounded-3xl p-4 mb-4 flex gap-2 items-center text-base md:text-lg">
          <svg fill="#FF0000" viewBox="0 0 32 32" class="w-5 h-5" version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M16.114-0.011c-6.559 0-12.114 5.587-12.114 12.204 0 6.93 6.439 14.017 10.77 18.998 0.017 0.020 0.717 0.797 1.579 0.797h0.076c0.863 0 1.558-0.777 1.575-0.797 4.064-4.672 10-12.377 10-18.998 0-6.618-4.333-12.204-11.886-12.204zM16.515 29.849c-0.035 0.035-0.086 0.074-0.131 0.107-0.046-0.032-0.096-0.072-0.133-0.107l-0.523-0.602c-4.106-4.71-9.729-11.161-9.729-17.055 0-5.532 4.632-10.205 10.114-10.205 6.829 0 9.886 5.125 9.886 10.205 0 4.474-3.192 10.416-9.485 17.657zM16.035 6.044c-3.313 0-6 2.686-6 6s2.687 6 6 6 6-2.687 6-6-2.686-6-6-6z"></path></svg>
          Alamat kantor: Jl. Kreatif No. 12, Bandung
        </div>
      </a>
    </div>
  </div>

  <div class="p-10 bg-blue-900 text-center flex flex-col items-center">
    <h1 class="mb-1 text-lg font-bold text-white md:text-xl flex items-center gap-2"><img src="./img/logo.png" class="w-12" alt="logo">CENTECHNO</h1>
    <h2 class="mb-4 text-base font-semibold text-white md:text-lg">Desain Cerdas — Solusi Digital Berkualitas</h2>
    <h1 class="text-sm font-semibold text-white md:text-base">© 2025 Centechno. All rights reserved.</h1>
  </div>

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
  <script>
    AOS.init();

    const navbar = document.getElementById("main-navbar");
    const toggleButton = document.querySelector('[data-collapse-toggle]');
    const navMenu = document.getElementById('navbar-default');

    function updateNavbarBg() {
      const isScrolled = window.scrollY > 10;
      const isMenuOpen = !navMenu.classList.contains('hidden');
      const isMobile = window.innerWidth < 768;

      if (isScrolled || (isMobile && isMenuOpen)) {
        navbar.classList.remove("bg-transparent");
        navbar.classList.add("bg-blue-900", "backdrop-blur-lg", "bg-opacity-90");
      } else {
        navbar.classList.remove("bg-blue-900", "backdrop-blur-lg", "bg-opacity-90");
        navbar.classList.add("bg-transparent");
      }
    }

    window.addEventListener("scroll", updateNavbarBg);
    toggleButton.addEventListener("click", function () {
      setTimeout(updateNavbarBg, 10);
    });
    window.addEventListener("resize", updateNavbarBg);
    window.addEventListener("load", updateNavbarBg);
  </script>

</body>

</html>
