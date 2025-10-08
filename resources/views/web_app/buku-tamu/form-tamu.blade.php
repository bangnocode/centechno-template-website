@extends('web_app.buku-tamu.main-app')

@section('content')
    <div class="relative bg-white rounded-3xl shadow-sm border border-gray-200 w-full max-w-2xl p-8 overflow-hidden">
        <!-- Decorative Element -->
        <div
            class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-blue-50 to-indigo-50 rounded-full blur-3xl opacity-60 -translate-y-16 translate-x-16">
        </div>

        <div class="relative mb-6">
            <div
                class="inline-flex items-center justify-center w-12 h-12 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-xl mb-3 shadow-lg shadow-blue-500/20">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                </svg>
            </div>
            <h1 class="text-2xl font-bold text-gray-900 tracking-tight">Buku Tamu</h1>
            <p class="text-gray-500 mt-1 text-sm">Silakan isi data kunjungan Anda</p>
        </div>

        <form class="space-y-4 relative" autocomplete="off">
            @csrf

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <!-- Nama -->
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-1.5">Nama Lengkap</label>
                    <input type="text" name="nama" placeholder="Masukkan nama" required id="nama"
                        class="w-full rounded-lg border-2 border-gray-200 px-3 py-2 text-base text-gray-900 placeholder:text-gray-400 focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 outline-none transition-all duration-200">
                </div>

                <!-- Alamat -->
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-1.5">Alamat</label>
                    <input type="text" name="alamat" placeholder="Masukkan alamat" required id="alamat"
                        class="w-full rounded-lg border-2 border-gray-200 px-3 py-2 text-base text-gray-900 placeholder:text-gray-400 focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 outline-none transition-all duration-200">
                </div>

                <!-- Asal -->
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-1.5">Asal / Instansi (Opsional)</label>
                    <input type="text" name="asal" placeholder="Contoh: Kantor Kecamatan" id="asal"
                        class="w-full rounded-lg border-2 border-gray-200 px-3 py-2 text-base text-gray-900 placeholder:text-gray-400 focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 outline-none transition-all duration-200">
                </div>

                <!-- Nomor HP -->
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-1.5">Nomor HP</label>
                    <input type="text" name="no_hp" id="no_hp" placeholder="08xxxxxxxxxx" maxlength="15"
                        inputmode="numeric"
                        class="w-full rounded-lg border-2 border-gray-200 px-3 py-2 text-base text-gray-900 placeholder:text-gray-400 focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 outline-none transition-all duration-200"
                        oninput="this.value = this.value.replace(/[^0-9]/g, '');" required>
                </div>
            </div>

            <!-- Tujuan -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-1.5">Tujuan Kunjungan</label>
                <textarea name="tujuan_kunjungan" rows="2" placeholder="Tuliskan tujuan kunjungan Anda..." required
                    id="tujuan_kunjungan"
                    class="w-full rounded-lg border-2 border-gray-200 px-3 py-2 text-base text-gray-900 placeholder:text-gray-400 focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 outline-none resize-none transition-all duration-200"></textarea>
            </div>

            <!-- Tombol -->
            <div class="pt-1">
                <button type="submit" id="btnSubmit"
                    class="w-full bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white font-semibold py-2.5 text-md rounded-lg shadow-lg shadow-blue-500/30 hover:shadow-xl hover:shadow-blue-500/40 hover:-translate-y-0.5 transition-all duration-200">
                    Kirim
                </button>
            </div>
        </form>

        <div class="relative mt-5 pt-4 border-t border-gray-100">
            <p class="text-center text-sm text-gray-400">
                © {{ date('Y') }} Buku Tamu Digital
            </p>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $('#btnSubmit').click(function(e) {
            e.preventDefault();

            $('#btnSubmit').text('Menyimpan...');

            $.ajax({
                url: "{{ url('app/buku-tamu/store') }}",
                type: 'POST',
                data: {
                    nama: $('#nama').val(),
                    alamat: $('#alamat').val(),
                    asal: $('#asal').val(),
                    no_hp: $('#no_hp').val(),
                    tujuan_kunjungan: $('#tujuan_kunjungan').val()
                },
                success: function() {
                    $('#btnSubmit').text('Kirim');
                    Swal.fire({
                        title: "Terima Kasih!",
                        text: "Terima Kasih Telah Mengisi Buku Tamu",
                        icon: "success"
                    });
                    $('form')[0].reset();
                },
                error: function(xhr) {
                    Swal.fire({
                        title: "Gagal!",
                        text: "Terjadi kesalahan. Silakan coba lagi.",
                        icon: "error",
                        confirmButtonColor: "#dc2626"
                    });
                    console.error(xhr.responseText);
                },
            });
        });
    </script>
@endsection
