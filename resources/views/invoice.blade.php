<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice - Centechno</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 p-8">
    <div class="max-w-3xl mx-auto bg-white shadow-lg rounded-lg overflow-hidden">
        <!-- Header -->
        <div class="bg-blue-600 text-white p-6">
            <div class="flex justify-between items-start">
                <div>
                    <h1 class="text-3xl font-bold">CENTECHNO</h1>
                    <p class="text-blue-100 mt-1">Layanan Pembuatan & Pengelolaan Website</p>
                </div>
                <div class="text-right">
                    <p class="text-2xl font-bold">INVOICE</p>
                    <p class="text-blue-100 mt-1">#INV-20251002-041</p>
                </div>
            </div>
        </div>

        <!-- Info Section -->
        <div class="p-6">
            <div class="grid grid-cols-2 gap-6 mb-8">
                <div>
                    <h3 class="text-gray-600 font-semibold mb-2">Dari:</h3>
                    <p class="font-bold text-lg">Centechno</p>
                </div>
                <div class="text-right">
                    <h3 class="text-gray-600 font-semibold mb-2">Kepada:</h3>
                    <p class="font-bold text-lg">Pelanggan</p>
                    <p class="text-gray-600 mt-4">Tanggal: 05 Oktober 2025</p>
                    <p class="text-gray-600">Jatuh Tempo: 05 Oktober 2026</p>
                </div>
            </div>

            <!-- Items Table -->
            <div class="border border-gray-200 rounded-lg overflow-hidden mb-6">
                <table class="w-full">
                    <thead class="bg-gray-50">
                        <tr>
                            <th
                                class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Deskripsi</th>
                            <th
                                class="px-6 py-3 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Periode</th>
                            <th
                                class="px-6 py-3 text-right text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Harga</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr>
                            <td class="px-6 py-4">
                                <p class="font-semibold text-gray-900">Domain & Hosting</p>
                                <p class="text-sm text-gray-600 mt-1">Domain: da-esemkasa.my.id</p>
                                <p class="text-sm text-gray-600">Paket: Basic Hosting</p>
                            </td>
                            <td class="px-6 py-4 text-center text-gray-600">1 Tahun</td>
                            <td class="px-6 py-4 text-right font-semibold text-gray-900">Rp 100.000</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Total Section -->
            <div class="flex justify-end mb-8">
                <div class="w-64">
                    <div class="flex justify-between py-2 border-b border-gray-200">
                        <span class="text-gray-600">Subtotal:</span>
                        <span class="font-semibold">Rp 100.000</span>
                    </div>
                    <div class="flex justify-between py-2 border-b border-gray-200">
                        <span class="text-gray-600">Pajak (0%):</span>
                        <span class="font-semibold">Rp 0</span>
                    </div>
                    <div class="flex justify-between py-3 bg-blue-50 px-4 rounded-lg mt-2">
                        <span class="text-lg font-bold text-gray-900">TOTAL:</span>
                        <span class="text-lg font-bold text-blue-600">Rp 100.000</span>
                    </div>
                </div>
            </div>

            <!-- Payment Info -->
            <div class="bg-gray-50 p-6 rounded-lg mb-6">
                <h3 class="font-bold text-gray-900 mb-3">Informasi Pembayaran:</h3>
                <div class="space-y-2 text-sm">
                    <div class="flex">
                        <span class="text-gray-600 w-44">Metode Pembayaran:</span>
                        <span class="font-semibold">QRIS</span>
                    </div>
                    <div class="flex">
                        <span class="text-gray-600 w-44">Atas Nama:</span>
                        <span class="font-semibold">Centechno</span>
                    </div>
                </div>
            </div>

            <!-- Notes -->
            <div class="border-t border-gray-200 pt-6">
                <h3 class="font-bold text-gray-900 mb-2">Catatan:</h3>
                <ul class="text-sm text-gray-600 space-y-1">
                    <li>• Layanan akan diaktifkan setelah pembayaran dikonfirmasi</li>
                    <li>• Domain akan aktif selama 1 tahun sejak tanggal aktivasi</li>
                    <li>• Perpanjangan otomatis jika tidak dibatalkan 7 hari sebelum jatuh tempo</li>
                </ul>
            </div>
        </div>

        <!-- Footer -->
        <div class="bg-gray-50 p-6 text-center border-t border-gray-200">
            <p class="text-sm text-gray-600">Terima kasih atas kepercayaan Anda menggunakan layanan Centechno</p>
            <p class="text-xs text-gray-500 mt-2">www.centechno.my.id</p>
        </div>
    </div>
</body>

</html
