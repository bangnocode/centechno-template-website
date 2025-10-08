@extends('web_app.buku-tamu.main-app')

@section('content')
    <div class="relative bg-white rounded-3xl shadow-sm border border-gray-200 w-full max-w-md p-8 overflow-hidden">
        <!-- Decorative Element -->
        <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-blue-50 to-indigo-50 rounded-full blur-3xl opacity-60 -translate-y-16 translate-x-16"></div>
        
        <div class="relative mb-6 text-center">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-2xl mb-4 shadow-lg shadow-blue-500/20">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                </svg>
            </div>
            <h1 class="text-2xl font-bold text-gray-900 tracking-tight">Selamat Datang</h1>
            <p class="text-gray-500 mt-2 text-sm">Masuk untuk mengelola buku tamu</p>
        </div>

        <form action="{{ route('buku.tamu.login.store')}}" method="POST" class="space-y-5 relative" autocomplete="off">
            @csrf

            <!-- Username / Email -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-1.5">Email</label>
                <input type="text" name="email" placeholder="Masukkan email"
                    class="w-full rounded-lg border-2 border-gray-200 px-4 py-2.5 text-base text-gray-900 placeholder:text-gray-400 focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 outline-none transition-all duration-200">
            </div>

            <!-- Password -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-1.5">Password</label>
                <input type="password" name="password" placeholder="Masukkan password"
                    class="w-full rounded-lg border-2 border-gray-200 px-4 py-2.5 text-base text-gray-900 placeholder:text-gray-400 focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 outline-none transition-all duration-200">
            </div>

            @if (session('invalid'))
                <p class="m-0 p-0 text-red-500 font-semibold">{{session('invalid')}}</p>
            @endif

            <!-- Tombol Login -->
            <div>
                <button type="submit"
                    class="w-full bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white font-semibold py-3 text-base rounded-lg shadow-lg shadow-blue-500/30 hover:shadow-xl hover:shadow-blue-500/40 hover:-translate-y-0.5 transition-all duration-200">
                    Masuk
                </button>
            </div>
        </form>

        <div class="relative mt-6 pt-5 border-t border-gray-100">
            <p class="text-center text-sm text-gray-400">
                © {{ date('Y') }} Buku Tamu Digital
            </p>
        </div>
    </div>
@endsection