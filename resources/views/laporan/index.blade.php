<x-app-layout>
    <style>
        @media print {

            .no-print,
            nav,
            aside,
            header {
                display: none !important;
            }

            main {
                margin-left: 0 !important;
                padding: 0 !important;
                width: 100% !important;
            }

            body {
                background-color: white !important;
            }

            .shadow-sm {
                box-shadow: none !important;
                border: 1px solid #ddd !important;
            }

            /* Hilangkan scroll saat print */
            .overflow-y-auto,
            .overflow-x-auto {
                overflow: visible !important;
                height: auto !important;
            }
        }
    </style>

    <x-slot name="header"></x-slot>

    <div class="flex h-screen bg-gray-50 overflow-hidden font-sans">

        <x-sidebar class="no-print" />

        <main class="flex-1 ml-64 overflow-y-auto bg-gray-50">
            <div class="py-10 px-8">

                <div
                    class="max-w-7xl mx-auto mb-8 flex flex-col sm:flex-row justify-between items-start sm:items-end gap-4 no-print">
                    <div>
                        <h1 class="text-sm font-semibold text-indigo-600 tracking-wide uppercase">Namira Mart</h1>
                        <h2 class="text-3xl font-bold text-gray-900 mt-1">Laporan Gaji</h2>
                        <p class="mt-2 text-sm text-gray-500">Rekapitulasi pendapatan bersih karyawan.</p>
                    </div>

                    <div class="flex flex-col sm:flex-row gap-3 w-full sm:w-auto">

                        <form method="GET" action="{{ route('laporan.index') }}">
                            <div
                                class="flex items-center bg-white border border-gray-300 rounded-lg px-3 py-2 shadow-sm focus-within:ring-2 focus-within:ring-indigo-500 focus-within:border-indigo-500">
                                <svg class="w-5 h-5 text-gray-400 mr-2" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                    </path>
                                </svg>
                                <span class="text-sm text-gray-500 mr-2 font-medium">Periode:</span>

                                <input type="month" name="periode"
                                    class="text-sm border-none focus:ring-0 text-gray-700 bg-transparent outline-none cursor-pointer font-semibold p-0"
                                    value="{{ $periode }}" onchange="this.form.submit()">
                            </div>
                        </form>

                        <button onclick="window.print()"
                            class="inline-flex items-center justify-center px-4 py-2 bg-gray-800 border border-transparent rounded-lg font-medium text-sm text-white shadow-sm hover:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 transition-all gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z">
                                </path>
                            </svg>
                            <span>Cetak Laporan</span>
                        </button>
                    </div>
                </div>

                <div class="hidden print:block text-center mb-8 border-b-2 border-gray-800 pb-4">
                    <h1 class="text-3xl font-bold text-gray-900 uppercase tracking-wider">Namira Mart</h1>
                    <h2 class="text-xl text-gray-600 mt-1">Laporan Gaji Karyawan</h2>
                    <p class="text-sm text-gray-500 mt-2">Periode:
                        {{ \Carbon\Carbon::parse($periode)->translatedFormat('F Y') }}</p>
                </div>

                <div class="max-w-7xl mx-auto">
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                            Nama Karyawan</th>
                                        <th scope="col"
                                            class="px-6 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                            Jabatan</th>
                                        <th scope="col"
                                            class="px-6 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                            Gaji Pokok</th>
                                        <th scope="col"
                                            class="px-6 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                            Potongan</th>
                                        <th scope="col"
                                            class="px-6 py-4 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                            Total Gaji</th>
                                        <th scope="col"
                                            class="px-6 py-4 text-center text-xs font-semibold text-gray-500 uppercase tracking-wider no-print">
                                            Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @forelse ($laporan as $lap)
                                        <tr class="hover:bg-gray-50 transition-colors duration-150">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm font-bold text-gray-900">{{ $lap->nama_karyawan }}
                                                </div>
                                            </td>

                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span
                                                    class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                                                    {{ $lap->jabatan }}
                                                </span>
                                            </td>

                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-mono text-gray-600">
                                                Rp {{ number_format($lap->gaji_pokok, 0, ',', '.') }}
                                            </td>

                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center text-rose-500 font-mono text-sm">
                                                    <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                                                    </svg>
                                                    Rp {{ number_format($lap->potongan, 0, ',', '.') }}
                                                </div>
                                            </td>

                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span class="text-base font-bold font-mono text-emerald-600">
                                                    Rp {{ number_format($lap->total_gaji, 0, ',', '.') }}
                                                </span>
                                            </td>

                                            <td class="px-6 py-4 whitespace-nowrap text-center no-print">
                                                <button
                                                    class="text-indigo-600 hover:text-indigo-900 transition-colors flex items-center justify-center gap-1 mx-auto"
                                                    title="Lihat Slip Gaji">
                                                    <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z">
                                                        </path>
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                                        </path>
                                                    </svg>
                                                    <span class="text-xs font-medium">Slip</span>
                                                </button>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="px-6 py-10 text-center text-gray-500">
                                                Tidak ada data gaji untuk periode ini.
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>

                                <tfoot class="bg-gray-50 font-bold text-gray-900">
                                    <tr>
                                        <td colspan="4"
                                            class="px-6 py-3 text-right uppercase text-xs tracking-wider">Total
                                            Pengeluaran:</td>
                                        <td class="px-6 py-3 font-mono text-emerald-700">
                                            Rp {{ number_format($laporan->sum('total_gaji'), 0, ',', '.') }}
                                        </td>
                                        <td class="no-print"></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </main>
    </div>
</x-app-layout>
