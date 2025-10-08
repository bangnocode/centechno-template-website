<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Centechno - Buku Tamu Admin</title>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- DataTables (Core Only — NO TAILWIND THEME) -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.4/css/dataTables.dataTables.min.css">

    <!-- Fix: Clean, Modern Light Theme for DataTables -->
    <style>
        .datatable-container {
            font-family: "Inter", "Segoe UI", sans-serif;
            color: #1f2937;
        }

        .datatable-container table.dataTable {
            width: 100%;
            border-collapse: separate !important;
            border-spacing: 0 !important;
            background: white;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.04);
            font-weight: 500;
        }

        .datatable-container table.dataTable thead {
            background: #f1f5f9;
            font-weight: 700;
            font-size: 15px;
            color: #1e293b;
        }

        .datatable-container table.dataTable thead th {
            position: relative;
            padding: 14px 22px;
            text-align: left;
            border-bottom: 2px solid #e2e8f0;
            vertical-align: middle;
            background: #f1f5f9;
            padding-right: 28px !important;
        }

        .datatable-container table.dataTable tbody td {
            padding: 14px 22px;
            border-bottom: 1px solid #e5e7eb;
            vertical-align: middle;
            color: #374151;
            background: white;
        }

        .datatable-container table.dataTable tbody tr:hover td {
            background-color: #f9fafb;
        }

        /* Sort icons */
        .datatable-container table.dataTable thead th.sorting:before,
        .datatable-container table.dataTable thead th.sorting_asc:before,
        .datatable-container table.dataTable thead th.sorting_desc:before {
            display: none !important;
        }

        .datatable-container table.dataTable thead th.sorting:after,
        .datatable-container table.dataTable thead th.sorting_asc:after,
        .datatable-container table.dataTable thead th.sorting_desc:after {
            position: absolute;
            right: 8px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 0.8em;
            opacity: 0.7;
        }

        .datatable-container table.dataTable thead th.sorting:after {
            content: "⇅";
            color: #9ca3af;
        }

        .datatable-container table.dataTable thead th.sorting_asc:after {
            content: "▲";
            color: #2563eb;
        }

        .datatable-container table.dataTable thead th.sorting_desc:after {
            content: "▼";
            color: #2563eb;
        }

        /* Delete button */
        .datatable-container .btn-delete {
            background-color: #fee2e2;
            color: #dc2626;
            border: none;
            border-radius: 8px;
            padding: 6px 12px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 5px;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .datatable-container .btn-delete:hover {
            background-color: #f87171;
            color: white;
            transform: translateY(-1px);
            box-shadow: 0 2px 5px rgba(220, 38, 38, 0.25);
        }

        .datatable-container .btn-delete svg {
            width: 16px;
            height: 16px;
        }

        /* Pagination + search */
        .datatable-container .dataTables_filter input,
        .datatable-container .dataTables_length select {
            border: 2px solid #d1d5db !important;
            border-radius: 8px !important;
            padding: 8px 12px !important;
            font-size: 14px;
            color: #111827 !important;
            background: white !important;
            transition: 0.2s;
        }

        .datatable-container .dataTables_filter input:focus,
        .datatable-container .dataTables_length select:focus {
            border-color: #2563eb !important;
            box-shadow: 0 0 0 2px #bfdbfe;
            outline: none;
        }

        .datatable-container .dataTables_paginate .paginate_button {
            border: none !important;
            background: #e5e7eb !important;
            border-radius: 6px !important;
            margin: 0 3px !important;
            color: #1f2937 !important;
            font-weight: 600 !important;
            transition: all 0.2s ease;
        }

        .datatable-container .dataTables_paginate .paginate_button:hover {
            background: #3b82f6 !important;
            color: white !important;
        }

        .datatable-container .dataTables_paginate .paginate_button.current {
            background: #3b82f6 !important;
            color: white !important;
            box-shadow: 0 2px 6px rgba(59, 130, 246, 0.3);
        }

        .datatable-container .dataTables_info {
            color: #6b7280 !important;
            font-size: 0.875rem !important;
            margin-top: 10px;
        }
    </style>

</head>

<body class="bg-gray-50">
    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar -->
        <aside id="sidebar"
            class="sidebar-transition w-64 bg-white border-r border-gray-200 flex flex-col fixed lg:relative h-full z-40 -translate-x-full lg:translate-x-0">
            <!-- Logo -->
            <div class="h-16 flex items-center px-6 border-b border-gray-200">
                <div class="flex items-center space-x-3">
                    <div
                        class="w-10 h-10 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-xl flex items-center justify-center shadow-lg shadow-blue-500/20">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                    </div>
                    <div>
                        <h2 class="text-sm font-bold text-gray-900">Buku Tamu</h2>
                        <p class="text-xs text-gray-500">Admin Panel</p>
                    </div>
                </div>
            </div>

            <!-- Navigation -->
            <nav class="flex-1 px-4 py-6 space-y-2 overflow-y-auto">
                <a href="#"
                    class="flex items-center space-x-3 px-4 py-3 rounded-lg bg-blue-50 text-blue-600 font-medium text-sm transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    <span>Dashboard</span>
                </a>
            </nav>

            <!-- User -->
            <div class="p-4 border-t border-gray-200">
                <div class="space-y-3">
                    <div class="flex items-center space-x-3 px-3 py-2">
                        <div class="relative">
                            <div
                                class="w-11 h-11 bg-gradient-to-br from-blue-500 via-indigo-500 to-purple-600 rounded-xl flex items-center justify-center text-white font-bold shadow-md">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                </svg>
                            </div>
                        </div>
                        <div>
                            <p class="text-sm font-bold text-gray-900">
                                {{ Auth::user()->name ?? 'Admin' }}
                            </p>
                            <p class="text-xs text-gray-500">
                                {{ Auth::user()->email ?? 'admin@centechno.com' }}
                            </p>

                        </div>
                    </div>
                    <form action="{{ route('buku.tamu.logout') }}" method="POST" class="">
                        @csrf
                        <button type="submit"
                            class="group flex gap-3 items-center justify-center p-2 bg-gradient-to-br from-red-500 to-red-600 hover:from-red-600 hover:to-red-700 rounded-xl transition-all duration-200 shadow-sm hover:shadow-md">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                            </svg>
                            <span class="text-sm font-semibold text-white">Keluar</span>
                        </button>
                    </form>
                </div>
            </div>
        </aside>

        <!-- Main -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <header class="h-16 bg-white border-b border-gray-200 flex items-center justify-between px-6">
                <div class="flex items-center space-x-4">
                    <button id="sidebarToggle" class="lg:hidden text-gray-600 hover:text-gray-900 transition">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                    <div>
                        <h1 class="text-xl font-bold text-gray-900">Dashboard</h1>
                        <p class="text-xs text-gray-500">Selamat datang kembali, Admin</p>
                    </div>
                </div>
            </header>

            <main class="flex-1 overflow-y-auto p-6">
                <div class="bg-white rounded-xl border border-gray-200 p-6 shadow-sm">
                    <h2 class="text-lg font-bold text-gray-900 mb-4">Data Buku Tamu</h2>

                    <div class="datatable-container overflow-x-auto">
                        <table id="tamuTable" class="w-full text-sm display dataTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Asal/Instansi</th>
                                    <th>No. HP</th>
                                    <th>Tujuan Kunjungan</th>
                                    <th>Tanggal</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.datatables.net/2.3.4/js/dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        // Sidebar toggle
        const sidebar = document.getElementById('sidebar');
        const sidebarToggle = document.getElementById('sidebarToggle');
        sidebarToggle.addEventListener('click', () => sidebar.classList.toggle('-translate-x-full'));

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        // Datatables init
        $(document).ready(function() {
            $('#tamuTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('buku.tamu.dashboard.data') }}",
                columns: [{
                        data: 'DT_RowIndex',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'nama',
                    },
                    {
                        data: 'alamat',
                    },
                    {
                        data: 'asal',
                    },
                    {
                        data: 'no_hp',
                    },
                    {
                        data: 'tujuan_kunjungan',
                    },
                    {
                        data: 'created_at',
                    },
                    {
                        data: 'id',
                        orderable: false,
                        searchable: false,
                        render: function(data) {
                            return `
                        <button class="btn-delete" data-id="${data}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                            <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5"/>
                            </svg>
                        </button>
                    `;
                        },
                    }
                ],
                order: [
                    [6, 'desc']
                ],
                language: {
                    search: "Cari:",
                    searchPlaceholder: "Cari data...",
                    lengthMenu: "Tampilkan _MENU_ data",
                    zeroRecords: "Tidak ada data ditemukan",
                    info: "Menampilkan _START_ - _END_ dari _TOTAL_ data",
                    infoEmpty: "Belum ada data",
                    infoFiltered: "(disaring dari _MAX_ total data)",
                    paginate: {
                        first: "Awal",
                        last: "Akhir",
                        next: "›",
                        previous: "‹"
                    },
                    processing: "Sedang memuat...",
                    emptyTable: "Tidak ada data tersedia"
                }
            });
        });

        $(document).on('click', '.btn-delete', function(e) {
            e.preventDefault();
            var id = $(this).data('id');
            $.ajax({
                url: "{{ url('app/buku-tamu/dashboard/destroy') }}/" + id,
                type: 'DELETE',
                success: function() {
                    Swal.fire({
                        title: "Berhasil!",
                        text: "Data Berhasil Dihapus!",
                        icon: "success"
                    });
                    $('#tamuTable').DataTable().ajax.reload();
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
</body>

</html>
